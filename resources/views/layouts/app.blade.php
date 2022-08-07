<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
          content="Search and explore the millions of quality, peer-reviewed journal articles published.">
    <meta name="robots" content="noarchive"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preload" as="font"
          href="{{ asset('plugins/jsp/_style2/_tandf/pb2/fonts/icomoon/icomoonb0a0.woff?g276mb') }}" type="font/woff"
          crossorigin="anonymous">
    <link rel="preload" as="font"
          href="{{ asset('plugins/jsp/_style2/_tandf/pb2/fonts/google/opensans/open-sans-v23-latin-300.woff2') }}"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font"
          href="{{ asset('plugins/jsp/_style2/_tandf/pb2/fonts/google/opensans/open-sans-v23-latin-300italic.woff2') }}"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font"
          href="{{ asset('plugins/jsp/_style2/_tandf/pb2/fonts/google/opensans/open-sans-v23-latin-600.woff2') }}"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font"
          href="{{ asset('plugins/jsp/_style2/_tandf/pb2/fonts/google/opensans/open-sans-v23-latin-600italic.woff2') }}"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font"
          href="{{ asset('plugins/jsp/_style2/_tandf/pb2/fonts/google/opensans/open-sans-v23-latin-700.woff2') }}"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font"
          href="{{ asset('plugins/jsp/_style2/_tandf/pb2/fonts/google/opensans/open-sans-v23-latin-700italic.woff2') }}"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font"
          href="{{ asset('plugins/jsp/_style2/_tandf/pb2/fonts/google/opensans/open-sans-v23-latin-italic.woff2') }}"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font"
          href="{{ asset('plugins/jsp/_style2/_tandf/pb2/fonts/google/opensans/open-sans-v23-latin-regular.woff2') }}"
          type="font/woff2" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/wro/ldlf_product.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('plugins/pb/css/t1658739971977-v1655708936000/head_4_698_700_en.css') }}" id="pb-css"
          data-pb-css-id="t1658739971977-v1655708936000/head_4_698_700_en.css"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('plugins/pb/css/t1655708936000-v1655708936000/head_4_698_760_en.css') }}" id="pb-css"
          data-pb-css-id="t1658739971977-v1655708936000/head_4_698_760_en.css"/>

    <script>var JQSHIM = {$: []};

        function $(f) {
            JQSHIM.$.push(f);
            console.warn("$function added to be executed using the JQUERY shim.\n", f);
        }</script>
    <script type="text/javascript" src="{{ asset('plugins/scripts/core-tandf.js') }}" async></script>

    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 864760, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script>var _prum = [['id', '54ff88bcabe53dc41d1004a5'], ['mark', 'firstbyte', (new Date()).getTime()]];
        (function () {
            var s = document.getElementsByTagName('script')[0], p = document.createElement('script');
            p.async = 'async';
            p.src = "{{ asset('plugins/scripts/prum.min.js') }}";
            s.parentNode.insertBefore(p, s);
        })();</script>
    <script>var tandfData = {
            "search": {},
            "seamlessAccess": {"apiUrl": "https://service.seamlessaccess.org/ps/", "context": "seamlessaccess.org"},
            "identity": {"isSpv": false, "isAuthenticated": false, "isPSA": false},
            "pubCount": {},
            "actionLog": {"eventGroupKey": "affa0dd9-0d9a-48e5-942a-0ac13c4a9cc8"}
        };</script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body class="pb-ui">

<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W2RHRDH');</script>

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W2RHRDH" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>


