<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow" style="font-family: Vazir">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block" style="font-family: Vazir">به پنل مدیریت سایت آموزشی مکعب خوش آمدید</li>

                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block">
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">
                                <ul class="search-list search-list-bookmark"></ul>
                            </div>

                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                   
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                            <i class="ficon feather icon-bell"></i>
                            <span class="badge badge-pill badge-primary badge-up">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                    <h3 class="white" style="font-family: Vazir">5 اعلان جدید</h3>{{--<span class="notification-title">App Notifications</span>--}}
                                </div>
                            </li>
                            <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                        <div class="media-body">
                                            <h6 class="primary media-heading" style="font-family: Vazir">سفارش جدید</h6>{{--<small class="notification-text"> Are your going to meet me tonight?</small>--}}
                                        </div><small>
                                            <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9ساعت پیش</time></small>
                                    </div>
                            <li class="dropdown-menu-footer" style="font-family: Vazir"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">نمایش تمام اعلان ها</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <?php
                                $user=null;
                                if(\Auth::user())
                                {
                                    $user=\Auth::user();
                                }
                            ?>
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600" style="font-family: vazir">@if($user){{$user->name}}@endif</span><span class="user-status">Available</span></div><span><img class="round" src="{{asset("site/img/mokaab.png")}}" alt="avatar" height="50" width="50"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="font-family: vazir"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> ویرایش پروفایل</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="{{URL::to('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="feather icon-power"></i> خروج</a>
                            @auth
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            @endauth
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/rtl/vertical-menu-template/index.html">
                    <div class="">
                        <img src="{{asset("site/img/mokaablg.png")}}" height="60" width="70">
                    </div>
                    <h2 class="brand-text mb-0">مکعب</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            
            
            <li class=" nav-item" style="font-family: Vazir">
                <a href="{{route('homePage')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">صفحه اصلی</span>
                </a>
            </li>

            <li class=" nav-item" style="font-family: Vazir">
                <a href="{{route('dashboard')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">داشبورد</span>
                </a>
            </li>

            <li class=" nav-item" style="font-family: Vazir">
                <a href="{{route('slider.index')}}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="Dashboard">کاغذ دیواری</span>
                </a>
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-unlock"></i>
                    <span class="menu-title" data-i18n="Authentication">مدیریت اعضاء</span>
                </a>
                
                <ul class="menu-content">
                    <li>
                        <a href="{{route('role.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">سمت ها</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">کاربران</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('producer.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">تولید کنندگان</span>
                        </a>
                    </li>
                </ul>

            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-unlock"></i>
                    <span class="menu-title" data-i18n="Authentication">مدیریت دسته بندی ها</span>
                </a>
                
                <ul class="menu-content">
                    <li>
                        <a href="{{route('category.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">دسته اصلی</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sub.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">زیر دسته ها</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('product_teacher.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">سوالات متداول</span>
                        </a>
                    </li>

                </ul>

            </li>


            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-unlock"></i>
                    <span class="menu-title" data-i18n="Authentication">مدیریت محتوا و محصولات</span>
                </a>
                
                <ul class="menu-content">
                    <li>
                        <a href="{{route('free-video.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">آموزش های رایگان</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{route('product_category.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">محصولات</span>
                        </a>
                    </li>
                    

                    <li>
                        <a href="{{route('product_category.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">دوره ها</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('podcast.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">پادکست ها</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('product_teacher.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">بلاگ ها</span>
                        </a>
                    </li>

                </ul>

                
            </li>

            <li class=" nav-item">
                <a href="#">
                    <i class="feather icon-unlock"></i>
                    <span class="menu-title" data-i18n="Authentication">تیم ما</span>
                </a>
            
                <ul class="menu-content">
                    
                    <li>
                        <a href="{{route('product_category.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">درباره ما</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('product_category.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">ارتباط با ما</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('product_teacher.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">سوالات متداول</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('product_teacher.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">کامنت ها</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('product_teacher.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">پیام ها</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('product_teacher.index')}}">
                            <i class="feather icon-circle"></i>
                            <span class="menu-item" data-i18n="Register">پاورقی</span>
                        </a>
                    </li>

                </ul>
            </li>


            {{-- <li class=" nav-item" style="font-family: Vazir"><a href="{{route('admin.index')}}"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors"> کاربران ادمین</span></a></li>
            <li class=" nav-item" style="font-family: Vazir"><a href="{{route('slider.index')}}"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors"> اسلایدر صفحه اصلی</span></a></li>
           <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">محصولات</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('product_category.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت دسته بندی محصولات</span></a></li>
                    <li><a href="{{route('product_teacher.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت اساتید</span></a></li>
                    <li><a href="{{route('product.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت محصولات</span></a></li>
                    <li><a href="{{route('product_video.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت فایل های محصول</span></a></li>
                </ul>
            </li>
           <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">دوره های آموزش</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('course_category.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت دسته بندی دوره ها</span></a></li>
                    <li><a href="{{route('teacher.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت اساتید</span></a></li>
                    <li><a href="{{route('course.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت دوره ها</span></a></li>
                    <li><a href="{{route('coursevideo.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت فایل های دوره</span></a></li>
                </ul>
            </li>
           <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">خدمات تولید محتوا</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('advertisement.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت تولید محتوا</span></a></li>
                    <li><a href="{{route('advertisement_image.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت عکس های معرفی</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">پادکست</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('podcategory.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت دسته بندی پادکست ها</span></a></li>
                    <li><a href="{{route('speaker.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت گویندگان</span></a></li>
                    <li><a href="{{route('podcast.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت پادکست ها</span></a></li>
                    <li><a href="{{route('podaudio.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت فایل های پادکست</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">بلاگ</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('blogcategory.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت دسته بندی مقالات</span></a></li>
                    <li><a href="{{route('author.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت نویسندگان</span></a></li>
                    <li><a href="{{route('blog.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت بلاگ</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">درباره ما</span></a>
                <ul class="menu-content">
                    <li class=" nav-item" style="font-family: Vazir"><a href="{{route('aboutUs.index')}}"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors">مدیریت درباره ما</span></a></li>
                    <li class=" nav-item" style="font-family: Vazir"><a href="{{route('member.index')}}"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors"> اعضای تیم</span></a></li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">تماس با ما</span></a>
                <ul class="menu-content">
                    <li class=" nav-item" style="font-family: Vazir"><a href="{{route('contactUs.index')}}"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors">مدیریت تماس با ما</span></a></li>
                    <li class=" nav-item" style="font-family: Vazir"><a href="{{route('contactUs.show','1')}}"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors">پیام های تماس باما</span></a></li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">پکیج ها</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('plan.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت پکیج ها</span></a></li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">مدیریت سبد خرید</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('send_price.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">تعین هزینه ارسال </span></a></li>
                    <li><a href="{{route('package')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت خرید پکیج ها</span></a></li>
                    <li><a href="{{route('paid')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت آیتم های پرداخت شده </span></a></li>
                    <li><a href="{{route('unpaid')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت آیتم های پرداخت نشده</span></a></li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">سوالات متداول</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('question.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Login">مدیریت سوالات</span></a></li>
                    <li><a href="{{route('questioncategory.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Register">مدیریت دسته بندی سوالات</span></a></li>
                </ul>
            </li>
            <li class=" nav-item" style="font-family: Vazir"><a href="{{route('footer.index')}}"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors">مدیریت پاورقی</span></a></li> --}}


        </ul>
    </div>
</div>
