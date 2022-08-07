@extends('layouts.app')

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
                                                                        <h2>{{ __('Verify Your Email Address') }}</h2>
                                                                    </div>

                                                                    <div class="card-body">
                                                                        @if (session('resent'))
                                                                            <div class="alert alert-success"
                                                                                 role="alert">
                                                                                {{ __('A fresh verification link has been sent to your email address.') }}
                                                                            </div>
                                                                        @endif

                                                                        {{ __('Before proceeding, please check your email for a verification link.') }}
                                                                        {{ __('If you did not receive the email') }},
                                                                            <br/>
                                                                            <br/>
                                                                        <form class="d-inline" method="POST"
                                                                              action="{{ route('verification.resend') }}">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                    class="btn btn-link p-0 m-0 align-baseline">{{ __('Click here to request another') }}</button>
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
