@extends('layouts.app')

@section('breadcrumbs')
    <div class="widget responsive-layout none breadcrumbs-container widget-none  widget-compact-all"
         id="64c16283-4b04-4d90-ac0f-4db85fcd0cf5">
        <div class="wrapped ">
            <div class="widget-body body body-none  body-compact-all">
                <div class="container">
                    <div class="row row-md  ">
                        <div class="col-md-1-1 ">
                            <div class="contents" data-pb-dropzone="contents0">
                                <div
                                    class="widget literatumBreadcrumbs none breadcrumbs-widget widget-none  widget-compact-all"
                                    id="b1c121c1-cbbd-4241-8774-7120f3a783e8">
                                    <div class="wrapped ">
                                        <div class="widget-body body body-none  body-compact-all">
                                            <nav id="bc-nav" aria-label="Breadcrumb" data-stick>
                                                <ol class="breadcrumbs">
                                                    <li class="">
                                                        <a href="/"
                                                           class="bc-click">
                                                            Home
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="bc-click"
                                                           aria-current="page">
                                                            Article details
                                                        </a>
                                                    </li>
                                                </ol>
                                            </nav>
                                            <script type="application/ld+json">
                                                                        {
                                                                            "@context": "https://schema.org",
                                                                            "@type": "BreadcrumbList",
                                                                            "itemListElement": [
                                                                                {
                                                                                    "@type": "ListItem",
                                                                                    "position": "1",
                                                                                    "name": "Home",
                                                                                    "item": "{{ env('APP_URL') }}"
                                                                                },
                                                                                {
                                                                                    "@type": "ListItem",
                                                                                    "position": "2",
                                                                                    "name": "Register"
                                                                                }
                                                                            ]
                                                                        }










                                            </script>
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
@endsection