<div id="pb-page-content" data-ng-non-bindable>
    <div data-pb-dropzone="main" data-pb-dropzone-name="Main">
        <div class="widget pageHeader none home widget-none  widget-compact-all"
             id="a4d4fdd3-c594-4d68-9f06-b69b8b37ed56">
            <div class="wrapped ">
                <div class="widget-body body body-none  body-compact-all">
                    <header class="page-header" aria-label="Main Banner">
                        <div data-pb-dropzone="main">
                            <div class="widget responsive-layout none header-top widget-none  widget-compact-all"
                                 id="036fa949-dc25-4ffe-9df0-d7daefee281b">
                                <div class="wrapped ">
                                    <div class="widget-body body body-none  body-compact-all">
                                        <div class="container">
                                            <div class="row row-xs  ">
                                                <div class="col-xs-1-6 header-index">
                                                    <div class="contents" data-pb-dropzone="contents0">
                                                        <div
                                                            class="widget general-image alignLeft header-logo hidden-xs widget-none  widget-compact-horizontal"
                                                            id="e817489e-2520-418b-a731-b62e247e74df">
                                                            <div class="wrapped 260">
                                                                <div
                                                                    class="widget-body body body-none  body-compact-horizontal">
                                                                    <a href="{{ URL::to('/') }}"
                                                                       title="VISION SCIENCES">
                                                                        <img
                                                                            src="{{ asset('plugins/images/Global/tfo_logo.png') }}"
                                                                            alt="VISION SCIENCES" height="29"
                                                                            width="260"/>
                                                                    </a></div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="widget general-image none header-logo hidden-sm hidden-md hidden-lg widget-none  widget-compact-horizontal"
                                                            id="b3fe8380-8b88-4558-b004-6485d3aea155">
                                                            <div class="wrapped 153">
                                                                <div
                                                                    class="widget-body body body-none  body-compact-horizontal">
                                                                    <a href="index.html">
                                                                        <img
                                                                            src="{{ asset('plugins/images/Global/tfo_logo_sm.png') }}"
                                                                            height="161" width="153"/>
                                                                    </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-5-6 ">
                                                    <div class="contents" data-pb-dropzone="contents1">
                                                        <div
                                                            class="widget layout-inline-content alignRight  widget-none  widget-compact-all"
                                                            id="a8a37801-55c7-4566-bdef-e4e738967e38">
                                                            <div class="wrapped ">
                                                                <div
                                                                    class="widget-body body body-none  body-compact-all">
                                                                    <div class="inline-dropzone"
                                                                         data-pb-dropzone="content">
                                                                        <div
                                                                            class="widget layout-inline-content none customLoginBar widget-none"
                                                                            id="fbe90803-b9c8-4bef-9365-cb53cc4bfa0e">
                                                                            <div class="wrapped ">
                                                                                <div
                                                                                    class="widget-body body body-none ">
                                                                                    <div class="inline-dropzone"
                                                                                         data-pb-dropzone="content">
                                                                                        <div
                                                                                            class="widget literatumInstitutionBanner none bannerWidth widget-none"
                                                                                            id="3ff4d9f6-0fd0-44d0-89cd-6b16c5bb33ba">
                                                                                            <div class="wrapped ">
                                                                                                <div
                                                                                                    class="widget-body body body-none ">
                                                                                                    <div
                                                                                                        class="institution-image hidden-xs logout-institution-image">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="widget literatumNavigationLoginBar none  widget-none  widget-compact-all"
                                                                                            id="1d69ec8f-0b13-42ca-bc6d-f5a385caf8c4">
                                                                                            <div class="wrapped ">
                                                                                                <div
                                                                                                    class="widget-body body body-none  body-compact-all">
                                                                                                    <div
                                                                                                        class="loginBar not-logged-in">
                                                                                                        <i class="nav-icon fas fa-user"></i>
                                                                                                        @guest
                                                                                                            <a href="{{ URL::to('login') }}"
                                                                                                               class="register-link">
                                                                                                                Login
                                                                                                            </a>
                                                                                                            <span class="loginSeprator">&nbsp;|&nbsp;</span>
                                                                                                            <a href="{{ URL::to('register') }}"
                                                                                                               class="register-link">
                                                                                                                Register
                                                                                                            </a>
                                                                                                        @else
                                                                                                            <a href="{{ route('profile.index') }}"
                                                                                                               class="register-link">
                                                                                                                My
                                                                                                                Profile
                                                                                                            </a>
                                                                                                            <span class="loginSeprator">&nbsp;|&nbsp;</span>
                                                                                                            <a class="register-link" href="{{ url('/logout') }}"> Logout </a>                                                                                                        @endguest
                                                                                                        <!--
                                                                                                        <span
                                                                                                            class="loginSeprator">&nbsp;|&nbsp;</span>
                                                                                                            -->
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        @yield('breadcrumbs')

        <!-- Body -->
        <div data-widget-def="pageBody" data-widget-id="35d9ca18-265e-4501-9038-4105e95a4b7d" role="main">
            <div class="widget pageBody none  widget-none  widget-compact-all"
                 id="35d9ca18-265e-4501-9038-4105e95a4b7d">
                <div class="wrapped">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="widget pageFooter none  widget-none  widget-compact-all" id="d97c173f-d838-4de1-bbd7-ed69f0d36a91">
            <div class="wrapped ">
                <div class="widget-body body body-none  body-compact-all">
                    <footer class="page-footer">
                        <div data-pb-dropzone="main">
                            <div
                                class="widget responsive-layout none footer-links widget-none  widget-compact-horizontal"
                                id="64a44adf-45ed-4da3-be26-ef25beb9dbee">
                                <div class="wrapped ">
                                    <div class="widget-body body body-none  body-compact-horizontal">
                                        <div class="container">
                                            <div class="row row-md  ">
                                                <div class="col-md-1-2 ">
                                                    <div class="contents" data-pb-dropzone="contents0">
                                                        <div
                                                            class="widget responsive-layout none footer-responsive-container widget-none"
                                                            id="6918e9df-910a-4206-9bd0-1a02bc17f740">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1-2 ">
                                                    <div class="contents" data-pb-dropzone="contents1">
                                                        <div
                                                            class="widget responsive-layout none footer-responsive-container widget-none"
                                                            id="fc564559-f496-499c-87c7-d851f371f061">
                                                            <div class="wrapped ">
                                                                <div class="widget-body body body-none ">
                                                                    <div class="container-fluid">
                                                                        <div class="row row-sm  ">
                                                                            <div class="col-sm-1-2 footer_left_col">
                                                                                <div class="contents"
                                                                                     data-pb-dropzone="contents0">
                                                                                    <div
                                                                                        class="widget general-html none  widget-none  widget-compact-all"
                                                                                        id="cdd1a577-15dc-4271-8941-33a105ec6510">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="widget responsive-layout none footer-links widget-none  widget-compact-horizontal"
                                id="b2eecf80-9109-455e-a805-028552718986">
                                <div class="wrapped ">
                                    <div class="widget-body body body-none  body-compact-horizontal">
                                        <div class="container">
                                            <div class="row row-md  ">
                                                <div class="col-md-1-2 ">
                                                    <div class="contents" data-pb-dropzone="contents0">
                                                        <div
                                                            class="widget responsive-layout none footer-responsive-container widget-none"
                                                            id="b997c64c-ce48-41ce-b3d6-9cb2d1c99131">
                                                            <div class="wrapped ">
                                                                <div class="widget-body body body-none ">
                                                                    <div class="container-fluid">
                                                                        <div class="row row-sm  ">
                                                                            <div class="col-sm-1-2 footer_left_col">
                                                                                <div class="contents"
                                                                                     data-pb-dropzone="contents0">
                                                                                    <div
                                                                                        class="widget general-html none  widget-none  widget-compact-all"
                                                                                        id="914433f6-0ea6-4a47-9781-07564061be86">
                                                                                        <div class="wrapped ">
                                                                                            <div
                                                                                                class="widget-body body body-none  body-compact-all">
                                                                                                <div
                                                                                                    class="footer-social-label">
                                                                                                    <h2 style="color: white;">
                                                                                                        Keep up to
                                                                                                        date</h2>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="widget literatumSocialLinks none  widget-none  widget-compact-all"
                                                                                        id="3b6a5e53-cd62-452f-adc1-92e187a0849d">
                                                                                        <div class="wrapped ">
                                                                                            <div
                                                                                                class="widget-body body body-none  body-compact-all">
                                                                                                <div class="bs">
                                                                                                    <div
                                                                                                        class="pull-left links">
                                                                                                        <a href="{{ 'mailto:support@' . env('WEBSITE_URL') }}">
                                                                                                            <i class="fas fa-envelope"
                                                                                                               title="Contact Us"
                                                                                                               aria-hidden="true"
                                                                                                               role="button"></i>
                                                                                                            <span
                                                                                                                aria-describedby="fb-description">
                                                                                                                <span
                                                                                                                    class="off-screen"
                                                                                                                    id="fb-description">
                                                                                                                    Contact us
                                                                                                                </span>
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="pull-left links">
                                                                                                        <a href="http://facebook.com/">
                                                                                                            <i class="fab fa-facebook-square"
                                                                                                               title="Vision Sciences Facebook Page"
                                                                                                               aria-hidden="true"
                                                                                                               role="button"></i>
                                                                                                            <span
                                                                                                                aria-describedby="fb-description">
                                                                                                                <span
                                                                                                                    class="off-screen"
                                                                                                                    id="fb-description">
                                                                                                                    VISION SCIENCES Facebook page
                                                                                                                </span>
                                                                                                            </span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="pull-left links">
                                                                                                        <a href="https://twitter.com/">
                                                                                                            <i class="fab fa-twitter-square"
                                                                                                               title="VISION SCIENCES Twitter page"
                                                                                                               aria-hidden="true"
                                                                                                               role="button"></i>
                                                                                                            <span
                                                                                                                aria-describedby="twitter-description">
