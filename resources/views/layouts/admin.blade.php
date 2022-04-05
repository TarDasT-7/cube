<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl" style="font-family: vazir" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>پنل مدیریت | @yield('title')</title>
    <!-- header -->
    @include('admin.partials._header')
</head>
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" style="font-family: Vazir">

    <!-- navigation -->
@include('admin.partials._navigation')

<!-- content -->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row mt-3 mb-2">
                    <div class="col-md-8" >
                        @include('admin.partials._messages')
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
@include('admin.partials._footer')

<!-- scripts -->
    @include('admin.partials._script')
    @include('admin.partials.datatable_js')

</body>
</html>
