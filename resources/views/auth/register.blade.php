@extends('layouts.app')

@section('breadcrumbs')
    {!! htmlScriptTagJsApi() !!}
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
                                                            Register
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
                                                                        <h1>Registration</h1>
                                                                    </div>
                                                                    <div class="fit padding inc_5px">
                                                                        <form
                                                                            method="POST"
                                                                            action="{{ route('register') }}"
                                                                            name="regForm" class="regForm">
                                                                            @csrf

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
                                                                            <br/>
                                                                            <div class="requiredField">
                                                                                <span>*</span> Fields are compulsory
                                                                            </div>
                                                                            <table>
                                                                                <tr class="form-group  rtl">
                                                                                    <td>
                                                                                        <label for="email">
                                                                                            <span
                                                                                                class="required">*</span>
                                                                                        </label>
                                                                                        <input id="email"
                                                                                               type="email"
                                                                                               class="loginInput form-control @error('email') is-invalid @enderror"
                                                                                               name="email"
                                                                                               value="{{ old('email') }}"
                                                                                               required
                                                                                               placeholder="Your email address"
                                                                                               autocomplete="email">


                                                                                        @error('email')
                                                                                        <span class="invalid-feedback" style="color: red;"
                                                                                              role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="form-group  rtl">
                                                                                    <td>
                                                                                        <label for="email2">
                                                                                            </span><span
                                                                                                class="required">*</span>
                                                                                        </label>
                                                                                        <input id="email2"
                                                                                               class="loginInput form-control no-autofill"
                                                                                               type="email" required
                                                                                               name="email_confirmation"
                                                                                               autocomplete="off"
                                                                                               placeholder="Confirm email address"/>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr class="form-group  rtl">
                                                                                    <td>
                                                                                        <label for="firstName">
                                                                                            </span><span
                                                                                                class="required">*</span>
                                                                                        </label>
                                                                                        <input id="fullName"
                                                                                               class="loginInput no-autofill @error('name') is-invalid @enderror"
                                                                                               aria-describedby="firstName_error firstName_note"
                                                                                               aria-invalid="false"
                                                                                               aria-label="Your full name"
                                                                                               type="text"
                                                                                               name="name"
                                                                                               size="52"
                                                                                               maxlength="50"
                                                                                               value="{{ old('name') }}"
                                                                                               required
                                                                                               autocomplete="name"
                                                                                               placeholder="Your full Name"/>

                                                                                        @error('name')
                                                                                        <span class="invalid-feedback" style="color: red;"
                                                                                              role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>

                                                                                <tr class="form-group  rtl">
                                                                                    <td>
                                                                                        <input id="institution"
                                                                                               class=" @error('institution') is-invalid @enderror loginInput no-autofill"
                                                                                               aria-describedby="organization_error organization_note"
                                                                                               aria-invalid="false"
                                                                                               aria-required="false"
                                                                                               aria-label="Your institution"
                                                                                               type="text"
                                                                                               name="institution"
                                                                                               value="{{ old('institution') }}" size="52"
                                                                                               maxlength="50"
                                                                                               onfocus="" onblur=""
                                                                                               autocomplete="off"
                                                                                               placeholder="Your institution"/>

                                                                                        @error('institution')
                                                                                        <span class="invalid-feedback" style="color: red;"
                                                                                              role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="form-group rtl">
                                                                                    <td colspan="2">
                                                                                        <label for="countryCode">
                                                                                            Country / Region
                                                                                            <span
                                                                                                class="required">*</span>
                                                                                        </label>
                                                                                        <select name="countryCode"
                                                                                                id="countryCode"
                                                                                                required
                                                                                                class="form-control @error('countryCode') is-invalid @enderror">
                                                                                            <option selected="selected"
                                                                                                    value="-1">
                                                                                                Select A Country/Region
                                                                                            </option>
                                                                                            @foreach($countries as $key => $country)
                                                                                                <option
                                                                                                    value="{{ $country->code }}">
                                                                                                    {{ $country->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        @error('countryCode')
                                                                                        <span class="invalid-feedback" style="color: red;"
                                                                                              role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="form-group  rtl">
                                                                                    <td>
                                                                                        <label for="password1">
                                                                                            </span><span
                                                                                                class="required">*</span>
                                                                                        </label>
                                                                                        <input id="password"
                                                                                               class="loginInput no-autofill @error('password') is-invalid @enderror"
                                                                                               aria-describedby="password1_error password1_note"
                                                                                               aria-invalid="false"
                                                                                               aria-required="true"
                                                                                               aria-label="Password"
                                                                                               type="password"
                                                                                               name="password"
                                                                                               required size="52"
                                                                                               maxlength="32"
                                                                                               onfocus="" onblur=""
                                                                                               autocomplete="new-password"
                                                                                               placeholder="Password"/>
                                                                                        <span
                                                                                            class="tooltip-container pass1">
<div class="tooltip">
<p>Your password needs to be a minimum of 8 characters and include at least one of each of the below:</p><ol><li>English uppercase letter (A…Z)</li><li>English lowercase letter (a…z)</li><li>Number (0…9)</li><li>Symbol (e.g. ! # ? $)</li></ol>
</div>
</span>
                                                                                        <div class="progress-container">
                                                                                            <div id="progressbar"></div>
                                                                                            <span
                                                                                                class="progress-label"></span>
                                                                                        </div>

                                                                                        @error('password')
                                                                                        <span class="invalid-feedback" style="color: red;"
                                                                                              role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="form-group  rtl">
                                                                                    <td>
                                                                                        <label for="password2">
                                                                                            </span><span
                                                                                                class="required">*</span>
                                                                                        </label>
                                                                                        <input id="password-confirm"
                                                                                               class="loginInput no-autofill"
                                                                                               aria-describedby="password2_error password2_note"
                                                                                               {{ old('acceptTermsConditions') == 'true' ? 'checked' : '' }}
                                                                                               aria-required="true"
                                                                                               aria-label="Confirm password"
                                                                                               type="password"
                                                                                               name="password_confirmation"
                                                                                               required size="52"
                                                                                               maxlength="32"
                                                                                               onfocus="" onblur=""
                                                                                               autocomplete="off"
                                                                                               placeholder="Confirm password"/>
                                                                                        <span
                                                                                            class="tooltip-container pass2">
                                                                                            <div class="tooltip">
                                                                                                <p>Passwords do no match. Please re-enter all password data.</p>
                                                                                            </div>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="marketablerow form-group rtl">
                                                                                    <input
                                                                                        id="iamAuthor"
                                                                                        class="termsAndConditions"
                                                                                        type="checkbox"
                                                                                        name="iAmAuthor"
                                                                                        value="true"
                                                                                        size="52"
                                                                                        maxlength="100"/>
                                                                                    <label
                                                                                        class="acceptTermsConditions-label"
                                                                                        for="iamAuthor">
                                                                                        Register me as an author (if you
                                                                                        aim to publish your
                                                                                        manuscripts)</a>
                                                                                    </label>
                                                                                </tr>
                                                                                <tr class="form-group privacy-message">
                                                                                    <td>
                                                                                        <div>
                                                                                            <p>Vision Sciences use the
                                                                                                details that you
                                                                                                shared here to
                                                                                                create an account
                                                                                                for you.</p>
                                                                                            <p>Vision Sciences would
                                                                                                also
                                                                                                like to use your
                                                                                                e-mail address to
                                                                                                send you offers and
                                                                                                information about
                                                                                                related products and
                                                                                                services. This can
                                                                                                include tips and
                                                                                                resources on how to
                                                                                                get published, and
                                                                                                offers to access a
                                                                                                wider range of
                                                                                                content that we
                                                                                                think will be of
                                                                                                interest to you.</p>
                                                                                            <p>You may opt out of
                                                                                                receiving these
                                                                                                messages at any time
                                                                                                by clicking
                                                                                                unsubscribe. You can
                                                                                                find more
                                                                                                information in our
                                                                                                <a href="{{ route('privacy-policy') }}"
                                                                                                   target="_blank">Privacy
                                                                                                    Policy</a>.</p>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="form-group  rtl">
                                                                                    <td>
                                                                                        <input
                                                                                            id="acceptTermsConditions"
                                                                                            class="termsAndConditions no-autofill"
                                                                                            aria-describedby="acceptTermsConditions_error acceptTermsConditions_note"
                                                                                            aria-label="Your email address"
                                                                                            type="checkbox"
                                                                                            name="acceptTermsConditions"
                                                                                            value="true"
                                                                                            size="52"
                                                                                            maxlength="100"
                                                                                            readonly="readonly"
                                                                                            onfocus="" onblur=""
                                                                                            autocomplete="off" required
                                                                                            placeholder="Your email address"/>
                                                                                        <label
                                                                                            class="acceptTermsConditions-label"
                                                                                            for="acceptTermsConditions">
                                                                                            I agree to <a
                                                                                                href="{{ route('terms-and-conditions') }}">Terms
                                                                                                &amp; Conditions</a>
                                                                                            <span>*</span>
                                                                                        </label>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <div class="form-group">
                                                                                <input class="registrationSubmit"
                                                                                       type="submit" name="submit"
                                                                                       value="Register"/>
                                                                            </div>
                                                                            <input type="hidden" name="redirectUrl" value=""/>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1-4 fit padding inc_5px">
                                                    <div class="contents" data-pb-dropzone="contents1">
                                                        <div
                                                            class="widget responsive-layout none login-right-column hidden-sm hidden-xs fit padding inc_5px margin_md _4rem register-teasers widget-none  widget-compact-all"
                                                            id="0f04c4cf-5020-44d5-a7a8-1f66bfbef975">
                                                            <div class="wrapped ">
                                                                <div
                                                                    class="widget-body body body-none  body-compact-all">
                                                                    <div class="container-fluid">
                                                                        <div class="row row-md gutterless ">
                                                                            <div class="col-md-1-1 ">
                                                                                <div class="contents"
                                                                                     data-pb-dropzone="contents0">
                                                                                    <div
                                                                                        class="widget literatumLoginWidget none hide widget-none  widget-compact-all"
                                                                                        id="c4931457-38f2-43ab-bdd7-ca4722624620">
                                                                                        <div class="wrapped "
                                                                                             id='loginPopup'>
                                                                                            <div
                                                                                                class="widget-body body body-none  body-compact-all">
                                                                                                <div
                                                                                                    class="loginWidget literatumLoginWidget popup">
                                                                                                    <div
                                                                                                        id="login_left">
                                                                                                        <div
                                                                                                            class="login-title">
                                                                                                            <h1>Log
                                                                                                                in</h1>
                                                                                                        </div>
                                                                                                        <form
                                                                                                            action="{{ route('login') }}"
                                                                                                            id="frmLogin"
                                                                                                            name="frmLogin"
                                                                                                            class="login-form"
                                                                                                            method="POST">
                                                                                                            @csrf
                                                                                                            <div
                                                                                                                class="seamlessAccess_wrapper">
                                                                                                                <div
                                                                                                                    class="seamlessAccessLogin seamless-link">
                                                                                                                    <div
                                                                                                                        class="seamless-access-loading"
                                                                                                                        style="text-align: center; color: #888888;">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <input
                                                                                                                type="hidden"
                                                                                                                name="redirectUri"
                                                                                                                value="/"/><input
                                                                                                                type="hidden"
                                                                                                                name="loginUri"
                                                                                                                value="/action/registration"/><input
                                                                                                                type="hidden"
                                                                                                                name="sendToLogin"
                                                                                                                value="true"/>
                                                                                                            <h2>
                                                                                                                Log
                                                                                                                in
                                                                                                                to
                                                                                                                Vision
                                                                                                                Sciences
                                                                                                            </h2>
                                                                                                            <div
                                                                                                                class="form-group ">
                                                                                                                <label
                                                                                                                    for="login">
                                                                                                                    <span
                                                                                                                        class="email label-icon"></span><span
                                                                                                                        class="required">*</span>
                                                                                                                </label>
                                                                                                                <input
                                                                                                                    id="email"
                                                                                                                    class="loginInput @error('email') is-invalid @enderror"
                                                                                                                    type="email"
                                                                                                                    name="email"
                                                                                                                    value="{{ old('email') }}"
                                                                                                                    autocomplete="email"
                                                                                                                    autofocus
                                                                                                                    size="15"
                                                                                                                    placeholder="Enter your email"
                                                                                                                    required="required"/>

                                                                                                                @error('email')
                                                                                                                <span
                                                                                                                    class="invalid-feedback" style="color: red;"
                                                                                                                    role="alert">
                                                                                                                    <strong>{{ $message }}</strong>
                                                                                                                </span>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-group ">
                                                                                                                <label
                                                                                                                    for="password">
                                                                                                                    <span
                                                                                                                        class="password label-icon"></span><span
                                                                                                                        class="required">*</span>
                                                                                                                </label>
                                                                                                                <input
                                                                                                                    id="password"
                                                                                                                    class="loginInput @error('password') is-invalid @enderror"
                                                                                                                    type="password"
                                                                                                                    name="password"
                                                                                                                    value=""
                                                                                                                    autocomplete="current-password"
                                                                                                                    placeholder="Enter your password"
                                                                                                                    required="required"/>
                                                                                                                @error('password')
                                                                                                                <span
                                                                                                                    class="invalid-feedback" style="color: red;"
                                                                                                                    role="alert">
                                                                                                                    <strong>{{ $message }}</strong>
                                                                                                                </span>
                                                                                                                @enderror
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-group">
                                                                                                                @if (Route::has('password.request'))
                                                                                                                    <span
                                                                                                                        id="passwordReminder">
                                                                                                                        <a href="{{ route('password.request') }}">Forgot password?</a>
                                                                                                                    </span>
                                                                                                                @endif
                                                                                                                <input
                                                                                                                    id="remember"
                                                                                                                    {{ old('remember') ? 'checked' : '' }}
                                                                                                                    type="checkbox"
                                                                                                                    name="remember"
                                                                                                                    value="1"/>
                                                                                                                <label
                                                                                                                    for="remember"><span
                                                                                                                        class="savePasswordLabel">Keep me logged in. This is a trusted computer.</span></label>
                                                                                                                <div
                                                                                                                    class="savePasswordLabel">
                                                                                                                    <i>You
                                                                                                                        will
                                                                                                                        otherwise
                                                                                                                        be
                                                                                                                        logged
                                                                                                                        out
                                                                                                                        automatically,
                                                                                                                        after
                                                                                                                        a
                                                                                                                        limited
                                                                                                                        period,
                                                                                                                        and
                                                                                                                        will
                                                                                                                        need
                                                                                                                        to
                                                                                                                        log
                                                                                                                        in
                                                                                                                        again.</i>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="form-group">
                                                                                                            </div>
                                                                                                            <input
                                                                                                                class="loginForm"
                                                                                                                type="submit"
                                                                                                                name="submit"
                                                                                                                value="Log in"/>
                                                                                                            <a href="{{ route('register') }}"
                                                                                                               class="noAccountBtn">No
                                                                                                                account?
                                                                                                                Register</a>
                                                                                                        </form>
                                                                                                        <script
                                                                                                            type="text/javascript"><!-- //
                                                                                                            function runSearchSetup() {
                                                                                                                _tmp = document.forms['frmLogin'];
                                                                                                                if (_tmp) {
                                                                                                                    _tmp = _tmp['login'];
                                                                                                                }
                                                                                                            };window.onload = runSearchSetup;
                                                                                                            // -->
                                                                                                        </script>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        id="login_right">
                                                                                                        <div
                                                                                                            class="loginDropZone"
                                                                                                            data-pb-dropzone="loginDropZone">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="widget loginButton none  widget-none  widget-compact-all"
                                                                                        id="f7f1e2c4-dd0e-4ea2-8f47-a3f3f89f4e48">
                                                                                        <div class="wrapped ">
                                                                                            <div
                                                                                                class="widget-body body body-none  body-compact-all">
                                                                                                <h2>Already have an
                                                                                                    account?</h2>
                                                                                                <p>
                                                                                                    <a href="#loginPopup"
                                                                                                       class="loginPopup"><i
                                                                                                            class="fas fa-user"></i>
                                                                                                        Log
                                                                                                        in now</a>
                                                                                                </p></div>
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
