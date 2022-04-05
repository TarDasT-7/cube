{{--
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}
    <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{URL::to('admin/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('admin/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet')}}">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('admin/assets/css/style-rtl.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-xl-12 col-11 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-12 d-lg-block d-none text-center align-self-center px-1 py-0">
                                <img src="{{asset('admin/images/logo/NaabLogo.jpg')}}" alt="branding logo">
                            </div>
                            <div class="col-lg-12 col-12 p-0">
                                <div class="card rounded-0 mb-0 px-2">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">ورود</h4>
                                        </div>
                                    </div>
                                    {{--<p class="px-2">Welcome back, please login to your account.</p>--}}
                                    <div class="card-content">
                                        <div class="card-body pt-1">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="پست الکترونیکی" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                    <label for="user-name">پست الکترونیکی</label>
                                                </fieldset>

                                                <fieldset class="form-label-group position-relative has-icon-left">
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="رمز عبور" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>
                                                    <label for="user-password">رمز عبور</label>
                                                </fieldset>
                                                <div class="form-group d-flex justify-content-between align-items-center">
                                                    <div class="text-left">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox" checked>
                                                                <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                <span class="">من را به خاطر بسپار</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="text-right"><a href="{{url('forget_password')}}" class="card-link">رمز عبور خود را فراموش کرده اید ؟</a></div>
                                                </div>
                                                <a href="{{route('register')}}" class="btn btn-outline-primary float-left btn-inline">ثبت نام</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline">ورود</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="login-footer">
                                        {{--<div class="divider">
                                            <div class="divider-text">OR</div>
                                        </div>--}}
                                        <div class="footer-btn d-inline">
                                            {{--<a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                                            <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                                            <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>--}}
                                            <span class="float-md-left d-block d-md-inline-block mt-25">طراحی و اجرا توسط شرکت مهندسی فانا</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{URL::to('admin/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{URL::to('admin/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{URL::to('admin/app-assets/js/core/app.js') }}"></script>
<script src="{{URL::to('admin/app-assets/js/scripts/components.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

