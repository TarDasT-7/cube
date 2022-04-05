<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>مکعب</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('more_style')
    @include('site.partials._header')
</head>
<body>
<div class="overlay d-none "></div>
<div id="reg_lg_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content md_contentcus">
            <div class="modal-header md_hdcus ">
                <button type="button" class="close  cls_but m-auto" data-dismiss="modal">

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
                <h4 class="modal-title w-100 txt_crm m-auto font20" > ورود به سایت </h4>
            </div>
            <div class="modal-body md_bodycus">
                <div class=" card-login">
                    <div class="plogin-body">
                        <div class="row pt-3">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group col-12 col-md-12 ">
                                        <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-envelope txt_org"></i>
															  </span>
                                            <input class="form-control srch_cus3 txt_dgray mr-0" name="email" id="email" type="email" placeholder="ایمیل">

                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-md-12 ">
                                        <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-lock txt_org"></i>
															  </span>
                                            <input class="form-control srch_cus3 txt_dgray mr-0" name="password"  id="password" type="password" placeholder="رمز عبور خود را وارد کنید">

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
<section class="menu_secmsh container-fluid p-0">
    <div class="row menu_navtop">
        <div class="reglog_col col-md-4 rgl_st">
            <ul class="list-unstyled list-inline input-group pr-0 mb-0 rgl_ul pl-3 justify-content-start">
                <!-- <li class="list-group-item list-inline-item li_cartli">
                           <a href="cart_page.html" class="txt_dgray pt-3">
                                     <svg class="cart_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 208.955 208.955" style="enable-background:new 0 0 208.955 208.955;" xml:space="preserve">
     <path d="M190.85,200.227L178.135,58.626c-0.347-3.867-3.588-6.829-7.47-6.829h-26.221V39.971c0-22.04-17.93-39.971-39.969-39.971
         C82.437,0,64.509,17.931,64.509,39.971v11.826H38.27c-3.882,0-7.123,2.962-7.47,6.829L18.035,200.784
         c-0.188,2.098,0.514,4.177,1.935,5.731s3.43,2.439,5.535,2.439h157.926c0.006,0,0.014,0,0.02,0c4.143,0,7.5-3.358,7.5-7.5
         C190.95,201.037,190.916,200.626,190.85,200.227z M79.509,39.971c0-13.769,11.2-24.971,24.967-24.971
         c13.768,0,24.969,11.202,24.969,24.971v11.826H79.509V39.971z M33.709,193.955L45.127,66.797h19.382v13.412
         c0,4.142,3.357,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5V66.797h49.936v13.412c0,4.142,3.357,7.5,7.5,7.5c4.143,0,7.5-3.358,7.5-7.5
         V66.797h19.364l11.418,127.158H33.709z"/>
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
                                     <span class="font10 bag_n txt_grdrk">0</span></a>
                                     </li>-->

                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="list-group-item list-inline-item li_itemst logli mr-2  dropdown">
                        <a class="font14 txt_srmp dropdown-toggle bold li_ast" data-toggle="dropdown" href="#">

                            <svg class="user_svg ml-2" id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m256 512c-68.38 0-132.667-26.629-181.02-74.98-48.351-48.353-74.98-112.64-74.98-181.02s26.629-132.667 74.98-181.02c48.353-48.351 112.64-74.98 181.02-74.98s132.667 26.629 181.02 74.98c48.351 48.353 74.98 112.64 74.98 181.02s-26.629 132.667-74.98 181.02c-48.353 48.351-112.64 74.98-181.02 74.98zm0-472c-119.103 0-216 96.897-216 216s96.897 216 216 216 216-96.897 216-216-96.897-216-216-216zm-1 235c-52.935 0-96-43.065-96-96s43.065-96 96-96 96 43.065 96 96-43.065 96-96 96zm0-152c-30.879 0-56 25.122-56 56s25.121 56 56 56 56-25.122 56-56-25.121-56-56-56zm126.712 268.472c8.546-6.999 9.799-19.6 2.8-28.146-28.281-34.525-70.068-54.326-114.647-54.326h-23.73c-44.579 0-86.366 19.801-114.646 54.327-6.999 8.545-5.746 21.146 2.8 28.146 8.545 7 21.146 5.745 28.146-2.799 20.65-25.214 51.158-39.674 83.7-39.674h23.73c32.542 0 63.05 14.46 83.701 39.673 3.955 4.827 9.695 7.327 15.484 7.327 4.459 0 8.945-1.483 12.662-4.528z"/></svg>

                            {{\Illuminate\Support\Facades\Auth::user()->name}} </a>
                        {{--    <div class="dropdown-menu dropdown-menu-right" style="font-family: vazir"><a class="dropdown-item" href="{{asset("site/img/etoklogo.png")}}"><i class="feather icon-user"></i> ویرایش پروفایل</a>
                                --}}{{--<a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a>
                                <a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>--}}{{--
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{URL::to('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="feather icon-power"></i> خروج</a>
                                @auth
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                @endauth
                            </div>--}}
                        <div class="dropdown-menu row ">
                            <a class="dropdown-item txt_srmp"  href="{{url("indexprofile")}}" >ویرایش پروفایل</a>
                            <a class="dropdown-item txt_srmp " href="{{url('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" >خروج</a>
                            @auth
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            @endauth
                        </div>
                    </li>
                @else
                    <li class="list-group-item list-inline-item li_itemst logli mr-2  dropdown">
                        <a class="font14 txt_srmp dropdown-toggle bold li_ast" data-toggle="dropdown" href="#">

                            <svg class="user_svg ml-2" id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m256 512c-68.38 0-132.667-26.629-181.02-74.98-48.351-48.353-74.98-112.64-74.98-181.02s26.629-132.667 74.98-181.02c48.353-48.351 112.64-74.98 181.02-74.98s132.667 26.629 181.02 74.98c48.351 48.353 74.98 112.64 74.98 181.02s-26.629 132.667-74.98 181.02c-48.353 48.351-112.64 74.98-181.02 74.98zm0-472c-119.103 0-216 96.897-216 216s96.897 216 216 216 216-96.897 216-216-96.897-216-216-216zm-1 235c-52.935 0-96-43.065-96-96s43.065-96 96-96 96 43.065 96 96-43.065 96-96 96zm0-152c-30.879 0-56 25.122-56 56s25.121 56 56 56 56-25.122 56-56-25.121-56-56-56zm126.712 268.472c8.546-6.999 9.799-19.6 2.8-28.146-28.281-34.525-70.068-54.326-114.647-54.326h-23.73c-44.579 0-86.366 19.801-114.646 54.327-6.999 8.545-5.746 21.146 2.8 28.146 8.545 7 21.146 5.745 28.146-2.799 20.65-25.214 51.158-39.674 83.7-39.674h23.73c32.542 0 63.05 14.46 83.701 39.673 3.955 4.827 9.695 7.327 15.484 7.327 4.459 0 8.945-1.483 12.662-4.528z"/></svg>

                            حساب کاربری </a>
                        <div class="dropdown-menu row ">
                            <a class="dropdown-item txt_srmp" data-toggle="modal" data-target="#reg_lg_modal" href="#" >ورود بحساب کاربری </a>
                            <a class="dropdown-item txt_srmp " href="{{url('enter')}}">عضویت</a>
                        </div>
                    </li>
                @endif
                <li class="list-group-item list-inline-item li_sclli">
                    <a href="#" class="txt_crm"><i class="fab fa-fw fa-instagram font24 pt-1"></i></a>
                </li>
                <li class="list-group-item list-inline-item li_sclli ">
                    <a href="#" class="txt_crm"><i class="fab fa-fw fa-telegram font24 pt-1"></i></a>
                </li>
                <li class="list-group-item list-inline-item li_sclli ">
                    <a href="#" class="txt_crm"><i class="fab fa-fw  font24 pt-1 fa-whatsapp"></i></a>
                </li>


            </ul>
        </div>
        <div class="reglog_col col-md-4 text-center">
            <div class="row justify-content-center">
                <div class="col-md-3 m-autoz">
                    <a class="top_navlogo " href="index.html"><img class="logo" src="{{asset("site/img/mokaablg.png")}}"></a>
                </div>
                <div class="col-md-8 m-autoz">
                    <h4 class="text-center txt_org bbj mb-0 font35">کانون رشد خلاق مکعب</h4>
                </div>
            </div>
        </div>
        <div class="reglog_col col-md-4 rgl_st">
            <ul class="list-unstyled list-inline input-group mb-0 rgl_ul pr-0 justify-content-end">
                <li class="list-group-item list-inline-item li_itemst srch_col font13 pl-0">
                    <div class="input-group">
                        <input type="text" class="form-control srch" placeholder="جستجو" aria-label="search" aria-describedby="basic-addon1">
                        <div class="input-group-append">
                            <span class="input-group-text " id="basic-addon1"><i class="fa fa-search txt_crm"></i></span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @include('site.partials._navigation')

</section>


@yield('content')

@include('site.partials._footer')

<!-- scripts -->
@include('site.partials._script')

</body>
</html>
