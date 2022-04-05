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
<div id="reg_lg_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content md_contentcus" >
            <div class="modal-header md_hdcus  back_brw">
                <button type="button" class="close cls_but txt_srmp m-auto" data-dismiss="modal">
                    <svg class="cls_butsvg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve">
	   <g>
           <g>
               <path d="M368,176c-8.832,0-16,7.168-16,16c0,88.224-71.776,160-160,160S32,280.224,32,192S103.776,32,192,32
				   c42.952,0,83.272,16.784,113.536,47.264c6.224,6.264,16.36,6.304,22.624,0.08c6.272-6.224,6.304-16.36,0.08-22.632
				   C291.928,20.144,243.536,0,192,0C86.128,0,0,86.128,0,192s86.128,192,192,192c105.864,0,192-86.128,192-192
				   C384,183.168,376.832,176,368,176z"/>
           </g>
       </g>
                        <g>
                            <g>
                                <path d="M214.624,192l36.688-36.688c6.248-6.248,6.248-16.376,0-22.624s-16.376-6.248-22.624,0L192,169.376l-36.688-36.688
				   c-6.24-6.248-16.384-6.248-22.624,0c-6.248,6.248-6.248,16.376,0,22.624L169.376,192l-36.688,36.688
				   c-6.248,6.248-6.248,16.376,0,22.624C135.808,254.44,139.904,256,144,256s8.192-1.56,11.312-4.688L192,214.624l36.688,36.688
				   C231.816,254.44,235.904,256,240,256s8.184-1.56,11.312-4.688c6.248-6.248,6.248-16.376,0-22.624L214.624,192z"/>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
	   </svg>
                </button>
                <h6 class="modal-title w-100 txt_white m-auto font18"> ورود به سایت </h6>
            </div>
            <div class="modal-body md_bodycus back_gray">
                <div class=" card-login">
                    <div class="plogin-body">
                        <div class="row pt-3">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group col-12 col-md-12">
                                        <div class="input-group input-group-sm">
													 <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
													 <i class="fa fa-envelope txt_srmp"></i>
														 </span>
                                            <input class="form-control srch_cus3 txt_gray mr-0" name="email" id="email" type="email" placeholder="ایمیل">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-md-12 mg">
                                        <div class="input-group input-group-sm">
													 <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
													 <i class="fa fa-lock txt_srmp"></i>
														 </span>
                                            <input class="form-control srch_cus3 txt_gray mr-0 text-right" name="password"  id="password" type="password" placeholder="رمز عبور ">

                                        </div>
                                    </div>
                                    <div class="form-check form-check custom-controls-stacked my-3 pr-2_5">
                                        <label class="form-check-label custom-control material-checkbox">
                                            <input class="form-check-input material-control-input" type="checkbox">
                                            <span class="material-control-description">مرا بخاطر بسپار</span>
                                            <span class="material-control-indicator"></span>

                                        </label>
                                    </div>
                                    <div class="col-12 col-md-12 mb-2">
                                        <a href="{{url('forget_password')}}" class="a_style3 forgot-password txt_gray font12">رمز خود را فراموش کرده اید ؟</a>

                                    </div>
                                    <div class="col-12 col-md-12 mg">
                                        <a href="{{route('register')}}" class="a_style3 forgot-password txt_srmp mb-3 font14">قبلا در سایت عضو نشده اید ؟</a>

                                    </div>
                                    <div class="col-md-6 mg">
                                        <div >

                                            <button type="submit" class="btn btn-primary float-right btn-inline">ورود</button>
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
<section class="main rgst_mrow">
    <div class="container-fluid reg_cont pt-5 pb-6 cuclb_cont ">
        <div class="row reg_icorow justify-content-center ">
            <div class="col-md-4 logo_regcol text-center">
                <a href="{{asset("site/index.html")}}"><img src="{{asset("site/img/etoklogo.png")}}" class="img_df2"></a>
            </div>
        </div>
        <div class="row reg_formrow justify-content-center">
            <div class="col-12 col-md-4 purchase_successcol rgform_col back_gray">
                <div class="row title_row_rg">
                    <div class="col-md-12 title_col_rg ">
                        <h4 class="txt_srmp pb-3 text-center bbj">ثبت نام در
                            وبسایت </h4>
                    </div>
                </div>
                <div class="row rg_form m-0">
                    <div class="col-12 col-md-12 rg_form_col">
                        <form id="comment_form"  method="post" action="{{ route('register') }}" role="form" class="row user_rating_row ">
                                @csrf
                            <div class="row title_st2">
                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-address-book txt_srmp"></i>
															  </span>
                                        <input id="name" name="name" class="form-control srch_cus3 txt_gray mr-0" type="text" placeholder="نام و نام خانوادگی خود را وارد کنید">

                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-envelope txt_srmp"></i>
															  </span>
                                        <input id="email" name="email" class="form-control srch_cus3 txt_gray mr-0" type="email" placeholder="ایمیل خود را وارد کنید">

                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-mobile-alt txt_srmp"></i>
															  </span>
                                        <input id="phone" name="phone" class="form-control srch_cus3 txt_gray mr-0" type="number" placeholder="شماره موبایل خود را وارد کنید">

                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-lock txt_srmp"></i>
															  </span>
                                        <input id="password"  name="password" class="form-control srch_cus3 txt_gray mr-0" type="password" placeholder="کلمه عبور مورد نظر خود را وارد کنید">

                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-lock txt_srmp"></i>
															  </span>
                                        <input id="ConfPassword"  name="password_confirmation" class="form-control srch_cus3 txt_gray mr-0" type="password" placeholder="کلمه عبور مورد نظر خود را تکرار کنید">

                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 justify-content-center m-0">
                                <div class=" form-check custom-controls-stacked  pr-2_5">
                                    <label class="form-check-label custom-control material-checkbox">
                                        <input class="form-check-input material-control-input" name="private" type="checkbox">
                                        <span class="material-control-description font13 txt_gray"> حریم خصوصی و شرایط و قوانین استفاده از سرویس های سایت ایتوک
را مطالعه نموده و با کلیه موارد آن موافقم.</span>
                                        <span class="material-control-indicator rd"></span>

                                    </label>
                                </div>
                                <div class="col-12 col-md-12 font15 txt_dgray">
                                    قبلا ثبت نام کرده اید؟
                                    <a data-toggle="modal" data-target="#reg_lg_modal" href="#" class="txt_gray">
                                        وارد شوید</a>
                                </div>
                            </div>
                            <div class="row tk_butrow pb-1 pt-4 w-100 justify-content-center">
                                <div class="col-12 col-md-8 app_dlcol pr-0">
                                    <button type="submit" class="btn btn-raised btn_pd btn-lg bold font15 btn_full mb-1 txt_white dima btn_cusblgray w-100">
                                        ثبت نام </button>
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
