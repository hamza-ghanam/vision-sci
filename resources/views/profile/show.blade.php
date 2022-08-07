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
    {!! htmlScriptTagJsApi() !!}
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

        /* use display:inline-flex to prevent whitespace issues. alternatively, you can put all the children of .rating-group on a single line */
        .rating-group {
            display: inline-flex;
        }

        /* make hover effect work properly in IE */
        .rating__icon {
            pointer-events: none;
        }

        /* hide radio inputs */
        .rating__input {
            position: absolute !important;
            left: -9999px !important;
        }

        /* hide 'none' input from screenreaders */
        .rating__input--none {
            display: none
        }

        /* set icon padding and size */
        .rating__label {
            cursor: pointer;
            padding: 0 0.1em;
            font-size: 2rem;
        }

        /* set default star color */
        .rating__icon--star {
            color: orange;
        }

        /* if any input is checked, make its following siblings grey */
        .rating__input:checked ~ .rating__label .rating__icon--star {
            color: #ddd;
        }

        /* make all stars orange on rating group hover */
        .rating-group:hover .rating__label .rating__icon--star {
            color: orange;
        }

        /* make hovered input's following siblings grey on hover */
        .rating__input:hover ~ .rating__label .rating__icon--star {
            color: #ddd;
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
                                                                    <div class="login-title"  style="margin-bottom: 10px;">
                                                                        <h1>{{ $article->title }}</h1>
                                                                        <img width="100"
                                                                             src="{{ asset('plugins/images/Global/rating'. $article->avgRate . '.png') }}">
                                                                        ({{ count($article->reviews) }} reviews)
                                                                    </div>
                                                                    <div
                                                                        class="regForm fit col-md-5-12 padding inc_5px">
                                                                        <h3>Classification</h3>
                                                                        <p>{{ $article->classification->title }}</p>
                                                                        <h3>Language</h3>
                                                                        <p>{{ $article->language }}</p>
                                                                        <h3>Abstract</h3>
                                                                        <p style="text-align: justify;">{{ $article->abstract }}</p>
                                                                        <h3>Authors</h3>
                                                                        <p>
                                                                        <ol style="margin-left: 6%;">
                                                                            @foreach($article->authors as $key => $author)
                                                                                <li>{{ $author->name }}</li>
                                                                            @endforeach
                                                                        </ol>
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="regForm fit col-md-5-12 padding inc_5px">
                                                                        <h3>Keywords</h3>
                                                                        <p>{{ $article->keywords }}</p>
                                                                        <h3>Article file</h3>
                                                                        <p>
                                                                            <a href="{{ route('profile.download', ['id' => $article->id]) }}">
                                                                                <i class="fas fa-download"></i> Download
                                                                            </a>
                                                                        </p>

                                                                        <br/>
                                                                        @auth
                                                                            @isset($hasReview)
                                                                            @else
                                                                                @if (auth()->user()->hasVerifiedEmail())
                                                                                    <div>
                                                                                        <h3>Review</h3>
                                                                                        @if ($errors->any())
                                                                                            <div
                                                                                                class="alert alert-danger"
                                                                                                style="background-color: lightcoral; border-radius: 4px;">
                                                                                                <ul style="list-style: none;">
                                                                                                    @foreach ($errors->all() as $error)
                                                                                                        <li style="margin-left: 5px;">{{ $error }}</li>
                                                                                                    @endforeach
                                                                                                </ul>
                                                                                            </div>
                                                                                        @endif
                                                                                        @if(session()->has('successMsg'))
                                                                                            <div
                                                                                                class="alert alert-danger"
                                                                                                style="background-color: #6ad373; border-radius: 4px; padding: 5px;">
                                                                                                {{ session()->get('successMsg') }}
                                                                                            </div>
                                                                                        @endif
                                                                                        <form
                                                                                            method="POST"
                                                                                            enctype="multipart/form-data"
                                                                                            action="{{ route('article.review', ['id' => $article->id]) }}"
                                                                                            name="regForm">
                                                                                            @csrf
                                                                                            <table style="width: 100%;">
                                                                                                <tr class="form-group rtl">
                                                                                                    <td>
                                                                                                        <label
                                                                                                            for="countryCode">
                                                                                                            Comment
                                                                                                            <span
                                                                                                                class="required">*</span>
                                                                                                        </label>
                                                                                                        <textarea
                                                                                                            cols="10"
                                                                                                            rows="3"
                                                                                                            class=" @error('comment') is-invalid @enderror loginInput no-autofill"
                                                                                                            name="comment"
                                                                                                            id="comment">{{ old('comment') }}</textarea>

                                                                                                        @error('comment')
                                                                                                        <span
                                                                                                            class="invalid-feedback"
                                                                                                            role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                                        @enderror
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="form-group rtl">
                                                                                                    <td>
                                                                                                        <label
                                                                                                            for="countryCode">
                                                                                                            Rate
                                                                                                            <span
                                                                                                                class="required">*</span>
                                                                                                        </label>
                                                                                                        <div
                                                                                                            id="full-stars-example-two">
                                                                                                            <div
                                                                                                                class="rating-group">
                                                                                                                <input
                                                                                                                    disabled
                                                                                                                    checked
                                                                                                                    class="rating__input rating__input--none"
                                                                                                                    name="rating"
                                                                                                                    id="rating-none"
                                                                                                                    value="0"
                                                                                                                    type="radio">
                                                                                                                <label
                                                                                                                    aria-label="1 star"
                                                                                                                    class="rating__label"
                                                                                                                    for="rating-1"><i
                                                                                                                        class="rating__icon rating__icon--star fas fa-star"></i></label>
                                                                                                                <input
                                                                                                                    class="rating__input"
                                                                                                                    name="rating"
                                                                                                                    id="rating-1"
                                                                                                                    value="1"
                                                                                                                    type="radio">
                                                                                                                <label
                                                                                                                    aria-label="2 stars"
                                                                                                                    class="rating__label"
                                                                                                                    for="rating-2"><i
                                                                                                                        class="rating__icon rating__icon--star fas fa-star"></i></label>
                                                                                                                <input
                                                                                                                    class="rating__input"
                                                                                                                    name="rating"
                                                                                                                    id="rating-2"
                                                                                                                    value="2"
                                                                                                                    type="radio">
                                                                                                                <label
                                                                                                                    aria-label="3 stars"
                                                                                                                    class="rating__label"
                                                                                                                    for="rating-3"><i
                                                                                                                        class="rating__icon rating__icon--star fas fa-star"></i></label>
                                                                                                                <input
                                                                                                                    class="rating__input"
                                                                                                                    name="rating"
                                                                                                                    id="rating-3"
                                                                                                                    value="3"
                                                                                                                    type="radio">
                                                                                                                <label
                                                                                                                    aria-label="4 stars"
                                                                                                                    class="rating__label"
                                                                                                                    for="rating-4"><i
                                                                                                                        class="rating__icon rating__icon--star fas fa-star"></i></label>
                                                                                                                <input
                                                                                                                    class="rating__input"
                                                                                                                    name="rating"
                                                                                                                    id="rating-4"
                                                                                                                    value="4"
                                                                                                                    type="radio">
                                                                                                                <label
                                                                                                                    aria-label="5 stars"
                                                                                                                    class="rating__label"
                                                                                                                    for="rating-5"><i
                                                                                                                        class="rating__icon rating__icon--star fas fa-star"></i></label>
                                                                                                                <input
                                                                                                                    class="rating__input"
                                                                                                                    name="rating"
                                                                                                                    id="rating-5"
                                                                                                                    value="5"
                                                                                                                    type="radio">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                            <div class="form-group">
                                                                                                <input
                                                                                                    class="registrationSubmit"
                                                                                                    type="submit"
                                                                                                    name="submit"
                                                                                                    value="Submit"/>
                                                                                            </div>
                                                                                            <input type="hidden"
                                                                                                   name="redirectUrl"
                                                                                                   value=""/>
                                                                                        </form>
                                                                                    </div>
                                                                                @endif
                                                                            @endisset
                                                                        @endauth
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-body body body-none  body-compact-all">
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
                                                                    @if (count($article->reviews) > 0)
                                                                        <h2>Reviews</h2>
                                                                        @foreach($article->reviews as $review)
                                                                            <div class="regForm fit col-md-7-8">
                                                                            <span
                                                                                style="font-size: 18px; font-weight: bold; margin-right: 2%">{{ $review->user->name }}</span>
                                                                                <small>Reviewed: {{ $review->created_at }}</small>
                                                                                <br/>
                                                                                <span>
                                                                                <img width="100"
                                                                                     src="{{ asset('plugins/images/Global/rating'. $review->rate . '.png') }}">
                                                                            </span>


                                                                                <p style="text-align: justify">
                                                                                    {{ $review->comment }}
                                                                                </p>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
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
