@extends('layouts.app')

@section('content')

    <div class="widget-body body body-none  body-compact-all">
        <div class="page-body pagefulltext">
            <div data-pb-dropzone="main">
                <div class="widget general-html none home-search-label widget-none"
                     id="e80dc744-e92b-4dfb-b681-f3dbd4033730">
                    <div class="wrapped ">
                        <div class="widget-body body body-none " style="text-align: center;"><h1>Search peer-reviewed
                                articles about
                                the eye</h1></div>
                    </div>
                </div>
                <div
                    class="widget quickSearchWidget none search-home container widget-none  widget-compact-vertical"
                    id="1d85a42e-ad57-4c0d-a477-c847718bcb5d">
                    <div class="wrapped ">
                        <div class="widget-body body body-none  body-compact-vertical">
                            <div class="quickSearchFormContainer ">
                                <form action="{{ route('article.search') }}"
                                      name="quickSearch" class="quickSearchForm " title="Quick Search"
                                      role="search" method="get"
                                      aria-label="Quick Search"><span class="simpleSearchBoxContainer">
<input name="term" class="searchText main-search-field autocomplete" value="" type="search"
       id="searchText-1d85a42e-ad57-4c0d-a477-c847718bcb5d" title="Type search term here" aria-label="Search"
       placeholder="Enter keywords, authors, subjects, titles, etc" autocomplete="off" data-history-items-conf="3"
       data-publication-titles-conf="3" data-publication-items-conf="3" data-topics-conf="3" data-contributors-conf="3"
       data-fuzzy-suggester="false" data-auto-complete-target="title-auto-complete"/>
</span>
                                    <span class="quick-search-btn">
<button class="mainSearchButton searchButtons pointer" title="Search" role="button" type="submit" aria-label="Search">
    <i class="fas fa-search fa-2x"></i>
</button>
</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget pbOptimizerWidget none  widget-none"
                     id="6cf98a80-4774-4910-874b-c80c56ccbfb7">
                    <div class="wrapped ">
                        <div class="widget-body body body-none ">
                            <div class="widget dynamicCounter none home-stats widget-none"
                                 id="70f65d6c-79b7-42c2-80f1-cf32474ff28f">
                                <div class="wrapped ">
                                    <div class="widget-body body body-none " style="text-align: center;">
                                        <div class="value">4,789,000+ articles</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget general-html none home-background widget-none  widget-compact-all"
                     id="ea109c56-a805-4020-b285-f4175001aaa7">
                    <div class="wrapped ">
                        <div class="widget-body body body-none  body-compact-all">
                            <div class="home-image"></div>
                        </div>
                    </div>
                </div>
                <div class="widget pbOptimizerWidget none  widget-none  widget-compact-all"
                     id="58cd1d12-4952-470d-a7c7-f4caa1b8580a">
                    <div class="wrapped ">
                        <div class="widget-body body body-none  body-compact-all">
                            <div data-widget-def="topicalIndex"
                                 data-widget-id="e32ed6c0-1c5c-4e46-acaa-bf16e2cb29af" role="navigation"
                                 aria-label="Topic Navigation">
                                <div
                                    class="widget topicalIndex none home-page widget-none widget-compact-all"
                                    id="e32ed6c0-1c5c-4e46-acaa-bf16e2cb29af">
                                    <div class="wrapped ">
                                        <div class="widget-body body body-none body-compact-all"><h2
                                                class="widget-header header-none">Explore articles by subject</h2>
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
                                                    @foreach($classifications as $key => $classification)
                                                        <li>
                                                            <h3>
                                                                <a href="{{ route('article.search', ['term' => $classification->title]) }}">
                                                                    {{ $classification->title }}
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
                <div data-widget-def="gql-publication-list"
                     data-widget-id="20760e0c-0cee-48cd-8f19-16b2de17db9b" role="region"
                     aria-label="Trending Research">
                    <div class="widget gql-publication-list none  widget-none  widget-compact-all"
                         id="20760e0c-0cee-48cd-8f19-16b2de17db9b">
                        <div class="wrapped ">
                            <h2 class="widget-header header-none  header-compact-all">Trending research</h2>
                            <div class="widget-body body body-none  body-compact-all">
                                <script type="text/javascript"
                                        src="../d1bxh8uas1mnw7.cloudfront.net/assets/embed.js"
                                        async></script>
                                <div class="publicationListContainer publications-list tocContent container">
                                    @foreach($articles as $key => $article)
                                        <div class="article-card col-md-1-4">
                                            <div class="header"><span
                                                    class="article-type">{{ $article->type }}</span>
                                                <div class="art_title linkable">
                                                    <a target="_blank" class="ref nowrap" href="{{ route('profile.show', ['id' => $article->id]) }}">
                                                        <span class="hlFld-Title">{{ $article->title }} <i class="fas fa-angle-right"></i></span>
                                                    </a>
                                                    Language: {{ $article->language }}
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <div class="tocAuthors afterTitle">
                                                    <div class="articleEntryAuthor firstAuthorLastName">
                                                        <span class="articleEntryAuthorsLinks">
                                                            <p class="entryAuthor">
                                                                <span class="hlFld-ContribAuthor">
                                                                     {{ $article->authors[0]->name }}
                                                                </span> @if (count($article->authors) > 0) et al. @endif
                                                            </p>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card-section">
                                                    <div class="tocEPubDate float-right"><span
                                                            class="maintextleft float-right">{{ date('F j, Y', strtotime($article->publish_date)) }}</span>
                                                    </div>
                                                </div>
                                                <div class="card-section metrics-class">
                                                    <div class="altmetric-embed" data-badge-type="donut"
                                                         data-condensed="true" data-template="tandf"
                                                         data-hide-no-mentions="false"
                                                         data-doi="10.1080/15563650.2022.2042013"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
