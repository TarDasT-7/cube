<?php 
    use App\Models\Category;
    use App\Models\Slider;
    $courses=Category::where('related' , 'دوره')->get();
    $onlines=Category::where('related' , 'آنلاین')->get();
    $pic=Slider::where('rel' , 'course')->get()->first();
?>
<nav class="navbar navbar-expand-md navbar-light ppk_nav p-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#marinav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--<a class="navbar-brand" href="#"><img class="logo" src="img/logo2.png"></a>-->
    <div class="collapse navbar-collapse justify-content-center" id="marinav">
        <ul class="navbar-nav pr-0 shop_nav">
            <li class="nav-item mgm_item">
                <a class="nav-link font14 bold" href="/">خانه</a>
            </li>
            <li class="nav-item dropdown mgm_item" id="wdrpmn">
                <a class="nav-link wdrp font14 dropdown-toggle bold" data-toggle="dropdown" href="#">دوره های آموزشی</a>
                <div class="dropdown-menu">
                    <div class=" container-fluid mgmn_cont">
                        <div class=" row mgmn_row p-3">
                            <div class="col-md-8 mgmn_catsmcol">
                                <div class="row mgmn_catsrow">
                                    @foreach ($courses as $item)
                                        <div class="col-md-4 mgmn_catscol">
                                            <ul class="mgmn_catsul list-unstyled pr-0">
                                                <li class="mgmn_catli cat_li">
                                                    <a class="hm_st txt_black">{{$item->title}}</a>
                                                    <ul class="mgmn_subcatul list-unstyled ">
                                                        @foreach ($item->subs as $sub)
                                                            <li class="mgmn_subcatli subcat_li">
                                                                <a class="txt_gray pl-1" href="{{route('courseFilterSubCate' , $sub->id)}}">{{$sub->title}}</a>
                                                            </li>                                                            
                                                        @endforeach

                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    @endforeach
                                    @foreach ($onlines as $item)
                                        <div class="col-md-4 mgmn_catscol">
                                            <ul class="mgmn_catsul list-unstyled pr-0">
                                                <li class="mgmn_catli cat_li">
                                                    <a class="hm_st txt_black">{{$item->title}}</a>
                                                    <ul class="mgmn_subcatul list-unstyled ">
                                                        @foreach ($item->subs as $sub)
                                                            <li class="mgmn_subcatli subcat_li">
                                                                <a class="txt_gray pl-1" href="{{route('courseFilterSubCate' , $sub->id)}}">{{$sub->title}}</a>
                                                            </li>                                                            
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-4 mgmn_catsmcol">
                                <div class="row mgmn_catsrow">
                                    <div class="col-md-12 cat_col">
                                        <div class="row cat_inner_row">
                                            <div class="col-md-12 cat_inner_imgcol">
                                                <img src="{{'/images/wallpapers/'.$pic->image}}" class="menu_img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </li>
            <li class="nav-item mgm_item">
                <a class="nav-link font14 bold" href="pkglists_page.html">محصولات</a>
            </li>
            <li class="nav-item mgm_item">
                <a class="nav-link font14 bold" href="{{route('podcastList')}}">پادکست</a>
            </li>
            <li class="nav-item mgm_item">
                <a class="nav-link font14 bold" href="{{route('blogtList', 'psychology')}}">روانشناسی کودک و نوجوان</a>
            </li>
            <li class="nav-item mgm_item">
                <a class="nav-link font14 bold" href="{{route('about')}}">تیم مکعب</a>
            </li>
            <li class="nav-item mgm_item">
                <a class="nav-link font14 bold" href="{{route('blogtList', 'blog')}}">بلاگ</a>
            </li>
            <li class="nav-item mgm_item">
                <a class="nav-link font14 bold" href="{{route('fvList')}}">فیلم های آموزشی رایگان</a>
            </li>
            <li class="nav-item mgm_item">
                <a class="nav-link font14 bold" href="{{route('contact')}}">تماس با ما</a>
            </li>
        </ul>
    </div>
</nav>
