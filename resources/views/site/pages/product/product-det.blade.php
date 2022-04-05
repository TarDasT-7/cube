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
    <section class="main_sec container-fluid main-content ">
        <div class="row breadcrumb_row m-0">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb brdc_cus font12">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" class="txt_gray">خانه</a></li>
                    <li class="breadcrumb-item "><a href="{{url('site_product_category',$product->product_sub_category->product_category->id)}}" class="txt_gray">{{$product->product_sub_category->product_category->name}}</a></li>
                    <li class="breadcrumb-item "><a href="{{url('site_product_sub_category',$product->product_sub_category->id)}}" class="txt_dgray"> {{$product->product_sub_category->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{$product->name}}
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row prd_dtmainrow back_white m-0 mb-4 justify-content-center">
            <div class="col-md-12 prd_dtmaincol">
                <div class="row prdt_galtxtrow">
                    <div class="col-md-5 prdt_gal_mcol pt-4">
                        <div class="row prdt_gal_mrow m-0">
                            <div class="col-md-12 prdtgal_col">
                                <div class="row prdtgal_row">
                                    <div class="col-md-12 vidbk_mcol p-0">
                                            <video id="my-player" class="video-js vjs-theme-fantasy vjs-big-play-centered" poster='{{asset("images/".$product->image)}}' style="object-fit:cover;" controls >
                                                <source src='{{asset("files/".$video->file)}}'>
                                            </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 prddt_billtxt_cont ">
                        <div class="row sr_prvbid_row  ">
                            <div class="col-md-8 prd_dttxtcont ">
                                <div class="row prd_dttxtrow ">
                                    <div class="col-md-12 pr_name pt-4 ">
                                        <h6 class="sp_d2 bold  "> {{$product->name}}
                                        </h6>
                                    </div>


                                    <div class="col-md-12 cart_rate_col">
                                        <div class="row cart_rate_row ">
                                            <div class="col-md-12 et_rateall_col">
                                                <label for="checkbox2 star_l  d-inline-flex">
                                                    <span class="fa fa-star st_co font12 txt_org"></span>
                                                </label>
                                                <span class="fa_nu txt_dgray">{{$score}}</span>
                                                <span class="pr-3 txt_gray"><span class="fa_nu">10</span>نفر</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12 prdt_txt_cont pt-2">
                                        <div class="row prpr_dts_row ">

                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col  font14 ">دسته بندی : <a href="prdlists_page.html" class="txt_gray">{{$product->product_sub_category->product_category->name}}</a>
                                            </div>
                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col  font14 ">زیر دسته : <a href="prdlists_page.html" class="txt_gray">{{$product->product_sub_category->name}}</a>
                                            </div>

                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col  font14">کد کالا : <span class="txt_gray fa_nu"> {{$product->good_id}} </span>
                                            </div>
                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col  font14">تاریخ انتشار : <span class="txt_gray fa_nu"> {{Verta::instance($product->created_at)->formatJalaliDate()}} </span>
                                            </div>
                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col  font14">مدرس : <span class="txt_gray">{{$product->product_teacher->name}} </span>
                                            </div>
                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col  font14"> فرمت  : <span class=" txt_gray"> mp4 / mkv </span></div>
                                            <div class="col-12 col-md-12 prpr_dt_col name_dt_col   font14 txt_gray pt-2">
                                                <span class="font14 txt_dgray pb-4 bold">ویژگی های محصول :</span>
                                                <ul class="list-group pt-3 pr-3">
                                                    <li><span class="txt_dgray"></span><span>{{$product->properties}}</span></li>

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 prd_dtbillcont mt-3 back_gray">
                                <div class="row prd_dtbillrow justify-content-end p-3 h-100">
                                    <div class="col-md-11 mtqg_cont mb-5 m-auto">
                                        <div class="row mtqg_row mb-3">
                                            <div class="col-12 col-md-3 text-center prpr_dt_col feature_dt_col pvd_ft">
                                                <svg  class="qg_ico" viewBox="0 0 512 512"  xmlns="http://www.w3.org/2000/svg"><path d="m373.851562 308.296875c-1.445312-4.820313-7.390624-7.074219-13.496093-7.074219-5.945313 0-11.890625 2.253906-13.335938 7.074219l-31.011719 101.0625c-.160156.644531-.320312 1.285156-.320312 1.605469 0 5.144531 7.550781 8.675781 13.175781 8.675781 3.535157 0 6.265625-1.121094 7.070313-4.175781l6.101562-21.371094h36.796875l6.109375 21.371094c.800782 3.054687 3.53125 4.175781 7.066406 4.175781 5.625 0 13.175782-3.691406 13.175782-8.675781 0-.480469-.160156-.964844-.320313-1.605469zm-27.476562 69.40625 13.976562-49.324219 13.984376 49.324219zm0 0"/><path d="m456.835938 208.867188h-153.707032v-65.648438l49.953125-35.679688c3.941407-2.816406 6.28125-7.359374 6.28125-12.203124 0-4.847657-2.339843-9.390626-6.28125-12.207032l-50.554687-36.109375c-3.949219-26.570312-26.914063-47.019531-54.5625-47.019531h-192.796875c-30.421875 0-55.167969 24.746094-55.167969 55.167969v192.800781c0 30.417969 24.746094 55.164062 55.167969 55.164062h153.703125v65.648438l-49.953125 35.679688c-3.941407 2.816406-6.28125 7.363281-6.28125 12.207031s2.339843 9.390625 6.28125 12.203125l50.554687 36.109375c3.949219 26.570312 26.914063 47.019531 54.5625 47.019531h192.800782c30.417968 0 55.164062-24.75 55.164062-55.167969v-192.796875c0-30.421875-24.746094-55.167968-55.164062-55.167968zm-401.667969 64.265624c-13.878907 0-25.167969-11.289062-25.167969-25.167968v-192.800782c0-13.875 11.289062-25.164062 25.167969-25.164062h192.796875c13.875 0 25.164062 11.289062 25.164062 25.164062 0 4.847657 2.339844 9.394532 6.28125 12.207032l39.144532 27.960937-39.144532 27.960938c-3.941406 2.816406-6.28125 7.363281-6.28125 12.207031v73.367188h-9.09375c-30.417968 0-55.164062 24.746093-55.164062 55.164062v9.101562zm426.832031 183.699219c0 13.878907-11.289062 25.167969-25.164062 25.167969h-192.800782c-13.875 0-25.164062-11.289062-25.164062-25.167969 0-4.84375-2.339844-9.390625-6.28125-12.203125l-39.144532-27.960937 39.144532-27.960938c3.941406-2.816406 6.28125-7.363281 6.28125-12.207031v-112.464844c0-13.878906 11.289062-25.167968 25.164062-25.167968h24.054688.039062.039063 168.667969c13.875 0 25.164062 11.289062 25.164062 25.167968zm0 0"/><path d="m197.652344 138.277344c4.667968 0 8.457031-3.789063 8.457031-8.460938s-3.789063-8.460937-8.457031-8.460937h-37.628906v-20.539063c0-4.671875-3.789063-8.460937-8.460938-8.460937-4.667969 0-8.457031 3.789062-8.457031 8.460937v20.539063h-37.628907c-4.667968 0-8.457031 3.789062-8.457031 8.460937s3.789063 8.460938 8.457031 8.460938h11.660157c1.863281 17.863281 9.566406 34.007812 21.152343 46.511718-9.605468 5.75-20.824218 9.070313-32.8125 9.070313-4.667968 0-8.457031 3.785156-8.457031 8.457031s3.789063 8.460938 8.457031 8.460938c17.117188 0 32.996094-5.351563 46.085938-14.453125 13.09375 9.101562 28.972656 14.453125 46.089844 14.453125 4.667968 0 8.457031-3.789063 8.457031-8.460938s-3.789063-8.457031-8.457031-8.457031c-11.988282 0-23.207032-3.3125-32.8125-9.070313 11.585937-12.503906 19.289062-28.648437 21.152344-46.511718zm-46.089844 35.941406c-9.253906-9.605469-15.539062-22.078125-17.378906-35.941406h34.761718c-1.839843 13.863281-8.125 26.335937-17.382812 35.941406zm0 0"/></svg>
                                            </div>
                                            <div class="col-12 col-md-9 prpr_dt_col feature_dt_col bbj txt_srmp h_line50 font16">{{$product->language}}
                                            </div>
                                        </div>
                                        <div class="row mtqg_row mb-3">
                                            <div class="col-12 col-md-3 text-center prpr_dt_col feature_dt_col pvd_ft">
                                                <svg class="qg_ico" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     viewBox="0 0 407.51 407.51" style="enable-background:new 0 0 407.51 407.51;" xml:space="preserve">
<g>
    <g>
        <g>
            <path d="M260.18,252.343l-99.788-58.514c-3-2.022-6.926-2.022-9.927,0c-2.95,1.941-4.565,5.371-4.18,8.882v117.029
				c-0.385,3.51,1.229,6.941,4.18,8.882l4.702,1.567c1.863,0.038,3.691-0.51,5.224-1.567l99.788-58.514
				c4.905-2.448,6.897-8.41,4.448-13.315C263.667,254.865,262.105,253.304,260.18,252.343z M167.184,301.453v-80.457l68.441,40.229
				L167.184,301.453z"/>
            <path d="M360.49,112.327H47.02c-25.969,0-47.02,21.052-47.02,47.02v198.531c0,25.969,21.052,47.02,47.02,47.02H360.49
				c25.969,0,47.02-21.052,47.02-47.02V159.347C407.51,133.378,386.458,112.327,360.49,112.327z M386.612,357.878
				c0,14.427-11.695,26.122-26.122,26.122H47.02c-14.427,0-26.122-11.695-26.122-26.122V159.347
				c0-14.427,11.695-26.122,26.122-26.122H360.49c14.427,0,26.122,11.695,26.122,26.122V357.878z"/>
            <path d="M53.812,80.98H354.22c5.771,0,10.449-4.678,10.449-10.449s-4.678-10.449-10.449-10.449H53.812
				c-5.771,0-10.449,4.678-10.449,10.449S48.041,80.98,53.812,80.98z"/>
            <path d="M98.22,23.51H309.29c5.771,0,10.449-4.678,10.449-10.449S315.061,2.612,309.29,2.612H98.22
				c-5.771,0-10.449,4.678-10.449,10.449S92.45,23.51,98.22,23.51z"/>
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
                                            <div class="col-12 col-md-9 prpr_dt_col feature_dt_col  bbj txt_srmp h_line50 font16">{{$product->video_num}} ویدیو
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12 pricebill_cont p-3 m-auto">
                                        <div class="row pricebill_row">
                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col  ">
                                                @if($product->off!=0)
                                                <h6 class="txt_gray text-center"><span class="fa_nu bold font32"> {{number_format($product->off_price)}} </span> تومان </h6>
                                                @else
                                                <h6 class="txt_gray text-center"><span class="fa_nu bold font32"> {{number_format($product->price)}} </span> تومان </h6>
                                                    @endif

                                            </div>
                                            <div class=" col-6 col-md-12 reserve_but pt-2 pb-2">
                                                <form method="post" action="{{route('account.store')}}">
                                                    @csrf
                                                    <input type="hidden" name="code" value="{{$product->id}}">
                                                    <input type="hidden" name="category" value="محصولات">
                                                    <button  class="btn btn-raised btn_cusblgray btn-md btn_full w-100 font14">اضافه کردن به سبد خرید</button>
                                                </form>
                                            </div>

                                            <div class=" col-6 col-md-12 reserve_but pt-2 pb-2">
                                                <a href="cart_page.html" class="btn btn-raised btn_cus_backstpgray btn-md btn_full w-100 font14">دانلود نسخه نمونه</a>
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
        <div class="row prdt_rate_tabs_row  m-0 mb-4 ">

            <div class="col-12 col-md-12 tab_navcol ">
                <ul class="nav nav-tabs nav_cus pr-0">
                    <li class="nav-item navtab_st">
                        <a class="a_style4 nav-link prd_dtlink active"  data-toggle="tab" href="#details"> مشخصات محصول</a>
                    </li>
                    <li class="nav-item navtab_st">
                        <a class="a_style4 nav-link prd_dtlink "  data-toggle="tab" href="#tblofcnts">فهرست مطالب</a>
                    </li>

                    <li class="nav-item navtab_st">
                        <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#product_rw"> نقد و بررسی محصول</a>
                    </li>
                    <li class="nav-item navtab_st" >
                        <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#users_rtcm"> دیدگاه کاربران</a>
                    </li>

                </ul>
            </div>
            <div class="col-12 col-md-12 tab_cntcol ">
                <div class="tab-content tab_content_cus p-3">
                    <div id="details" class="tab-pane active container-fluid tab_cusprdft ">
                        <div class="row prdttxt_row pt-3 ">
                            <div class="col-12 col-md-12 table-responsive">
                                <table class="table tabe_prdt_table table-striped">
                                    <tbody>
                                    <tr>
                                        <td colspan="8" class="info_title_u_p txt_dgray bold font16">{{$product->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="tdprdt_rght">
                                            <span class="txt_gray bold"> کد کالا : </span>
                                        </td>
                                        <td class=" txt_gray ">
                                            <span class="name_fa  txt_dgray normal"> {{$product->goo_id}} </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdprdt_rght">
                                            <span class="txt_gray bold"> مدرس  : </span>
                                        </td>
                                        <td class=" txt_gray ">
                                            <span class="name_fa  txt_dgray normal"> {{$product->product_teacher->name}}  </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdprdt_rght">
                                            <span class="txt_gray bold">دسته بندی : </span>
                                        </td>
                                        <td class=" txt_gray ">
                                            <span class="name_fa  txt_dgray normal">{{$product->product_sub_category->product_category->name}} </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="tdprdt_rght">
                                            <span class="txt_gray bold">تاریخ انتشار : </span>
                                        </td>
                                        <td class=" txt_gray ">
                                            <span class="name_fa  txt_dgray normal">{{Verta::instance($product->created_at)->formatJalaliDate()}} </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdprdt_rght">
                                            <span class="txt_gray bold">  فرمت : </span>
                                        </td>
                                        <td class=" txt_gray ">
                                            <span class="name_fa  txt_dgray normal">mp4 / mkv</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdprdt_rght">
                                            <span class="txt_gray bold">  زبان : </span>
                                        </td>
                                        <td class=" txt_gray ">
                                            <span class="name_fa  txt_dgray normal"> {{$product->language}} </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tdprdt_rght">
                                            <span class="txt_gray bold">  تعداد ویدیو : </span>
                                        </td>
                                        <td class=" txt_gray ">
                                            <span class="name_fa  txt_dgray normal"> {{$product->video_num}} ویدیو </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div id="tblofcnts" class="tab-pane container-fluid tab_cusprdft ">
                        <div class="row product_rwrow  p-5">
                            <div class="col-12 col-md-12 product_rwcol">
                                <p class="txt_blackgray text-justify">
                               {!! $product->content !!}
                                 </p>
                            </div>
                        </div>

                    </div>
                    <div id="product_rw" class="tab-pane container-fluid tab_cusprdft ">
                        <div class="row product_rwrow  p-5">
                            <div class="col-12 col-md-12 product_rwcol">
                                <p class="txt_blackgray text-justify">
                                    {!! $product->review !!}
                                  </p>
                            </div>
                        </div>

                    </div>


                        <div id="users_rtcm" class="tab-pane  container-fluid tab_cusprdft ">
                            <form method="post" action="{{url('comment')}}">
                                @csrf
                                <input type="hidden" name="product" value="{{$product->id}}">
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
                                </div>
                            </form>
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



        <div class="sims_prdctsssec row  p-5">
            <div class="col-md-3 simdprdcts_hdlbcol p-0">
                <h2 class="text-center bbj txt_white ln4 simmd_tit">محصولات مشابه</h2>
            </div>
            <div class="col-12 col-md-12 columns splofs_slcont simsl_col p-0">
                <div class="owl-carousel owl-theme splofs_slcrls">
                    @foreach($products as $product)
                    <div class="simsprdct_pr_col item">
                        <a href="{{url('site_product_det', $product->id)}}" class="txt_dgray">
                            <div class="row prd_pr_row">
                                <div class="col-12 col-md-12 prd_pr_img_col pb-2 text-center">
                                    <img class="prd_pr_img" src='{{asset("images/".$product->image)}}'>
                                    @if($product->off!=0)
                                        <span class="txt_org fa_nu text-center sploff_tag font18">{{$product->off}}%</span>
                                    @endif
                                </div>
                                <div class="col-12 col-md-12 prd_pr_dt_col ">
                                    <div class="row prpr_dts_row">
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <h6 class="font14 txt_dgray bold">{{$product->name}}</h6>
                                            <span class="txt_gray">vbook</span>
                                        </div>
                                        @if($product->off!=0)
                                            <div class="col-12 col-md-12 splpr_prc_col text-right fa_nu txt_gray font14 p-0">
                                                <del>{{number_format($product->price)}} تومان</del>
                                            </div>
                                            <div class="col-md-12 et_itemtxt_col pt-1 pb-1 txt_dgray text-right m-auto p-0">

                                                <span class="txt_black bold fa_nu font18 ">{{number_format($product->off_price)}} تومان</span>

                                            </div>
                                        @else
                                            <div class="col-md-12 et_itemtxt_col pt-1 pb-1 txt_dgray text-right m-auto p-0">

                                                <span class="txt_black bold fa_nu font18 ">{{number_format($product->price)}} تومان</span>

                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