@section('content')
    <style>
        table {
            width: 100% !important;
        }

        .btn-info {
            background-color: green !important;
            border-color: darkgreen !important;
        }

        .btn-info:hover {
            border-color: green !important;
            outline: solid 1px darkgreen !important;
        }

        .badge-new {
            background-color: #0b52a0;
            color: white;
            padding: 4px 8px;
            text-align: center;
            border-radius: 5px;
        }

        .badge-review {
            background-color: darkgoldenrod;
            color: white;
            padding: 4px 8px;
            text-align: center;
            border-radius: 5px;
        }

        .badge-resubmit {
            background-color: #5e5e5e;
            color: white;
            padding: 4px 8px;
            text-align: center;
            border-radius: 5px;
        }


        .badge-accepted {
            background-color: green;
            color: white;
            padding: 4px 8px;
            text-align: center;
            border-radius: 5px;
        }

        .badge-rejected {
            background-color: red;
            color: white;
            padding: 4px 8px;
            text-align: center;
            border-radius: 5px;
        }

    </style>
    <div data-widget-def="pageBody" data-widget-id="35d9ca18-265e-4501-9038-4105e95a4b7d" role="main">

        <div class="widget pageBody none  widget-none  widget-compact-all"
             id="35d9ca18-265e-4501-9038-4105e95a4b7d">
            <div class="wrapped ">
                <div class="widget-body body body-none  body-compact-all">
                    <div class="page-body pagefulltext">
                        <div data-pb-dropzone="main">
                            @include('search')
                            <div
                                class="widget responsive-layout none login-responsive-layout fit container margin widget-none  widget-compact-all"
                                id="ce4afbc6-7a1c-4d77-92c9-4589da025f43">
                                <div class="wrapped ">
                                    <div class="widget-body body body-none  body-compact-all">
                                        <div class="container-fluid">
                                            <div class="row row-md gutterless ">
                                                <div class="col-md fit padding inc_5px">
                                                    <div class="contents" data-pb-dropzone="contents0">
                                                        <div
                                                            class="widget literatumRegistrationWidget none fit padding inc_5px widget-none  widget-compact-all"
                                                            id="3d86fd0e-8227-456b-b90c-b23b7537b4ee">
                                                            <div class="wrapped ">
                                                                <div
                                                                    class="widget-body body body-none  body-compact-all">
                                                                    <div class="login-title">
                                                                        <h1>Cookies</h1>
                                                                    </div>
                                                                    <div class="wrapped ">
                                                                        <div class="widget-body body body-none "><p><b>We
                                                                                    have developed this cookie policy
                                                                                    (the &ldquo;Cookie
                                                                                    Policy&rdquo;) in order to explain
                                                                                    how we use
                                                                                    cookies and similar technologies
                                                                                    (together,
                                                                                    &ldquo;Cookies&rdquo;) on this
                                                                                    website (the
                                                                                    &ldquo;Website&rdquo;) and to
                                                                                    demonstrate our
                                                                                    firm commitment to the privacy of
                                                                                    your personal
                                                                                    information.</b></p>
                                                                            <p>The first time that you visit our
                                                                                Website, we
                                                                                notify you about our use of Cookies
                                                                                through
                                                                                a notification banner.&nbsp; By
                                                                                continuing
                                                                                to use the Website, you consent to our
                                                                                use
                                                                                of Cookies as described in this Cookie
                                                                                Policy.&nbsp; However, you can choose
                                                                                whether or not to continue accepting
                                                                                Cookies
                                                                                at any later time.&nbsp; Information on
                                                                                how
                                                                                to manage Cookies is set out later in
                                                                                this
                                                                                Cookie Policy.</p>
                                                                            <p>Please note that our use of any personal
                                                                                information we collect about you is
                                                                                subject
                                                                                to our&nbsp;<a
                                                                                    href="/privacy-policy/">Privacy
                                                                                    Policy</a>.</p>
                                                                            <h2><strong>What are Cookies?</strong></h2>
                                                                            <p>Cookies are small text files containing
                                                                                user
                                                                                IDs that are automatically placed on
                                                                                your
                                                                                computer or other device by when you
                                                                                visit a
                                                                                website.&nbsp; The Cookies are stored by
                                                                                the
                                                                                internet browser.&nbsp; The browser
                                                                                sends
                                                                                the Cookies back to the website on each
                                                                                subsequent visit, allowing the website
                                                                                to
                                                                                recognise your computer or device.&nbsp;
                                                                                This recognition enables the website
                                                                                provider to observe your activity on the
                                                                                website, deliver a personalised,
                                                                                responsive
                                                                                service and improve the website.</p>
                                                                            <p>Cookies can be &lsquo;Session Cookies&rsquo;
                                                                                or &lsquo;Persistent Cookies&rsquo;.&nbsp;
                                                                                Session Cookies allow a website to link
                                                                                a
                                                                                series of your actions during one
                                                                                browser
                                                                                session, for example, to remember the
                                                                                items
                                                                                you have added to a shopping basket.&nbsp;
                                                                                Session Cookies expire after a browser
                                                                                session and are therefore not stored on
                                                                                your
                                                                                computer or device afterwards.&nbsp;
                                                                                Persistent Cookies are stored on your
                                                                                computer or device between browser
                                                                                sessions
                                                                                and can be used when you make subsequent
                                                                                visits to the website, for example to
                                                                                remember your website preferences, such
                                                                                as
                                                                                language or font size.</p>
                                                                            <h2><strong>First and third-party
                                                                                    Cookies</strong></h2>
                                                                            <p>The Cookies placed on your computer or
                                                                                device
                                                                                include ‘First Party’ Cookies, meaning
                                                                                Cookies that are placed there by us, or
                                                                                by
                                                                                third party service providers acting on
                                                                                our
                                                                                behalf. Where such Cookies are being
                                                                                managed
                                                                                by third parties, we only allow the
                                                                                third
                                                                                parties to use the Cookies for our
                                                                                purposes,
                                                                                as described in this Cookie Policy, and
                                                                                not
                                                                                for their own purposes.</p>
                                                                            <p>The Cookies placed on your computer or
                                                                                device
                                                                                may also include ‘Third Party’ Cookies,
                                                                                meaning Cookies that are placed there by
                                                                                third parties. These Cookies may include
                                                                                third party advertisers who display
                                                                                adverts
                                                                                on our Website and/or social network
                                                                                providers who provide ‘like’ or ‘share’
                                                                                capabilities (see the above section on
                                                                                Targeting or Advertising Cookies). They
                                                                                may
                                                                                also include third parties who provide
                                                                                video
                                                                                content which is embedded on our Website
                                                                                (such as YouTube). Please see the
                                                                                website
                                                                                terms and policies of these third
                                                                                parties
                                                                                for further information on their use of
                                                                                Cookies.</p>
                                                                            <p>To learn about the specific First Party
                                                                                and
                                                                                Third Party Cookies used by our Website,
                                                                                please see the breakdown below.</p>
                                                                            <h2><strong>Cookies we use and their
                                                                                    purpose</strong></h2>
                                                                            <p>We use various types of Cookies -
                                                                                ‘Strictly
                                                                                necessary’ Cookies, ‘Performance’
                                                                                Cookies,
                                                                                ‘Functionality’ Cookies and ‘Targeting’
                                                                                cookies. Each type of cookie and the
                                                                                purposes for which we use them are
                                                                                described
                                                                                in this section.</p>
                                                                            <h3><strong>Cookie list</strong></h3>
                                                                            <p>A cookie is a small piece of data (text
                                                                                file)
                                                                                that a website – when visited by a user
                                                                                –
                                                                                asks your browser to store on your
                                                                                device in
                                                                                order to remember information about you,
                                                                                such as your language preference or
                                                                                login
                                                                                information. Those cookies are set by us
                                                                                and
                                                                                called first-party cookies. We also use
                                                                                third-party cookies – which are cookies
                                                                                from
                                                                                a domain different than the domain of
                                                                                the
                                                                                website you are visiting – for our
                                                                                advertising and marketing efforts. More
                                                                                specifically, we use cookies and other
                                                                                tracking technologies for the following
                                                                                purposes:</p>
                                                                            <p><strong>Strictly necessary
                                                                                    cookies</strong>
                                                                            </p>
                                                                            <p>These cookies are necessary for the
                                                                                website
                                                                                to function and cannot be switched off
                                                                                in
                                                                                our systems. They are usually only set
                                                                                in
                                                                                response to actions made by you which
                                                                                amount
                                                                                to a request for services, such as
                                                                                setting
                                                                                your privacy preferences, logging in or
                                                                                filling in forms. You can set your
                                                                                browser
                                                                                to block or alert you about these
                                                                                cookies,
                                                                                but some parts of the site will not then
                                                                                work. These cookies do not store any
                                                                                personally identifiable information.</p>
                                                                            <div style="overflow-x: auto;">
                                                                                <table>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <th>Cookie subgroup</th>
                                                                                        <th>Cookies</th>
                                                                                        <th>Cookies used</th>
                                                                                        <th>Lifespan</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>{{ env('WEBSITE_URL') }}</td>
                                                                                        <td>JSESSIONID
                                                                                            <br>MAID
                                                                                            <br>PLUID
                                                                                        </td>
                                                                                        <td>First party</td>
                                                                                        <td>Session
                                                                                            <br>300 days
                                                                                            <br>1 year
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cloudflare</td>
                                                                                        <td>__cf_bm</td>
                                                                                        <td>Third party</td>
                                                                                        <td>30 mins</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>scienceconnect.io</td>
                                                                                        <td>iam</td>
                                                                                        <td>Third party</td>
                                                                                        <td>Session</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <p><strong>Performance Cookies</strong></p>
                                                                            <p>These cookies allow us to count visits
                                                                                and
                                                                                traffic sources so we can measure and
                                                                                improve the performance of our site.
                                                                                They
                                                                                help us to know which pages are the most
                                                                                and
                                                                                least popular and see how visitors move
                                                                                around the site. All information these
                                                                                cookies collect is aggregated and
                                                                                therefore
                                                                                anonymous. If you do not allow these
                                                                                cookies
                                                                                we will not know when you have visited
                                                                                our
                                                                                site, and we will not be able to monitor
                                                                                its
                                                                                performance.</p>
                                                                            <div style="overflow-x: auto;">
                                                                                <table>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <th>Cookie subgroup</th>
                                                                                        <th>Cookies</th>
                                                                                        <th>Cookies used</th>
                                                                                        <th>Lifespan</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>{{ env('WEBSITE_URL') }}</td>
                                                                                        <td>SERVER</td>
                                                                                        <td>First party</td>
                                                                                        <td>Session</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Google</td>
                                                                                        <td>_ga
                                                                                            <br>_gcl_au
                                                                                            <br>_gid
                                                                                            <br>gat_UA
                                                                                            <br>NID
                                                                                            <br>1P_JAR
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>2 years
                                                                                            <br>455 days
                                                                                            <br>24 hours
                                                                                            <br>1 minute
                                                                                            <br>180 days
                                                                                            <br>30 days
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>pardot.com</td>
                                                                                        <td>visitor_id&lt;accountid&gt;
                                                                                            <br>lpv
                                                                                            <br>visitor_id&lt;accountid&gt;-hash
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>3650 days
                                                                                            <br>30 minutes
                                                                                            <br>3650 days
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Addthis.com</td>
                                                                                        <td>__atuvs
                                                                                            <br>__atuvc
                                                                                            <br>loc
                                                                                            <br>uvc
                                                                                            <br>ouid
                                                                                            <br>uid
                                                                                            <br>na_id
                                                                                            <br>loc
                                                                                            <br>vc
                                                                                            <br>um
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>30 minutes
                                                                                            <br>390 days
                                                                                            <br>13 months
                                                                                            <br>13 months
                                                                                            <br>13 months
                                                                                            <br>1 Year
                                                                                            <br>1 Year
                                                                                            <br>1 Year
                                                                                            <br>1 Year
                                                                                            <br>13 months
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>alexametrics.com</td>
                                                                                        <td>__auc
                                                                                            <br>__asc
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>1 Year
                                                                                            <br>30 minutes
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>orcid.org</td>
                                                                                        <td>_gat
                                                                                            <br>_ga
                                                                                            <br>X-Mapping-fjhppofk
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>1 minute
                                                                                            <br>1 minute
                                                                                            <br>Session
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Twitter</td>
                                                                                        <td>_ga
                                                                                            <br>_gid
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>2 years
                                                                                            <br>1 day
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Hotjar</td>
                                                                                        <td>_hjid
                                                                                            <br>_hjFirstSeen
                                                                                            <br>_hjIncludedInSessionSample
                                                                                            <br>_hjAbsoluteSessionInProgress
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>1 year
                                                                                            <br>30 mins
                                                                                            <br>30 mins
                                                                                            <br>30 mins
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>codeocean.com</td>
                                                                                        <td>_gid
                                                                                            <br>_ga
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>1 day
                                                                                            <br>2 years
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>annotations.scitrus.com</td>
                                                                                        <td>_ga
                                                                                            <br>_gid
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>2 years
                                                                                            <br>1 day
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <p><strong>Functional Cookies</strong></p>
                                                                            <p>These cookies enable the website to
                                                                                provide
                                                                                enhanced functionality and
                                                                                personalisation.
                                                                                They may be set by us or by third party
                                                                                providers whose services we have added
                                                                                to
                                                                                our pages. If you do not allow these
                                                                                cookies
                                                                                then some or all of these services may
                                                                                not
                                                                                function properly.</p>
                                                                            <div style="overflow-x: auto;">
                                                                                <table>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <th>Cookie subgroup</th>
                                                                                        <th>Cookies</th>
                                                                                        <th>Cookies used</th>
                                                                                        <th>Lifespan</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>{{ env('WEBSITE_URL') }}</td>
                                                                                        <td>MACHINE_LAST_SEEN
                                                                                            <br>I2KBRCK
                                                                                            <br>Timezone
                                                                                            <br>displayMathJaxFormula
                                                                                            <br>CookiePolicy
                                                                                            <br>AUTO_SIGNIN
                                                                                            <br>SeamlessAccess_OptOut
                                                                                        </td>
                                                                                        <td>First party</td>
                                                                                        <td>300 Days
                                                                                            <br>1 year
                                                                                            <br>Session
                                                                                            <br>1 year
                                                                                            <br>1 year
                                                                                            <br>60 days
                                                                                            <br>1 year
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>addthis.com</td>
                                                                                        <td>sshs
                                                                                            <br>di2
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>13 months
                                                                                            <br>1 year
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Twitter</td>
                                                                                        <td>personalization_id
                                                                                            <br>guest_id
                                                                                            <br>ct0
                                                                                            <br>external_referer
                                                                                            <br>_twitter_sess
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>2 years
                                                                                            <br>2 years
                                                                                            <br>twitter dependent
                                                                                            <br>7 days
                                                                                            <br>Session
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>ReadSpeaker</td>
                                                                                        <td>ReadSpeakerSettings
                                                                                            <br>_rspkrLoadCore
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>5 Days
                                                                                            <br>Session
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>scholar.google.com</td>
                                                                                        <td>GSP</td>
                                                                                        <td>Third party</td>
                                                                                        <td>2 years</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Figshare.com</td>
                                                                                        <td>fig_tracker_client</td>
                                                                                        <td>Third party</td>
                                                                                        <td>1 year</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>sketchfab.com</td>
                                                                                        <td>sb_csrftoken</td>
                                                                                        <td>Third party</td>
                                                                                        <td>1 year</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <p><strong>Targeting Cookies</strong></p>
                                                                            <p>These cookies may be set through our site
                                                                                by
                                                                                our advertising partners. They may be
                                                                                used
                                                                                by those companies to build a profile of
                                                                                your interests and show you relevant
                                                                                adverts
                                                                                on other sites. They do not store
                                                                                directly
                                                                                personal information, but are based on
                                                                                uniquely identifying your browser and
                                                                                internet device. If you do not allow
                                                                                these
                                                                                cookies, you will experience less
                                                                                targeted
                                                                                advertising.</p>
                                                                            <div style="overflow-x: auto;">
                                                                                <table>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <th>Cookie subgroup</th>
                                                                                        <th>Cookies</th>
                                                                                        <th>Cookies used</th>
                                                                                        <th>Lifespan</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Google</td>
                                                                                        <td>__gads</td>
                                                                                        <td>Third party.</td>
                                                                                        <td>390 days</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Linkedin</td>
                                                                                        <td>Li_sugr
                                                                                            <br>bcookie
                                                                                            <br>lidc
                                                                                            <br>UserMatchHistory
                                                                                            <br>AnalyticsSyncHistory
                                                                                            <br>lang
                                                                                            <br>aam_uuid
                                                                                            <br>AMCV_&lt;variable name&gt;@AdobeOrg
                                                                                            <br>li_rm
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>3 months
                                                                                            <br>2 years
                                                                                            <br>1 day
                                                                                            <br>30 days
                                                                                            <br>30 days
                                                                                            <br>Session
                                                                                            <br>1 month
                                                                                            <br>6 months
                                                                                            <br>1 year
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>doubleclick</td>
                                                                                        <td>IDE</td>
                                                                                        <td>Third party</td>
                                                                                        <td>2 years</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Facebook.com</td>
                                                                                        <td>sb
                                                                                            <br>wd
                                                                                            <br>datr
                                                                                            <br>fr
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>2 years
                                                                                            <br>7 days
                                                                                            <br>2 years
                                                                                            <br>*facebook dependent
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Demdex</td>
                                                                                        <td>dpm
                                                                                            <br>dextp
                                                                                            <br>demdex
                                                                                        </td>
                                                                                        <td>Third party</td>
                                                                                        <td>6 months
                                                                                            <br>Session
                                                                                            <br>Session
                                                                                        </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <p>COOKIES SETTINGS</p>
                                                                            <h3><strong>Managing Cookies</strong></h3>
                                                                            <p>You always have a choice over whether or
                                                                                not
                                                                                to accept Cookies. When you first visit
                                                                                the
                                                                                Website and we notify you about our use
                                                                                of
                                                                                Cookies, you can choose not to consent
                                                                                to
                                                                                such use. If you continue to use the
                                                                                Website, you are consenting to our use
                                                                                of
                                                                                Cookies for the time being. However, you
                                                                                can
                                                                                choose not to continue accepting Cookies
                                                                                at
                                                                                any later time. In this section, we
                                                                                describe
                                                                                ways to manage Cookies, including how to
                                                                                disable them.</p>
                                                                            <p>You can manage Cookies through the
                                                                                settings
                                                                                of your internet browser.&nbsp; You can
                                                                                choose to block or restrict Cookies from
                                                                                being placed on your computer or device.&nbsp;
                                                                                You can also periodically review the
                                                                                Cookies
                                                                                that have been placed there and disable
                                                                                some
                                                                                or all of them.</p>
                                                                            <p>You can learn more about how to manage
                                                                                Cookies on the following websites: <a
                                                                                    href="https://www.allaboutcookies.org/">www.allaboutcookies.org</a>
                                                                                and
                                                                                <a href="https://www.youronlinechoices.com/">www.youronlinechoices.com</a>.
                                                                            </p>
                                                                            <p>Please be aware that if you choose not to
                                                                                accept certain Cookies, it may mean we
                                                                                are
                                                                                unable to provide you with some services
                                                                                or
                                                                                features of the Website.</p>
                                                                            <h3><strong>Changes to Cookie
                                                                                    Policy</strong>
                                                                            </h3>
                                                                            <p>In order to keep up with changing
                                                                                legislation
                                                                                and best practice, we may revise this
                                                                                Cookie
                                                                                Policy at any time without notice by
                                                                                posting
                                                                                a revised version on this Website. So
                                                                                please
                                                                                check back periodically so that you are
                                                                                aware of any changes.</p>
                                                                            <h3><strong>Questions or Concerns</strong>
                                                                            </h3>
                                                                            <p>If you have any questions or concerns
                                                                                about
                                                                                this Cookie Policy or our use of Cookies
                                                                                on
                                                                                the Website, please contact us by email
                                                                                to
                                                                                <a href="{{ 'mailto:privacy@' . env('WEBSITE_URL') }}">{{ 'privacy@' . env('WEBSITE_URL') }}</a>
                                                                            </p>
                                                                            <p>You can also contact the Privacy Officer
                                                                                for
                                                                                the Informa plc group at <a
                                                                                    href="{{ 'mailto:GroupDPO@' . env('WEBSITE_URL') }}">{{ 'mailto:GroupDPO@' . env('WEBSITE_URL') }}</a>
                                                                            </p>
                                                                            <p><i>This Cookie Policy was last updated
                                                                                    February 2022.</i></p></div>
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
@endsection


