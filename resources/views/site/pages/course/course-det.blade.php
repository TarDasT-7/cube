@extends('layouts.site')

@section('title', 'درباره ما  ')

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            @if(session()->has('exist'))
                <div class="alert alert-danger">
                    <div>{{session('exist')}}</div>
                </div>
            @endif
        </div>
    </div>
        <div class="row" id="table-striped">
        <div class="col-12">
            @if(session()->has('limited'))
                <div class="alert alert-danger">
                    <div>{{session('limited')}}</div>
                </div>
            @endif
        </div>
        </div>
    <section class="main_sec container-fluid main-content">
        <div class="row breadcrumb_row m-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb brdc_cus font14">
                    <li class="breadcrumb-item"><a href="/" class="txt_gray">خانه</a></li>
                    <li class="breadcrumb-item "><a href="{{url('sitecourse')}}" class="txt_gray">دوره های آمورشی</a></li>
                    @foreach($course->course_categories as $category)
                    <li class="breadcrumb-item "><a href="#" class="txt_gray"> {{$category->name}}</a></li><br>
                    @endforeach
                    <li class="breadcrumb-item active" aria-current="page"> / {{$course->title}}
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row prd_dtmainrow back_white m-0 mb-4">
            <div class="col-md-12 prd_dtmaincol">
                <div class="row prdt_galtxtrow">
                    <div class="col-md-12 pr_name">
                        <h6 class="font24 txt_dgray bold">{{$course->title}}</h6>
                    </div>
                    <div class="col-md-7 prdt_gal_mcol pt-4">
                        <div class="row prdt_gal_mrow m-0">
                            <div class="col-md-12 prdtgal_col">
                                <div class="row prdtgal_row">
                                    <!--<div class="col-md-12 minmbx_slvidcol p-0" id="vid_ovr">
                                       <video src="video/smpvid.mp4" class="minmbx_slimg" style="object-fit:cover;" poster="img/sl_org4.jpg"></video>
                                    </div>-->
                                    <div class="col-md-12 vid_mcol p-0">
                                        <video id="my-player" class="video-js vjs-theme-fantasy vjs-big-play-centered" poster="{{asset('images/'.$course->image)}}" style="object-fit:cover;" controls >
                                            <source src="{{asset('files/'.$videos[0]->file)}}">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 prddt_billtxt_cont pt-4">
                        <div class="row crs_prdt_row m-0">
                            <!--<div class="col-md-12 pr_name">
                                    <h6 class="font24 txt_dgray bold">عنوان کامل دوره در این مکان قرار می گیرد</h6>
                            </div>-->
                            <div class="col-md-12 prd_dtbillcont back_gray ">
                                <div class="row prd_dtbillrow justify-content-end m-0  h-100">
                                    <div class="col-md-12 crs_gndtcol">
                                        <div class="row crs_gndtrow m-0">
                                            <div class="col-md-3 artcl_wrtmcol m-autoz">
                                                <div class="row artcl_wrtmrow justify-content-center">
                                                    <div class="col-md-6 tch_authimgcol text-center mb-3">
                                                        <img src="{{asset("site/img/avtfm1.png")}}" class="tch_authimg">
                                                    </div>
                                                    <div class="col-md-12 artcl_wrtnmcol text-center">
                                                        <h6 class="font15 txt_gray bold mb-1">{{$course->teacher->name}}</h6>
                                                        @foreach($course->teacher->course_categories as $category)
                                                            <span class="txt_gray font12">{{$category->name}}</span><br>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 m-autoz">
                                                <div class="row mtqg_row justify-content-center">
                                                    <div class="col-12 col-md-6 text-center crs_ftcol mb-3">
                                                        <svg version="1.1" class="qg_ico" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
    <g>
        <path d="M256,0c-8.284,0-15,6.716-15,15s6.716,15,15,15c124.617,0,226,101.383,226,226S380.617,482,256,482S30,380.617,30,256
			c0-60.357,25.37-118.632,69.017-161.036V121c0,8.284,6.716,15,15,15S129,129.284,129,121V61c0-8.284-6.699-15-14.983-15H53.5
			c-8.284,0-15,6.716-15,15s6.716,14.9,15,14.9h22.012C27.008,124.322,0,189.079,0,256c0,140.74,115.209,256,256,256
			c140.74,0,256-115.209,256-256C512,115.26,396.791,0,256,0z"/>
    </g>