<span class="off-screen" id="twitter-description">VISION SCIENCES Twitter page</span>
</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="pull-left links">
                                                                                                        <a href="http://linkedin.com/">
                                                                                                            <i class="fab fa-linkedin-square"
                                                                                                               title="VISION SCIENCES LinkedIn page"
                                                                                                               aria-hidden="true"
                                                                                                               role="button"></i>
                                                                                                            <span
                                                                                                                aria-describedby="linkedin-description">
<span class="off-screen" id="linkedin-description">VISION SCIENCES Linkedin page</span>
</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <!--
                                                                                                    <div
                                                                                                        class="clearfix"></div>
                                                                                                        -->
                                                                                                    <div
                                                                                                        class="pull-left links">
                                                                                                        <a href="https://www.youtube.com/">
                                                                                                            <i class="fab fa-youtube"
                                                                                                               title="VISION SCIENCES YouTube page"
                                                                                                               aria-hidden="true"
                                                                                                               role="button"></i>
                                                                                                            <span
                                                                                                                aria-describedby="youtube-description">
<span class="off-screen" id="youtube-description">VISION SCIENCES Youtube page</span>
</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="pull-left links">
                                                                                                        <a href="http://www.weibo.com/">
                                                                                                            <i class="fab fa-weibo"
                                                                                                               title="VISION SCIENCES Weibo page"
                                                                                                               aria-hidden="true"
                                                                                                               role="button"></i>
                                                                                                            <span
                                                                                                                aria-describedby="weibo-description">
