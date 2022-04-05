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
                        <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                        <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                        <!--     i.ficon.feather.icon-menu-->
                        {{--<li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>--}}
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block">
                            {{--<a class="nav-link bookmark-star">
                                <i class="ficon feather icon-star warning"></i>
                            </a>--}}
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">
                                <ul class="search-list search-list-bookmark"></ul>
                            </div>
                            <!-- select.bookmark-select-->
                            <!--   option Chat-->
                            <!--   option email-->
                            <!--   option todo-->
                            <!--   option Calendar-->
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    {{--<li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                    </li>--}}
                    {{--<li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                            <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="template-list">
                            <div class="search-input-close"><i class="feather icon-x"></i></div>
                            <ul class="search-list search-list-main"></ul>
                        </div>
                    </li>--}}
                    {{--<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-shopping-cart"></i><span class="badge badge-pill badge-primary badge-up cart-item-count">6</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-cart dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header m-0 p-2">
                                    <h3 class="white"><span class="cart-item-count">6</span><span class="mx-50">Items</span></h3><span class="notification-title">In Your Cart</span>
                                </div>
                            </li>
                            <li class="scrollable-container media-list"><a class="cart-item" href="app-ecommerce-details.html">
                                    <div class="media">
                                        <div class="media-left d-flex justify-content-center align-items-center"><img src="../../../app-assets/images/pages/eCommerce/4.png" width="75" alt="Cart Item"></div>
                                        <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Apple - Apple Watch Series 1 42mm Space Gray Aluminum Case Black Sport Band - Space Gray Aluminum</span><span class="item-desc font-small-2 text-truncate d-block"> Durable, lightweight aluminum cases in silver, space gray,gold, and rose gold. Sport Band in a variety of colors. All the features of the original Apple Watch, plus a new dual-core processor for faster performance. All models run watchOS 3. Requires an iPhone 5 or later to run this device.</span>
                                            <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $299</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                        </div>
                                    </div>
                                </a><a class="cart-item" href="app-ecommerce-details.html">
                                    <div class="media">
                                        <div class="media-left d-flex justify-content-center align-items-center"><img class="mt-1 pl-50" src="../../../app-assets/images/pages/eCommerce/dell-inspirion.jpg" width="100" alt="Cart Item"></div>
                                        <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Apple - Macbook® (Latest Model) - 12" Display - Intel Core M5 - 8GB Memory - 512GB Flash Storage - Space Gray</span><span class="item-desc font-small-2 text-truncate d-block"> MacBook delivers a full-size experience in the lightest and most compact Mac notebook ever. With a full-size keyboard, force-sensing trackpad, 12-inch Retina display,1 sixth-generation Intel Core M processor, multifunctional USB-C port, and now up to 10 hours of battery life,2 MacBook features big thinking in an impossibly compact form.</span>
                                            <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $1599.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                        </div>
                                    </div>
                                </a><a class="cart-item" href="app-ecommerce-details.html">
                                    <div class="media">
                                        <div class="media-left d-flex justify-content-center align-items-center"><img src="../../../app-assets/images/pages/eCommerce/7.png" width="88" alt="Cart Item"></div>
                                        <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Sony - PlayStation 4 Pro Console</span><span class="item-desc font-small-2 text-truncate d-block"> PS4 Pro Dynamic 4K Gaming & 4K Entertainment* PS4 Pro gets you closer to your game. Heighten your experiences. Enrich your adventures. Let the super-charged PS4 Pro lead the way.** GREATNESS AWAITS</span>
                                            <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $399.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                        </div>
                                    </div>
                                </a><a class="cart-item" href="app-ecommerce-details.html">
                                    <div class="media">
                                        <div class="media-left d-flex justify-content-center align-items-center"><img src="../../../app-assets/images/pages/eCommerce/10.png" width="75" alt="Cart Item"></div>
                                        <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Beats by Dr. Dre - Geek Squad Certified Refurbished Beats Studio Wireless On-Ear Headphones - Red</span><span class="item-desc font-small-2 text-truncate d-block"> Rock out to your favorite songs with these Beats by Dr. Dre Beats Studio Wireless GS-MH8K2AM/A headphones that feature a Beats Acoustic Engine and DSP software for enhanced clarity. ANC (Adaptive Noise Cancellation) allows you to focus on your tunes.</span>
                                            <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $379.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                        </div>
                                    </div>
                                </a><a class="cart-item" href="app-ecommerce-details.html">
                                    <div class="media">
                                        <div class="media-left d-flex justify-content-center align-items-center"><img class="mt-1 pl-50" src="../../../app-assets/images/pages/eCommerce/sony-75class-tv.jpg" width="100" alt="Cart Item"></div>
                                        <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Sony - 75" Class (74.5" diag) - LED - 2160p - Smart - 3D - 4K Ultra HD TV with High Dynamic Range - Black</span><span class="item-desc font-small-2 text-truncate d-block"> This Sony 4K HDR TV boasts 4K technology for vibrant hues. Its X940D series features a bold 75-inch screen and slim design. Wires remain hidden, and the unit is easily wall mounted. This television has a 4K Processor X1 and 4K X-Reality PRO for crisp video. This Sony 4K HDR TV is easy to control via voice commands.</span>
                                            <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $4499.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                        </div>
                                    </div>
                                </a><a class="cart-item" href="app-ecommerce-details.html">
                                    <div class="media">
                                        <div class="media-left d-flex justify-content-center align-items-center"><img class="mt-1 pl-50" src="../../../app-assets/images/pages/eCommerce/canon-camera.jpg" width="70" alt="Cart Item"></div>
                                        <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Nikon - D810 DSLR Camera with AF-S NIKKOR 24-120mm f/4G ED VR Zoom Lens - Black</span><span class="item-desc font-small-2 text-truncate d-block"> Shoot arresting photos and 1080p high-definition videos with this Nikon D810 DSLR camera, which features a 36.3-megapixel CMOS sensor and a powerful EXPEED 4 processor for clear, detailed images. The AF-S NIKKOR 24-120mm lens offers shooting versatility. Memory card sold separately.</span>
                                            <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $4099.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center text-primary" href="app-ecommerce-checkout.html"><i class="feather icon-shopping-cart align-middle"></i><span class="align-middle text-bold-600">Checkout</span></a></li>
                            <li class="empty-cart d-none p-2">Your Cart Is Empty.</li>
                        </ul>
                    </li>--}}
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

                            $user_name=\Auth::user()->name;
                            ?>
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600" style="font-family: vazir">{{$user_name}}</span>{{--<span class="user-status">Available</span>--}}</div><span><img class="round" src="{{asset("site/img/mokaab.png")}}" alt="avatar" height="50" width="50"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" style="font-family: vazir"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> ویرایش پروفایل</a>
                            {{--<a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a>
                            <a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a>
                            <a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>--}}
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
{{--<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>--}}
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
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
            <li class=" nav-item" style="font-family: Vazir"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">داشبورد مدیریتی</span>{{--<span class="badge badge badge-warning badge-pill float-right mr-2">2</span>--}}</a>
           {{-- <li class=" navigation-header"><span>Apps</span>
            </li>
            <li class=" nav-item"><a href="app-email.html"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email">Email</span></a>
            </li>
            <li class=" nav-item"><a href="app-chat.html"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat">Chat</span></a>
            </li>
            <li class=" nav-item"><a href="app-todo.html"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Todo">Todo</span></a>
            </li>
            <li class=" nav-item"><a href="app-calender.html"><i class="feather icon-calendar"></i><span class="menu-title" data-i18n="Calender">Calender</span></a>
            </li>--}}
            {{--<li class=" nav-item" style="font-family: Vazir"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">قهوه</span></a>
                <ul class="menu-content">
                    <li><a href="app-ecommerce-shop.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Shop</span></a>
                    </li>
                    <li><a href="app-ecommerce-details.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Details</span></a>
                    </li>
                    <li><a href="app-ecommerce-wishlist.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Wish List</span></a>
                    </li>
                    <li><a href="app-ecommerce-checkout.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Checkout</span></a>
                    </li>
                </ul>
            </li>--}}
            {{--<li class=" nav-item" style="font-family: Vazir"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">تجهیزات</span></a>
                <ul class="menu-content">
                    <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                    </li>
                    <li><a href="app-user-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">View</span></a>
                    </li>
                    <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Edit</span></a>
                    </li>
                </ul>
            </li>--}}
           {{--<li class=" navigation-header"><span>UI Elements</span></li>--}}
            {{--<li class=" nav-item" style="font-family: Vazir"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">دستگاه های برقی </span></a>
                <ul class="menu-content">
                    <li><a href="data-list-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List View">List View</span></a>
                    </li>
                    <li><a href="data-thumb-view.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Thumb View">Thumb View</span></a>
                    </li>
                </ul>
            </li>--}}
            {{--<li class=" nav-item" style="font-family: Vazir"><a href="#"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Content">برند ها</span></a>
                <ul class="menu-content">
                    <li><a href="content-grid.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Grid">Grid</span></a>
                    </li>
                    <li><a href="content-typography.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Typography">Typography</span></a>
                    </li>
                    <li><a href="content-text-utilities.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Text Utilities">Text Utilities</span></a>
                    </li>
                    <li><a href="content-syntax-highlighter.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Syntax Highlighter">Syntax Highlighter</span></a>
                    </li>
                    <li><a href="content-helper-classes.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Helper Classes">Helper Classes</span></a>
                    </li>
                </ul>
            </li>--}}
            <li class=" nav-item" style="font-family: Vazir"><a href="{{route('admin.index')}}"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors"> کاربران ادمین</span></a></li>
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
            <li class=" nav-item" style="font-family: Vazir"><a href="{{route('footer.index')}}"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors">مدیریت پاورقی</span></a></li>


        </ul>
    </div>
</div>
<!-- END: Main Menu-->