</g>
                                                            <g>
                                                                <g>
                                                                    <path d="M256,91c-90.975,0-165,74.049-165,165c0,90.981,74.055,165,165,165c90.975,0,165-74.049,165-165
			C421,165.019,346.945,91,256,91z M361.429,340.216l-9.969-9.97c-5.857-5.858-15.355-5.858-21.213,0
			c-5.858,5.858-5.858,15.355,0,21.213l9.97,9.97C320.792,376.976,297,387.274,271,390.162V376c0-8.284-6.716-15-15-15
			s-15,6.716-15,15v14.162c-26-2.888-49.792-13.186-69.216-28.733l9.97-9.97c5.858-5.858,5.858-15.355,0-21.213
			c-5.857-5.858-15.355-5.858-21.213,0l-9.97,9.97C135.024,320.792,124.725,297,121.838,271H136c8.284,0,15-6.716,15-15
			s-6.716-15-15-15h-14.162c2.888-26,13.186-49.792,28.733-69.216l9.97,9.97c5.857,5.858,15.356,5.858,21.213,0
			c5.858-5.858,5.858-15.355,0-21.213l-9.97-9.97C191.208,135.024,215,124.726,241,121.838V136c0,8.284,6.716,15,15,15
			s15-6.716,15-15v-14.162c26,2.888,49.792,13.186,69.216,28.733l-9.97,9.97c-5.858,5.858-5.858,15.355,0,21.213
			c5.857,5.858,15.356,5.858,21.213,0l9.969-9.97C376.976,191.208,387.275,215,390.162,241H376c-8.284,0-15,6.716-15,15
			s6.716,14.9,15,14.9h14.162C387.274,296.9,376.976,320.792,361.429,340.216z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M296.607,275.393L271,249.787V196c0-8.284-6.716-15-15-15s-15,6.716-15,15v60c0,3.978,1.581,7.793,4.394,10.606l30,30
			c5.857,5.858,15.356,5.858,21.213,0C302.465,290.748,302.465,281.251,296.607,275.393z"/>
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
                                                    </div>
                                                    <div class="col-12 col-md-12 crs_ftcol text-center brtmj bold">
                                                        <h6 class="font15 txt_gray bold mb-1">مدت دوره</h6>
                                                        <span class="txt_gray font12">{{$course->course_time}}</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 m-autoz">
                                                <div class="row mtqg_row justify-content-center">
                                                    <div class="col-12 col-md-6 text-center crs_ftcol mb-3">
                                                        <svg  class="qg_ico" viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg"><path d="m436.75 220.917969c-1.699219 0-3.394531.054687-5.085938.167969v-85.585938c0-30.417969-24.746093-55.167969-55.164062-55.167969h-85.589844c.113282-1.6875.171875-3.382812.171875-5.082031 0-41.492188-33.757812-75.25-75.25-75.25-41.492187 0-75.25 33.757812-75.25 75.25 0 1.699219.058594 3.394531.171875 5.082031h-85.589844c-30.417968 0-55.164062 24.75-55.164062 55.167969v103.859375c0 4.867187 2.363281 9.433594 6.339844 12.246094 3.976562 2.8125 9.066406 3.515625 13.65625 1.894531 4.855468-1.714844 9.929687-2.582031 15.085937-2.582031 24.949219 0 45.25 20.296875 45.25 45.25 0 24.949219-20.300781 45.25-45.25 45.25-5.160156 0-10.230469-.871094-15.082031-2.585938-4.589844-1.625-9.683594-.917969-13.660156 1.894531-3.976563 2.808594-6.339844 7.375-6.339844 12.246094v103.859375c0 30.421875 24.746094 55.167969 55.164062 55.167969h103.859376.023437c8.28125 0 15-6.714844 15-15 0-2.011719-.398437-3.925781-1.113281-5.679688-1.5625-4.636718-2.351563-9.476562-2.351563-14.402343 0-24.953125 20.300781-45.25 45.25-45.25s45.25 20.296875 45.25 45.25c0 5.15625-.867187 10.230469-2.585937 15.078125-1.625 4.59375-.917969 9.6875 1.894531 13.664062 2.8125 3.976563 7.378906 6.339844 12.25 6.339844h103.859375c30.417969 0 55.164062-24.746094 55.164062-55.167969v-85.585937c1.691407.113281 3.386719.171875 5.085938.171875 41.492188 0 75.25-33.757813 75.25-75.25 0-41.492188-33.757812-75.25-75.25-75.25zm0 120.5c-5.160156 0-10.234375-.871094-15.082031-2.585938-4.589844-1.625-9.683594-.917969-13.660157 1.894531-3.976562 2.808594-6.34375 7.375-6.34375 12.246094v103.859375c0 13.878907-11.285156 25.167969-25.164062 25.167969h-85.589844c.113282-1.6875.171875-3.382812.171875-5.085938 0-41.492187-33.757812-75.25-75.25-75.25-41.492187 0-75.25 33.757813-75.25 75.25 0 1.703126.058594 3.398438.171875 5.085938h-85.589844c-13.875 0-25.164062-11.289062-25.164062-25.167969v-85.585937c1.6875.113281 3.382812.171875 5.082031.171875 41.492188 0 75.25-33.757813 75.25-75.25 0-41.492188-33.757812-75.25-75.25-75.25-1.699219 0-3.394531.054687-5.082031.167969v-85.585938c0-13.878906 11.289062-25.167969 25.164062-25.167969h103.859376c4.871093 0 9.441406-2.363281 12.25-6.34375 2.8125-3.976562 3.515624-9.070312 1.890624-13.664062-1.714843-4.839844-2.582031-9.910157-2.582031-15.074219 0-24.949219 20.296875-45.25 45.25-45.25 24.949219 0 45.25 20.300781 45.25 45.25 0 5.160156-.871093 10.234375-2.585937 15.078125-1.625 4.59375-.917969 9.6875 1.894531 13.664063 2.8125 3.976562 7.378906 6.339843 12.246094 6.339843h103.863281c13.878906 0 25.164062 11.289063 25.164062 25.167969v103.859375c0 4.867187 2.363282 9.433594 6.339844 12.246094 3.976563 2.8125 9.070313 3.515625 13.660156 1.894531 4.851563-1.714844 9.929688-2.582031 15.085938-2.582031 24.949219 0 45.25 20.296875 45.25 45.25 0 24.949219-20.300781 45.25-45.25 45.25zm0 0"/></svg>

                                                    </div>
                                                    <div class="col-12 col-md-12 crs_ftcol text-center brtmj bold">
                                                        <h6 class="font15 txt_gray bold mb-1">سطح دوره</h6>
                                                        <span class="txt_gray font12">{{$course->level}}</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 m-autoz">
                                                <div class="row mtqg_row justify-content-center">
                                                    <div class="col-12 col-md-6 text-center crs_ftcol mb-3">
                                                        <svg class="qg_ico" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 407.51 407.51" style="enable-background:new 0 0 407.51 407.51;" xml:space="preserve">
													<g>
                                                        <g>
                                                            <g>
                                                                <path d="M260.18,252.343l-99.788-58.514c-3-2.022-6.926-2.022-9.927,0c-2.95,1.941-4.565,5.371-4.18,8.882v117.029
																	c-0.385,3.51,1.229,6.941,4.18,8.882l4.702,1.567c1.863,0.038,3.691-0.51,5.224-1.567l99.788-58.514
																	c4.905-2.448,6.897-8.41,4.448-13.315C263.667,254.865,262.105,253.304,260.18,252.343z M167.184,301.453v-80.457l68.441,40.229
																	L167.184,301.453z"></path>
                                                                <path d="M360.49,112.327H47.02c-25.969,0-47.02,21.052-47.02,47.02v198.531c0,25.969,21.052,47.02,47.02,47.02H360.49
																	c25.969,0,47.02-21.052,47.02-47.02V159.347C407.51,133.378,386.458,112.327,360.49,112.327z M386.612,357.878
																	c0,14.427-11.695,26.122-26.122,26.122H47.02c-14.427,0-26.122-11.695-26.122-26.122V159.347
																	c0-14.427,11.695-26.122,26.122-26.122H360.49c14.427,0,26.122,11.695,26.122,26.122V357.878z"></path>
                                                                <path d="M53.812,80.98H354.22c5.771,0,10.449-4.678,10.449-10.449s-4.678-10.449-10.449-10.449H53.812
																	c-5.771,0-10.449,4.678-10.449,10.449S48.041,80.98,53.812,80.98z"></path>
                                                                <path d="M98.22,23.51H309.29c5.771,0,10.449-4.678,10.449-10.449S315.061,2.612,309.29,2.612H98.22
																	c-5.771,0-10.449,4.678-10.449,10.449S92.45,23.51,98.22,23.51z"></path>
                                                            </g>
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
                                                    </div>
                                                    <div class="col-12 col-md-12 crs_ftcol text-center brtmj bold">
                                                        <h6 class="font15 txt_gray bold mb-1">تعداد ویدیو ها</h6>
                                                        <span class="txt_gray font12">{{$course->video_num}}</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 prd_dttxtcont pt-4">
                                <div class="row prd_dttxtrow ">
                                    <div class="col-md-12 cart_rate_col">
                                        <div class="row cart_rate_row ">
                                            <div class="col-12 col-md-12 crss_ftcol ">
                                                <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                                    <li class=" list-inline-item tch_dtulli pl-3">
                                                        @foreach($course->course_categories as $category)
                                                        <span class="txt_dgray font14">دسته : <a href="#" class="txt_grdrk">{{$category->name}}</a></span><br>
                                                            @endforeach
                                                    </li>
                                                    <li class=" list-inline-item tch_dtulli pl-3">
                                                        <span class="fa fa-star st_co font12 txt_org"></span>
                                                        <span class="fa_nu txt_dgray">{{$score}}</span>
                                                        <span class="pr-3 txt_gray"><span class="fa_nu">10</span>نفر</span></span>
                                                    </li>
                                                    <li class=" list-inline-item tch_dtulli pl-3">
                                                        <span class="txt_dgray font14">تاریخ انتشار : <span class="txt_gray ">{{Verta::instance($course->created_at)->format('j/n/Y ')}}</span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row product_rwrow pt-2">
                                            <div class="col-12 col-md-12 product_rwcol">
                                                <p >{!!$course->desc!!} </p>
                                            </div>
                                        </div>

                                        <div class="row pricebill_row">
                                            <div class="col-12 col-md-7  prpr_dt_col m-autoz">
                                                <h6 class="txt_black text-right"><span class="fa_nu bold font32"> {{number_format($course->off_price)}}</span> تومان </h6>
                                            </div>
                                            @if($i!=0)

                                            @else
                                                <div class=" col-6 col-md-5 reserve_but m-autoz">
                                                    <form method="post" action="{{route('account.store')}}">
                                                        @csrf
                                                        <input type="hidden" name="code" value="{{$course->id}}">
                                                        <input type="hidden" name="category" value="دوره آموزشی">
                                                        <button  class="btn btn-raised btn_cusblgray btn-md btn_full w-100 font14">خرید و دانلود آموزش</button>
                                                    </form>
                                                </div>
                                                @endif

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row prdt_rate_tabs_row  m-0 mb-4 pt-3">
            <div class="col-12 col-md-12 tab_navcol ">
                <ul class="nav nav-tabs nav_cus pr-0">
                    <li class="nav-item navtab_st">
                        <a class="a_style4 nav-link prd_dtlink active"  data-toggle="tab" href="#details"> توضیحات و مفاهیم دوره</a>
                    </li>
                    <li class="nav-item navtab_st">
                        <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#product_rw"> فایل های دوره</a>
                    </li>
                    <li class="nav-item navtab_st" >
                        <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#wash_care"> درباره استاد</a>
                    </li>
                    <li class="nav-item navtab_st" >
                        <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#users_rtcm"> دیدگاه کاربران</a>
                    </li>
                    <li class="nav-item navtab_st" >
                        <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#faq"> سوالات متداول</a>
                    </li>

                </ul>
            </div>
            <div class="col-12 col-md-12 tab_cntcol ">
                <div class="tab-content tab_content_cus p-5">
                    <div id="details" class="tab-pane active container-fluid tab_cusprdft ">
                        <div class="row crs_dtxtmrow pt-3 ">
                            <div class="col-md-12">
                                <div class="row m-0">
                                    <div class="col-12 col-md-6 crs_dtxtmcol">
                                        <div class="row crs_dtxtrow m-0">
                                            <div class="col-12 col-md-12 title_row2 pb-4 pr-0">
                                                <h4 class="txt_dgray bold">درباره دوره آموزشی</h4>
                                            </div>
                                            <div class="col-md-12 crs_dtxtcol pr-0">
                                                <p class="txt_dgraygray text-justify">
                                                    <span>{!!$course->desc!!}</span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="row crscnt_dtsecrow m-0">
                                            <div class="col-12 col-md-12 title_row2 pb-4">
                                                <h4 class="txt_dgray bold">سرفصل ها و مفاهیم دوره</h4>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12 crscnt_dtsecrowcol mb-2">
                                                        <div class="row cnts_mrow">
                                                            <div class="col-md-12 cntxt_mcol">
                                                                <div class="row cntxt_mrow">
                                                                    <div class="col-md-12 info_title cursp txt_dgray collp_head2">
                                                                        <h6 class="txt_dgray mb-0 bold" data-toggle="collapse" data-target="#how_to_buy"> <i class="fas fa-plus fa-fw txt_org font12"></i>  عنوان سرفصل در این مکان قرار می گیرد</h6>
                                                                    </div>
                                                                    <div class="col-md-12 collapse collp_cnts" id="how_to_buy" >
                                                                        <ul class="txt_gray cnt_ul list-unstyled pr-0">
                                                                            @foreach($files as $file)
                                                                            <li class="cnt_li">
                                                                                <div class="row cnt_limrow">
                                                                                    <div class="col-md-6 cnt_limcol">
                                                                                        <a href="#"><span class="txt_gray font15"><span class="txt_gray pr-4"> {{$file->title}}</span></span></a>
                                                                                    </div>
                                                                                    <div class="col-md-6 cnt_limcol text-left">
                                                                                        <span class="txt_gray font14"> {{$file->course_time}} <i class="far fa-clock pr-2 font14"></i></span>
                                                                                        <span><i class="fa fa-download pr-3"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
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
                    <div id="product_rw" class="tab-pane container-fluid tab_cusprdft ">
                        <div class="row product_rwrow">
                            <div class="col-12 col-md-6">
                                <div class="row crscnt_dtsecrow m-0">
                                    <div class="col-12 col-md-12 title_row2 pb-4">
                                        <h4 class="txt_dgray bold">برای دانلود فایل های دوره آموزش را خریداری کنید</h4>
                                    </div>
                                    <div class="col-md-12 dlfile_mcol mb-2">
                                        <div class="row dlfile_mrow">
                                            <div class="col-md-12 dlfile_ulcol">
                                                <ul class="txt_gray dlfile_ul list-unstyled pr-0">
                                                    @foreach($files as $file)
                                                    <li class="cnt_li">
                                                        <div class="row cnt_limrow">
                                                            <div class="col-md-6 cnt_limcol">
                                                                @if($i!=0)
                                                                    <a href="{{url('download',$file->file)}}"><span class="txt_gray font15"><i class="li_ico fa fa-lock"></i><span class="txt_gray pr-4">{{$file->title}}</span></span></a>
                                                                @else
                                                                    <a href="#"><span class="txt_gray font15"><i class="li_ico fa fa-lock"></i><span class="txt_gray pr-4">{{$file->title}}</span></span></a>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6 cnt_limcol text-left">
                                                                <span><i class="fa fa-download pr-3"></i></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                        @endforeach
                                                </ul>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 img_flsmcol m-auto">
                                <div class="row img_flsrow justify-content-center">
                                    <div class="col-md-4 img_flscol">
                                        <svg class="img_fls" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g fill="#e2dee8"><path d="m144 136h-104v-40h80z"/><path d="m484 136h-340l-24-40h-92a12 12 0 0 0 -12 12v328a12 12 0 0 0 12 12h456a12 12 0 0 0 12-12v-288a12 12 0 0 0 -12-12zm-140 216h-176a48 48 0 0 1 0-96 24 24 0 0 1 34.56-21.55 72 72 0 0 1 131.85 22.51 48 48 0 1 1 9.59 95.04zm120 64h-48v-24h48z"/></g><g fill="#3c2666"><path d="m484 128h-4v-64a8 8 0 0 0 -8-8h-432a8 8 0 0 0 -8 8v24h-4a20.02 20.02 0 0 0 -20 20v328a20.02 20.02 0 0 0 20 20h456a20.02 20.02 0 0 0 20-20v-288a20.02 20.02 0 0 0 -20-20zm-436-56h416v56h-315.47l-21.67-36.12a8 8 0 0 0 -6.86-3.88h-72zm440 364a4 4 0 0 1 -4 4h-456a4 4 0 0 1 -4-4v-328a4 4 0 0 1 4-4h87.47l21.67 36.12a8 8 0 0 0 6.86 3.88h340a4 4 0 0 1 4 4z"/><path d="m464 384h-48a8 8 0 0 0 -8 8v24a8 8 0 0 0 8 8h48a8 8 0 0 0 8-8v-24a8 8 0 0 0 -8-8zm-8 24h-32v-8h32z"/><path d="m392 384h-72a8 8 0 0 0 0 16h72a8 8 0 0 0 0-16z"/><path d="m392 408h-40a8 8 0 0 0 0 16h40a8 8 0 0 0 0-16z"/><path d="m344 248c-1.21 0-2.43.04-3.64.12a80.425 80.425 0 0 0 -76.36-56.12 79.453 79.453 0 0 0 -64.64 32.85 31.655 31.655 0 0 0 -7.36-.85 32.063 32.063 0 0 0 -31.1 24.45 56 56 0 0 0 7.1 111.55h176a56 56 0 0 0 0-112zm0 96h-176a40 40 0 0 1 0-80 8 8 0 0 0 8-8 16.021 16.021 0 0 1 16-16 15.847 15.847 0 0 1 7.04 1.63 8 8 0 0 0 10.35-3 63.607 63.607 0 0 1 54.61-30.63 64.276 64.276 0 0 1 62.59 50.62 7.993 7.993 0 0 0 9.41 6.18 40 40 0 1 1 8 79.2z"/><path d="m282.343 282.343-18.343 18.343v-60.686a8 8 0 0 0 -16 0v60.686l-18.343-18.343a8 8 0 0 0 -11.314 11.314l32 32a8 8 0 0 0 11.314 0l32-32a8 8 0 0 0 -11.314-11.314z"/></g></g></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="wash_care" class="tab-pane  container-fluid tab_cusprdft ">
                        <div class="row commentpr_row  p-3">
                            <div class="col-12 col-md-12 wash_caremcol">
                                <div class="row wash_caremrow">
                                    <div class="col-md-2 artcl_wrtmcol">
                                        <div class="row artcl_wrtmrow justify-content-center">
                                            <div class="col-md-8 tch_authimgcol text-center mb-3">
                                                <img src="{{asset("site/img/avtfm1.png")}}" class="tch_authimg">
                                            </div>
                                            <div class="col-md-12 artcl_wrtnmcol text-center">
                                                <h6 class="font15 txt_gray bold mb-1">{{$course->teacher->name}}</h6>
                                                @foreach($course->teacher->course_categories as $category)
                                                    <span class="txt_gray font12">{{$category->name}}</span><br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10 abt_tchmcol ">
                                        <div class="row abt_tchrow">
                                            <div class="col-md-12 abt_tchcol txt_gray font12">
                                             {!! $course->teacher->desc !!}
                                              </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="faq" class="tab-pane  container-fluid tab_cusprdft ">
                        <div class="row commentpr_row  p-3">
                            <div class="col-11 col-md-12 faq_clp_mcol ">
                                <div class="row faq_secrow ">
                                    <div class="col-md-12 faq_seccrscol">
                                        @foreach($questions as $question)
                                        <div class="row guide_row back_gray mb-3">
                                            <div class="col-md-12 info_title_faq cursp txt_dgray collp_head2">
                                                <h6 class="txt_dgray bold mb-0" data-toggle="collapse" data-target="#faq1"> <i class="fas fa-minus fa-fw txt_org font12"></i>{{$question->question}}</h6>
                                            </div>

                                            <div class="col-md-12 collapse collp_count pb-4 show" id="faq1" >
                                                <ul class="txt_gray pr-2_5">
                                                    <li>
                                                        {{$question->answer}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="users_rtcm" class="tab-pane  container-fluid tab_cusprdft ">
                        <form method="post" action="{{url('comment')}}">
                            @csrf
                            <input type="hidden" name="course" value="{{$course->id}}">
                        <div class="row strate_mrow  p-3">
                            <div class="col-12 col-md-6 title_row2">
                                <div class="row user_rating_row m-0">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6 col-md-12 ">
                                                <h4 class="txt_dgray bold">میزان رضایت شما </h4>
                                            </div>

                                            <div class="col-12 col-md-2 TellChat_col star_user_rated_txt_col">

                                            </div>
                                            <div class="col-6 col-md-9 star-rating pr-0">
                                                <span class="far fa-star font24 " data-rating="1"></span>
                                                <span class="far fa-star font24" data-rating="2"></span>
                                                <span class="far fa-star font24" data-rating="3"></span>
                                                <span class="far fa-star font24" data-rating="4"></span>
                                                <span class="far fa-star font24" data-rating="5"></span>
                                                <input type="hidden" name="whatever1" class="rating-value" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 pt-2">
                                        <div class="row ">
                                            <div class="col-12 col-md-6 star_user_rated_col">
                                                <div class="row star_user_rated_row">
                                                    <div class="col-12 col-md-12 star_user_rated_txt_col">
                                                        <span class="text-center txt_dgray sp_d font16"><img src="site/img/user_ico.png" class="srch_img"> 6 نفر</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 rate_barcont">
                                <div class="row rate_barrow">
                                    <div class="col-2 col-md-1 star_lab_col">
                                        <span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray pb-3"></i> 1 </span>
                                        <span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray  pb-3"></i> 2 </span>
                                        <span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray pb-3"></i> 3 </span>
                                        <span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray pb-3"></i> 4 </span>
                                        <span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray pb-3"></i> 5 </span>
                                    </div>
                                    <div class="col-10 col-md-8 star_prbar_col ">
                                        <div class="progress prg_st">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="10" style="width: 10%;font-family: yekan;"  aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress prg_st ">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;font-family: yekan;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress prg_st ">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;font-family: yekan;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress prg_st ">
                                            <div class="progress-bar" role="progressbar" style="width: 75%; font-family: yekan;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress prg_st">
                                            <div class="progress-bar" role="progressbar" style="width: 100%; font-family: yekan;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row commentpr_row mt-4  p-3">
                            <div class="col-12 col-md-6 prdt_col">

                                <div class="row user_rating_row m-0">
                                    <div class="col-12 col-md-12 title_row2 pb-4">
                                        <h4 class="txt_dgray bold">نظر خود را بیان کنید</h4>
                                    </div>
                                    <div class="col-md-12 scm_ico p-0">
                                        <div class="row sc_row">

                                                <div class="form-group col-12 col-md-12 ">
                                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-envelope txt_srmp"></i>
															  </span>
                                                        <input name="email" class="form-control srch_cus3 txt_dgray mr-0" type="email" placeholder="ایمیل">

                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-md-12 ">
                                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-user txt_srmp"></i>
															  </span>
                                                        <input name="name" class="form-control srch_cus3  txt_dgray mr-0" type="text" placeholder="نام و نام خانوادگی">

                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-md-12 mg">
                                                    <textarea name="desc" class="form-control cus_txtarea" placeholder="پیام" id="exampleFormControlTextarea1" rows="5"></textarea>

                                                </div>
                                                <div class="col-md-5 offset-md-7 mg">
                                                    <div>
                                                        <button type="submit" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100">ارسال</button>
                                                     </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 col-md-6 prdt_col prdt_cmm_col">
                                <div class="row userscomm_row m-0">
                                    <div class="col-12 col-md-12  title_row2 pb-5 ">
                                        <h4 class="txt_dgray bold">نظرات کاربران</h4>
                                    </div>
                                    @foreach($comments as $comment)
                                    <div class="col-12 col-md-12 users_cmm_col mCustomScrollbar"
                                         data-mcs-theme="minimal-dark">
                                        <div class="row">
                                            <div class="col-12 col-md-12">
                                                <h6 class="blackgray">{{$comment->name}} </h6>
                                            </div>

                                            <div class="col-12 col-md-12">
                                         {{$comment->desc}}
                                          </div>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>
        <div class="sims_prdctsssec row  p-5">
            <div class="col-md-3 simdprdcts_hdlbcol p-0">
                <h2 class="text-center bbj txt_white ln4 simmd_tit">دوره های مشابه</h2>
            </div>
            <div class="col-md-12 columns splofs_slcont simsl_col">
                <div class="owl-carousel splofs_slcrls owl-theme">
                    @foreach($courses as $similar)
                    <div class="product_pr_col item">
                        <div class="row prd_pr_row  ">
                            <div class="col-12 col-md-12 prd_pr_img_col pb-2 text-center">
                                <a href="{{route('sitecourse.show',$similar->id)}}" class="txt_dgray">
                                    <img class="prd_pr_img" src="{{asset("images/".$similar->image)}}">
                                </a>
                            </div>
                            <div class="col-12 col-md-12 prd_pr_dt_col ">
                                <div class="row prpr_dts_row">
                                    <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                        <h6 class="font14 txt_dgray bold">{{$similar->title}}</h6>
                                    </div>
                                    <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                        <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                            <li class=" list-inline-item tch_dtulli">
                                                <img src="{{asset('site/img/avtfm1.png')}}" class="post_itmsldateimg">
                                            </li>
                                            <li class=" list-inline-item tch_dtulli">
                                                <span class="txt_gray font14">{{$similar->teacher->name}}</span>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-12 col-md-12 prpr_dt_col feature_dt_col text-left pb-2">
                                        <h6 class="font14 txt_dgray bold"> {{number_format($course->off_price)}} تومان</h6>
                                        <span class="txt_gray font14"> مدت دوره: {{$course->course_time}}:00 <i class="far fa-clock pr-2 font14"></i></span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        </div>
    </section>

@endsection

