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
                                                        <a href="{{ route('profile.index') }}"
                                                           class="bc-click">
                                                            My Profile
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="bc-click"
                                                           aria-current="page">
                                                            Home
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
                                                                                    "item": "https://www.tandfonline.com/"
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

        .table-bordered {
            border: 1px solid lightgrey;
        }

        .table-striped .row:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05) !important;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        span[class^='badge-'] {
            font-size: 12px;
            font-weight: bold;
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
                                                                        <h1>My Profile</h1>
                                                                    </div>
                                                                    <div class="fit padding inc_5px">
                                                                        <div class="form-group">
                                                                            <input class="registrationSubmit"
                                                                                   type="button"
                                                                                   onclick="location.href='/profile/add'"
                                                                                   value="Submit a new manuscript"/>
                                                                            <input class="btn btn-info float-right"
                                                                                   type="button"
                                                                                   onclick="location.href='/profile/download/guidelines'"
                                                                                   value="Download the guidelines from here"/>
                                                                        </div>
                                                                        <br/>
                                                                        <br/>
                                                                        <div style="overflow-x: auto;">
                                                                            <table
                                                                                class="tableBox table-responsive table-striped table-bordered"
                                                                                style="width: 100%;">
                                                                                <thead>
                                                                                <tr class="row">
                                                                                    <th>#</th>
                                                                                    <th>Title</th>
                                                                                    <th>Publish Date</th>
                                                                                    <th>link</th>
                                                                                    <th>Type</th>
                                                                                    <th>Classification</th>
                                                                                    <th>Language</th>
                                                                                    <th>Status</th>
                                                                                    <th>Download</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                @foreach($articles as $key => $article)
                                                                                    <tr class="row">
                                                                                        @php
                                                                                            $badge = $article->status === 'New' ? 'new' : ($article->status === 'Under Review' ? 'review' : ($article->status === 'Resubmit' ? 'resubmit' : ($article->status === 'Accepted' ? 'accepted' : 'rejected')));
                                                                                        @endphp
                                                                                        <td>{{ $key+1 }}</td>
                                                                                        <td>
                                                                                            <a href="{{ route('profile.show', ['id' => $article->id]) }}">{{ $article->title }}</a>
                                                                                        </td>
                                                                                        <td>{{ $article->publish_date }}</td>
                                                                                        <td>{{ $article->link }}</td>
                                                                                        <td>{{ $article->type }}</td>
                                                                                        <td>{{ $article->classification->title }}</td>
                                                                                        <td>{{ $article->language }}</td>
                                                                                        <td>
                                                                                        <span
                                                                                            class="badge-{{ $badge }}">
                                                                                            {{ $article->status }}
                                                                                        </span>
                                                                                        </td>
                                                                                        <td style="  padding-left: 3% !important;">
                                                                                            <a href="{{ route('profile.download', ['id' => $article->id]) }}"><i
                                                                                                    class="fas fa-download"></i></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1-6 ">
                                                    <div class="contents" data-pb-dropzone="contents2">
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