@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        JQSHIM.$.forEach(function (f) {
            $(f);
        })
    </script>
    <script type="text/javascript">
        $(document).ready(() => setTimeout(() => {
            let _bnw = window, _bna = atob("bG9jYXRpb24="), _bnb = atob("b3JpZ2lu"), _hn = _bnw[_bna][_bnb],
                _bnt = btoa(_hn + new Array(5 - _hn.length % 4).join(" "));
            $.get("/resource/lodash?t=" + _bnt);
        }, 4000));
    </script>
    <script type="text/javascript" src="{{ asset('plugins/wro/ldlf_product.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/wro/jhp-main.js') }}"></script>
    <script src="https://unpkg.com/@theidentityselector/thiss-ds" type="application/javascript"></script>
    <script>
        loadCSS("{{ asset('plugins/wro/ldlf_lastInBody-css.css') }}");
        loadCSS("https://fonts.googleapis.com/css?family=Droid%20Serif:bold,bolditalic,italic,regular&amp;display=swap");
        $(function () {
            TandfUtils.scriptLoader([
                {js: '/wro/ldlf~jwplayer.js', selector: '.mediaThumbnailContainer, .preview-video-abstract'},
                {js: '/wro/ldlf~mathjax.js', enabled: typeof MathJax !== 'undefined'},
                {js: '/wro/ldlf~altmetric.js', enabled: typeof tandfData.altmetric !== 'undefined'},
                {js: '/wro/ldlf~crossmark.js', selector: '.cross_mark--link'},
                {js: '/wro/ldlf~ajax-widgets.js', css: '/wro/ldlf~ajax-widgets.css', selector: '.ajaxWidget'},
                {
                    js: '/wro/ldlf~loi-api.js',
                    selector: '.toc-fns,.literatumListOfIssuesResponsiveWidget,.literatumListOfIssuesWidget'
                },
                {js: '/wro/ldlf~abstract-preview.js', selector: '.search-article-tools .previewLinks'}
                ,
                {js: "/wro/ldlf~seamless-access-fn.js", selector: ".seamlessAccess_wrapper,.institutional-login"},
                {js: '/wro/ldlf~raa-shibboleth.js', selector: ".institutional-login"}

            ])
        });
    </script>
    <noscript>
        <link rel="stylesheet" href="{{ asset('plugins/wro/ldlf_lastInBody-css.css') }}">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Droid%20Serif:bold,bolditalic,italic,regular&amp;display=swap">
    </noscript>
    <script defer
            src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
            integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
            data-cf-beacon='{"rayId":"7324917fcf343463","token":"b6951d00f50a499ab38e94f58955e14d","version":"2022.6.0","si":100}'
            crossorigin="anonymous"></script>
@endsection
