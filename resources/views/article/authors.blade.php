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
                                                            Authors
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
                                                                                    "name": "Search results"
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

        ul {
            list-style-type: none;
            margin-left: 1%;
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 1%;
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
                                                    <div class="widget pbOptimizerWidget none  widget-none  widget-compact-all"
                                                         id="58cd1d12-4952-470d-a7c7-f4caa1b8580a">
                                                        <div class="wrapped ">
                                                            <div class="">
                                                                <div data-widget-def="topicalIndex"
                                                                     data-widget-id="e32ed6c0-1c5c-4e46-acaa-bf16e2cb29af" role="navigation"
                                                                     aria-label="Topic Navigation" style="margin-top: 0 !important;">
                                                                    <div
                                                                        class="widget topicalIndex none home-page widget-none widget-compact-all"
                                                                        id="e32ed6c0-1c5c-4e46-acaa-bf16e2cb29af" style="margin-top: 0 !important;">
                                                                        <div class="wrapped ">
                                                                            <div class="widget-body body body-none body-compact-all"><h1
                                                                                    class="widget-header header-none">Explore articles by author</h1>
                                                                                <div class="topicalIndexBrowsingTips"
                                                                                     data-pb-dropzone="topicalIndexBrowsingTips">
                                                                                    <div
                                                                                        class="widget general-html none subject-intro-text widget-none"
                                                                                        id="b61c9cdf-65a9-4af0-bbb2-cfbb89410560">
                                                                                        <div class="wrapped " id='subject-intro-text'>
                                                                                            <div class="widget-body body body-none "><p>
                                                                                                    Search and explore the millions of
                                                                                                    quality, peer-reviewed journal articles
                                                                                                    published under the VISION SCIENCES
                                                                                                    imprints.</p></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="container">
                                                                                    <ul>
                                                                                        @foreach($authors as $key => $author)
                                                                                            <li>
                                                                                                <h3>
                                                                                                    <a href="{{ route('article.showAuthor', ['id' => $author->id]) }}">
                                                                                                        {{ $author->name }}
                                                                                                    </a>
                                                                                                </h3>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
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
