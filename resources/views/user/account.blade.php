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
                                                            Update Account
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
                                                                        <h1>Edit My Account</h1>
                                                                    </div>


                                                                    <div class="fit padding inc_5px">
                                                                        @if(session()->has('successMsg'))
                                                                            <div
                                                                                class="alert"
                                                                                style="background-color: #6ad373; border-radius: 4px; padding: 5px;">
                                                                                {{ session()->get('successMsg') }}
                                                                            </div>
                                                                        @endif

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
                                                                        <form
                                                                            method="POST"
                                                                            action="{{ route('account.update') }}"
                                                                            name="regForm" class="regForm">
                                                                            @csrf
                                                                            @method('PUT')

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
                                                                                               value="{{ $user->email }}"
                                                                                               required
                                                                                               placeholder="Your email address"
                                                                                               autocomplete="email">


                                                                                        @error('email')
                                                                                        <span class="invalid-feedback"
                                                                                              style="color: red;"
                                                                                              role="alert">
                                                                                                    <strong>{{ $message }}</strong>
                                                                                                </span>
                                                                                        @enderror
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
                                                                                               value="{{ $user->name }}"
                                                                                               required
                                                                                               autocomplete="name"
                                                                                               placeholder="Your full Name"/>

                                                                                        @error('name')
                                                                                        <span class="invalid-feedback"
                                                                                              style="color: red;"
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
                                                                                               value="{{ $user->institution }}"
                                                                                               size="52"
                                                                                               maxlength="50"
                                                                                               onfocus="" onblur=""
                                                                                               autocomplete="off"
                                                                                               placeholder="Your institution"/>

                                                                                        @error('institution')
                                                                                        <span class="invalid-feedback"
                                                                                              style="color: red;"
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
                                                                                                    value="{{ $country->code }}"
                                                                                                    {{ $user->country_id === $country->id ? 'selected' : '' }}>
                                                                                                    {{ $country->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        @error('countryCode')
                                                                                        <span class="invalid-feedback"
                                                                                              style="color: red;"
                                                                                              role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                        @enderror
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <div class="form-group">
                                                                                <input class="registrationSubmit"
                                                                                       type="submit" name="submit"
                                                                                       value="Update"/>
                                                                            </div>
                                                                            <input type="hidden" name="redirectUrl"
                                                                                   value=""/>
                                                                        </form>
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
