export function registerServiceWorkers(isAlternativeServiceUsed, readerContentUrl, readerContentPage, assetsCacheName, format) {

    var readerLink = "/doi/" + format;
    if (isAlternativeServiceUsed) {
        if (format === "pdf") {
            readerLink = "/doi/epdf";
        } else if (format === "pdfplus") {
            readerLink = "/doi/epdfplus";
        }
    }
    var scopes = [
        "/reader/library",
        readerLink
    ];
    var swUrl = '/templates/jsp/cloudReader/readerServiceWorker.jsp';

    /* unregister service workers with scope (doi/pdf or doi/epdf) and (doi/pdfplus or doi/epdfplus)
       in case the USE_ALTERNATE_SERVICES_FOR_EREADER changed from disabled to enabled or from enabled to disabled. */
    navigator.serviceWorker.getRegistrations().then(function (registrations) {
        for (let registration of registrations) {
            // unregister old service workers that are not used anymore.
            if (isAlternativeServiceUsed) {
                if (registration.scope.includes("doi/pdf") || registration.scope.includes("doi/pdfplus")) {
                    unregisterSW(registration);
                }
            } else if (registration.scope.includes("doi/epdf") || registration.scope.includes("doi/epdfplus")) {
                unregisterSW(registration);
            }
        }
    });

    // register the service workers for each scope in 'scopes'.
    scopes.forEach(function (scope, index) {
        navigator.serviceWorker.register(swUrl, {scope: scope}).then(function (registration) {
            if (LIT.Reader.LogEnabled) {
                console.log("[ServiceWorkerContainer] successfully registered with scope: " + registration.scope);
            }
            // if the current scope is the reader.jsp page, send a message to SW to update the cached doi
            if (scope === readerLink) {
                var msg = {
                    readerContentUrl: readerContentUrl,
                    readerContentPage: readerContentPage,
                    assetsCacheName: assetsCacheName
                };
                if (registration.active) {
                    registration.active.postMessage(msg);
                } else {
                    /* for the first time we register the service worker the registration.active could be null, so we need
                       to wait until it is defined (activated). */
                    var waitUntilActivateRegistration = setInterval(function () {
                        if (registration.active) {
                            clearInterval(waitUntilActivateRegistration);
                            registration.active.postMessage(msg);
                        }
                    }, 100);
                }
            }
        }, function (error) {
            //This error means that something went wrong in registering SW, not in SW life cycle(install, fetch ..)
            console.error("[ServiceWorkerContainer] error in registering service worker " + error);
            // unregister all service workers if any error appeared in one of the service workers.
            navigator.serviceWorker.getRegistrations().then(function (registrations) {
                for (let registration of registrations) {
                    if (scopes.includes(new URL(registration.scope).pathname)) {
                        unregisterSW(registration);
                    }
                }
            });
        });
    });

    function unregisterSW(registration) {
        if (LIT.Reader.LogEnabled) {
            console.log("[ServiceWorkerContainer] unregistering service worker with scope " + registration.scope);
        }
        registration.unregister();
    }

}