<span class="off-screen" id="weibo-description">VISION SCIENCES Weibo page</span>
</span>
                                                                                                        </a>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="clearfix"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-1-2 ">
                                                                                <div class="contents"
                                                                                     data-pb-dropzone="contents1">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1-2 ">
                                                    <div class="contents" data-pb-dropzone="contents1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget responsive-layout none  widget-none  widget-compact-horizontal"
                                 id="8d803f96-081d-4768-ab7d-280a77af723b">
                                <div class="wrapped ">
                                    <div class="widget-body body body-none  body-compact-horizontal">
                                        <div class="container">
                                            <div class="row row-sm  ">
                                                <div class="col-sm-3-4 ">
                                                    <div class="contents" data-pb-dropzone="contents0">
                                                        <div
                                                            class="widget general-html none footer-info-container widget-none  widget-compact-vertical"
                                                            id="b247ecb9-84c9-4762-b270-20f8be1f0ae4">
                                                            <div class="wrapped ">
                                                                <div
                                                                    class="widget-body body body-none  body-compact-vertical">
                                                                    <div class="informa-group-info">
                                                                        <span>Copyright © 2022 Vision Sciences</span>
                                                                        <span><a
                                                                                href="/privacy-policy/">Privacy policy</a></span>
                                                                        <span><a href="/cookies">Cookies</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1-4 footer_tandf_logo">
                                                    <div class="contents" data-pb-dropzone="contents1">
                                                        <div
                                                            class="widget general-image none  widget-none  widget-compact-vertical"
                                                            id="b6bde365-079b-454f-94f6-1841291656a1">
                                                            <div class="wrapped 612">
                                                                <div
                                                                    class="widget-body body body-none  body-compact-vertical">
                                                                    <a href="http://taylorandfrancis.com/"
                                                                       title="VISION SCIENCES">
                                                                        <img
                                                                            src="{{ asset('plugins/images/Global/Group-logo-white-on-transparent.png') }}"
                                                                            alt="VISION SCIENCES" height="112"
                                                                            width="612"/>
                                                                    </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget cookiePolicy none  widget-none  widget-compact-all"
                                 id="cea739ac-da2c-4d77-9cf1-cb3e0da7e31e">
                                <div class="wrapped ">
                                    <div class="widget-body body body-none  body-compact-all">
                                        <div class="banner">
                                            <a href="#" class="btn">Accept</a>
                                            <p class="message">We use cookies to improve your website experience. To
                                                learn about our use of cookies and how you can manage your cookie
                                                settings, please see our <a href="cookies.html">Cookie Policy.</a> By
                                                closing this message, you are consenting to our use of cookies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('script')
</body>
</html>
