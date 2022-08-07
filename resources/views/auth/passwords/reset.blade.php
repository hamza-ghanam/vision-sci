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
                                                        <a href="/"
                                                           class="bc-click">
                                                            My Account
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="#" class="bc-click"
                                                           aria-current="page">
                                                            Reset password
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
                                                <div class="col-md-7-12 fit padding inc_5px">
                                                    <div class="contents" data-pb-dropzone="contents0">
                                                        <div
                                                            class="widget literatumRegistrationWidget none fit padding inc_5px widget-none  widget-compact-all"
                                                            id="3d86fd0e-8227-456b-b90c-b23b7537b4ee">
                                                            <div class="wrapped ">
                                                                <div
                                                                    class="widget-body body body-none  body-compact-all">
                                                                    <div class="login-title">
                                                                        <h1>{{ __('Reset Password') }}</h1>
                                                                    </div>
                                                                    <div class="fit padding inc_5px">
                                                                        @if ($errors->any())
                                                                            <div class="alert alert-danger"
                                                                                 style="background-color: lightcoral; border-radius: 4px;">
                                                                                <ul style="list-style: none;">
                                                                                    @foreach ($errors->all() as $error)
                                                                                        <li style="margin-left: 5px;">{{ $error }}</li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        @endif
                                                                        <form method="POST" name="regForm"
                                                                              class="regForm"
                                                                              action="{{ route('password.update') }}">
                                                                            @csrf

                                                                            <input type="hidden" name="token" value="{{ $token }}">

                                                                            <div class="row mb-3">
                                                                                <div
                                                                                    class="col-md-6 form-group">
                                                                                    <label for="email">
                                                                                        <span class="required">*</span>
                                                                                    </label>
                                                                                    <input
                                                                                        id="email"
                                                                                        type="email"
                                                                                        class="loginInput form-control no-autofill @error('email') is-invalid @enderror"
                                                                                        name="email"
                                                                                        value="{{ old('email') }}"
                                                                                        required
                                                                                        autocomplete="email"
                                                                                        autofocus
                                                                                        placeholder="Email address">

                                                                                    @error('email')
                                                                                    <span
                                                                                        class="invalid-feedback" style="color: red;"
                                                                                        role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3 form-group">
                                                                                <div
                                                                                    class="col-md-6">
                                                                                    <label for="email">
                                                                                        <span class="required">*</span>
                                                                                    </label>
                                                                                    <input
                                                                                        id="password"
                                                                                        type="password"
                                                                                        class="loginInput form-control @error('password') is-invalid @enderror"
                                                                                        name="password"
                                                                                        required
                                                                                        autocomplete="new-password"
                                                                                        placeholder="New password">

                                                                                    @error('password')
                                                                                    <span
                                                                                        class="invalid-feedback" style="color: red;"
                                                                                        role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div class="row mb-3 form-group">
                                                                                <div
                                                                                    class="col-md-6">
                                                                                    <label for="password-confirm">
                                                                                        <span class="required">*</span>
                                                                                    </label>
                                                                                    <input
                                                                                        id="password-confirm"
                                                                                        type="password"
                                                                                        class="loginInput form-control"
                                                                                        name="password_confirmation"
                                                                                        required
                                                                                        autocomplete="new-password"
                                                                                        placeholder="Confirm New Password">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-0">
                                                                                <div
                                                                                    class="col-md-8 offset-md-4">
                                                                                    <button
                                                                                        type="submit"
                                                                                        class="btn btn-primary">
                                                                                        {{ __('Reset Password') }}
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
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
