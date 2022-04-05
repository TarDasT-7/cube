    <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta charset="utf-8">
    <title>ایتوک</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{asset('site/animate.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/main.css')}}">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->

<div class="overlay d-none "></div>
<section class="main rgst_mrow">
    <div class="container-fluid reg_cont pt-5 pb-6 cuclb_cont ">
        <div class="col-12">
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    <div>{{session('error')}}</div>
                </div>
            @endif
        </div>
        <div class="row reg_icorow justify-content-center ">
            <div class="col-md-4 logo_regcol text-center">
                <a href="{{asset("site/index.html")}}"><img src="{{asset("site/img/etoklogo.png")}}" class="img_df2"></a>
            </div>
        </div>
        <div class="row reg_formrow justify-content-center">
            <div class="col-12 col-md-4 purchase_successcol rgform_col back_gray">
                <div class="row title_row_rg">
                    <div class="col-md-12 title_col_rg ">
                        <h4 class="txt_srmp pb-3 text-center bbj">درخواست بازیابی رمز عبور</h4>
                    </div>
                </div>
                <div class="row title_row_rg">
                    <div class="col-md-12 title_col_rg ">
                        <h6 class="txt_srmp pb-3 text-center bbj">لطفا شماره موبایل خود را وارد نمایید.</h6>
                    </div>
                </div>
                <div class="row rg_form m-0">
                    <div class="col-12 col-md-12 rg_form_col">
                        <form id="comment_form"  method="post" action="{{ url('forget_password_phone') }}" role="form" class="row user_rating_row ">
                                @csrf

                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-mobile-alt txt_srmp"></i>
															  </span>
                                        <input id="phone" name="phone" class="form-control srch_cus3 txt_gray mr-0" type="number" placeholder="شماره موبایل خود را وارد کنید">

                                    </div>
                                </div>

                            <div class="row pt-3 justify-content-center m-1">
                            </div>
                            <div class="row tk_butrow pb-1 pt-4 pr-4 w-100 justify-content-center">
                                <div class="col-12 col-md-8 app_dlcol pr-0">
                                    <button type="submit" class="btn btn-raised btn_pd btn-lg bold font15 btn_full mb-1 txt_white dima btn_cusblgray w-100">
                                        ادامه </button>
                                </div>



                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>


{{--
</section>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-xl-8 col-10 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-12 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                <img src="{{asset('admin/images/logo/NaabLogo.jpg')}}" alt="branding logo">
                            </div>
                            <div class="col-lg-12 col-12 p-0 d-lg-block d-none">
                                <div class="card rounded-0 mb-0 p-2">
                                    <div class="card-header pt-50 pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">ثبت نام</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">فرم زیر را برای ایجاد یک حساب جدید پر کنید.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-0">
                                            <form method="post" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-label-group">
                                                    <input type="text" id="name"  required autofocus autocomplete="name" class="form-control" placeholder="نام" name="name">
                                                    <label for="name">نام</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="پست الکترونیکی"  required>
                                                    <label for="email">پست الکترونیکی</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="number" name="phone" id="phone" class="form-control" placeholder="شماره تلفن همراه"   >
                                                    <label for="phone">تلفن همراه</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="password" class="form-control" placeholder="رمز عبور" type="password" name="password" required autocomplete="new-password">
                                                    <label for="password">رمز عبور</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="ConfPassword" class="form-control" placeholder="تکرار رمز عبور" type="password" name="password_confirmation" required autocomplete="new-password">
                                                    <label for="ConfPassword">تکرار رمز عبور</label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox" checked>
                                                                <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                <span class=""> من شرایط و ضوابط را می پذیرم</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <a href="{{route('login')}}" class="btn btn-outline-primary float-left btn-inline mb-50">ورود</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline mb-50">ثبت نام</button>
                                            </form>
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
--}}
    <script src={{asset("site/js/jquery-3.2.1.min.js")}}></script>
    <script src={{asset("site/js/popper.min.js")}}></script>
    <script src={{asset("site/js/bootstrap.min.js")}}></script>
    <script src={{asset("site/js/bootstrap-select.js")}}></script>
    <script src={{asset("site/js/vanilla.js")}}></script>
    <script src={{asset("site/js/main_js.js")}}></script>
</body>
<!-- END: Body-->
@include('site.partials._footer')
</html>
