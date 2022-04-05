@extends('layouts.site')


@section('more_style')


@endsection

@section('content')
    <section class="container-fluid etslist_cont back_white">
        <div class="row etslist_row m-0 pt-5">
            <div class="col-md-3 filters_col pb-5 ">
                <div  class="row filterboxes_row m-0 back_gray">

                    <form method="get" action="{{url('product_filter')}}">

                        {{--<div class="col-md-12 catfilters_box m_shadow pt-4">
                   <div class="row titleflt_row pb-3" data-toggle="collapse" data-target="#filterbox1">
                       <a  class="cursp w-100">
                           <div class="col-md-12 titlenews_col" >
                               <h6 class="d-inline-block txt_srmp font18 bold mb-0">دسته بندی نتایج</h6>
                               <i class="fa fa-minus d-inline-block pt-2 float-left txt_org"></i>

                           </div></a>
                   </div>
                   <div class="row catfilters_boxrow collapse pt-3 show" id="filterbox1">
                       <div class="col-md-12 catfilter_box_col  mCustomScrollbar" data-mcs-theme="minimal-dark">
                           <div class="row filter_row  pt-3">
                               <div class="col-md-12 flcat_list_col">
                                   <ul id="listpr" class="list-unstyled pr-3">
                                       @foreach($categories as $category)
                                       <li class="fl_li pb-3"><a class="fl_item font15 txt_dgray" data-toggle="collapse" href="#lspr1">دسته<i class="fas fa-angle-down d-inline-block pt-2 font10 pr-3"></i></a>
                                           <ul id="lspr1" class="list-unstyled collapse show pr-2 pt-2"
                                               data-parent="#listpr">
                                               <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                               <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                               <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>

                                           </ul>
                                       </li>

                                       <li class="fl_li pb-3"><a class="fl_item font15 txt_dgray" data-toggle="collapse" href="#lspr2">دسته<i class="fas fa-angle-down d-inline-block pt-2 font10 pr-3"></i></a>
                                           <ul id="lspr2" class="list-unstyled collapse pr-2 pt-2"
                                               data-parent="#listpr">
                                               <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                               <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته  </a></li>
                                               <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>

                                           </ul>
                                       </li>
                                       <li class="fl_li pb-3"><a class="fl_item font15 txt_dgray" data-toggle="collapse" href="#lspr3">دسته<i class="fas fa-angle-down d-inline-block pt-2 font10 pr-3"></i></a>
                                           <ul id="lspr3" class="list-unstyled collapse pr-2 pt-2"
                                               data-parent="#listpr">
                                               <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                               <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته </a></li>
                                               <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>

                                           </ul>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>--}}
                        <div class="col-md-12 srfilter_box m_shadow mt-3">
                            <div class="row titleflt_row pb-3"  data-toggle="collapse" data-target="#filterbox2">
                                <div class="col-md-12 titlenews_col">
                                    <h6 class="d-inline-block txt_srmp font18 bold mb-0">جستجو در نتایج</h6>
                                    <i class="fa fa-minus d-inline-block pt-2 float-left txt_org"></i>
                                </div>
                            </div>

                            <div class="row catfilters_boxrow collapse pt-3 show" id="filterbox2">
                                <div class="col-md-12 srfilter_box_col ">
                                    <div class="input-group">
                                        <div class="input-group-prepend back_litegray p-1 pr-2 pl-2">
                                            <span class="input-group-text " id="basic-addon1"><i class="fas fa-search txt_org"></i></span>
                                        </div>
                                        <input type="text" class="form-control back_litegray font13" name="title" placeholder="نام کالای مورد نظر خود را وارد کنید.." aria-label="search" aria-describedby="basic-addon1">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 srfilter_box m_shadow mt-3">

                            <div class="row titleflt_row pb-3"  data-toggle="collapse" data-target="#filterbox3">
                                <div class="col-md-12 titlenews_col">
                                    <h6 class="d-inline-block txt_srmp font18 bold mb-0">گروه سنی</h6>
                                    <i class="fa fa-minus d-inline-block pt-2 float-left txt_org"></i>
                                </div>
                            </div>

                            <div class="row catfilters_boxrow collapse pt-3 show" id="filterbox3">

                                <div class="col-md-12 flcl_mcol">
                                    <ul class="fl_chbox_ul list-unstyled pr-1 pb-3 filt_ul2 mCustomScrollbar" data-mcs-theme="minimal-dark">
                                        <li class=" flit_li">
                                            <div class=" form-check custom-controls-stacked  pr-2_5">
                                                <label class="form-check-label custom-control material-checkbox">
                                                    <input class="form-check-input material-control-input" name="level[]" type="checkbox" value="کودک">
                                                    <span class="material-control-description">کودک</span>
                                                    <span class="material-control-indicator"></span>

                                                </label>
                                            </div>
                                        </li>
                                        <li class=" flit_li">
                                            <div class=" form-check custom-controls-stacked  pr-2_5">
                                                <label class="form-check-label custom-control material-checkbox">
                                                    <input class="form-check-input material-control-input" name="level[]" type="checkbox" value="نوجوان">
                                                    <span class="material-control-description">نوجوان</span>
                                                    <span class="material-control-indicator"></span>

                                                </label>
                                            </div>
                                        </li>
                                        <li class=" flit_li">
                                            <div class=" form-check custom-controls-stacked  pr-2_5">
                                                <label class="form-check-label custom-control material-checkbox">
                                                    <input class="form-check-input material-control-input" name="level[]" type="checkbox" value="بزرگسال">
                                                    <span class="material-control-description">بزرگسال</span>
                                                    <span class="material-control-indicator"></span>

                                                </label>
                                            </div>
                                        </li>



                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 srfilter_box m_shadow mt-3">

                            <div class="row titleflt_row pb-3"  data-toggle="collapse" data-target="#filterbox5">
                                <div class="col-md-12 titlenews_col">
                                    <h6 class="d-inline-block txt_srmp font18 bold mb-0">زبان</h6>
                                    <i class="fa fa-minus d-inline-block pt-2 float-left txt_org"></i>
                                </div>
                            </div>

                            <div class="row catfilters_boxrow collapse pt-3 show" id="filterbox5">
                                <div class="col-md-12 flcl_mcol">
                                    <ul class="fl_chbox_ul list-unstyled pr-1 pb-3 filt_ul2 mCustomScrollbar" data-mcs-theme="minimal-dark">
                                        <li class=" flit_li ">
                                            <div class=" form-check custom-controls-stacked  pr-2_5">
                                                <label class="form-check-label custom-control material-checkbox">
                                                    <input class="form-check-input material-control-input" name="language[]" type="checkbox" value="دوزبانه">
                                                    <span class="material-control-description">دوزبانه</span>
                                                    <span class="material-control-indicator"></span>

                                                </label>
                                            </div>
                                        </li>
                                        <li class=" flit_li ">
                                            <div class=" form-check custom-controls-stacked  pr-2_5">
                                                <label class="form-check-label custom-control material-checkbox">
                                                    <input class="form-check-input material-control-input" name="language[]" type="checkbox" value="فارسی">
                                                    <span class="material-control-description">فارسی</span>
                                                    <span class="material-control-indicator"></span>

                                                </label>
                                            </div>
                                        </li>
                                        <li class=" flit_li">
                                            <div class=" form-check custom-controls-stacked  pr-2_5">
                                                <label class="form-check-label custom-control material-checkbox">
                                                    <input class="form-check-input material-control-input" name="language[]" type="checkbox" value="غیرفارسی">
                                                    <span class="material-control-description">غیر فارسی</span>
                                                    <span class="material-control-indicator"></span>

                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 srfilter_box m_shadow mt-3">
                            <div class="row titleflt_row pb-3"  data-toggle="collapse" data-target="#filterbox6">
                                <div class="col-md-12 titlenews_col">
                                    <h6 class="d-inline-block txt_srmp font18 bold mb-0">قیمت</h6>
                                    <i class="fa fa-minus d-inline-block pt-2 float-left txt_org"></i>
                                </div>
                            </div>

                            <div class="row catfilters_boxrow collapse  show" id="filterbox6">
                                <div class="col-md-12 flpr_mcol">
                                    <div class="price-range-block">

                                        <div id="slider-range" class="price-filter-range" name="rangeInput"></div>

                                        <div style="margin:30px auto" class="col-md-12 prinputs_col">
                                            <div class="row prinputs_row">
                                                <div class="col-md-3 prinputfr_col mb-2 p-1 text-center">
                                                    <span class="font17">از</span>
                                                </div>
                                                <div class="col-md-9 prinput_col mb-2 ">
                                                    <div class="input-group ">

                                                        <input type="text" min="0" max="1420000" oninput="validity.valid||(value='8000');" id="max_price" name="max_price" class="price-range-field form-control" />
                                                        <div class="input-group-addon cus_addon">
                                                            <span class="input-group-text">تومان</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 prinputfr_col mb-2 p-1 text-center">
                                                    <span class="font17">تا</span>
                                                </div>
                                                <div class="col-md-9 prinput_col mb-2">
                                                    <div class="input-group ">
                                                        <input type="text" min="0" max="1450000" oninput="validity.valid||(value='2000');" id="min_price" name="min_price" class="price-range-field form-control" />
                                                        <div class="input-group-addon cus_addon">
                                                            <span class="input-group-text">تومان</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row but_row">
                                                <div class="col-md-12 mt-3">
                                                    <div>
                                                        <button type="submit"  class="btn btn-raised btn_cusblgray btn-sm btn_full w-100">اعمال فیلتر</button>
                                                    </div>
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
            <div class="col-md-9 ets_listcol mb-5">
                <div class="row breadcrumb_row">
                    <nav aria-label="breadcrumb">
                        @if(isset($category))
                        <ol class="breadcrumb brdc_cus font14">
                            <li class="breadcrumb-item"><a href="{{url('/')}}" class="txt_gray">خانه</a></li>
                            <li class="breadcrumb-item active txt_black" aria-current="page">{{$category->name}}</li>
                        </ol>
                            @endif
                    </nav>
                </div>
                <div class="row  result_side_filter p-2 mb-3 back_white m-0">

                    <div class="col-12 col-md-3">
                        <h6 class="filters-title_hr txt_srmp font18 bold mt-2"> مرتب سازی براساس : </h6>
                    </div>
                    <div class="col-12 col-md-3 pr_name_col">
                        <div class="form-group ">
                            <select class="selectpicker form-control " name="filter_range" id="range"
                                    data-style="btn btn-default dropdown-toggle btn_cuswhite btn-md
													w-100 cursp txt_black filt_but">
                                <option class="disabled selected">همه</option>
                                <option class="" >پربازدیدترین</option>
                                <option class="" >پرفروش ترین</option>
                                <option class="" >محبوب ترین</option>
                                <option class="" >جدیدترین</option>

                            </select>
                        </div>
                    </div>

                </div>
                <div class="row search_rs_mrow back_white m-0 p-3">
                    <div class="col-md-12 search_rs_cont">
                        <div class="row search_rs_row ">
                            @if(isset($category))
                            @foreach($category->product_sub_categories as $sub_category)
                            @foreach($sub_category->products as $product)
                            <div class="col-md-3 prd_itemcont mb-4">
                                <a href="{{url('site_product_det', $product->id)}}">
                                       <div class="row prd_itemcontrow">
                                        <div class="col-md-12 prd_itemcontimg_col text-center">
                                            <img class="splof_pr_img "
                                                 src='{{asset("images/".$product->image)}}' id="image">
                                            @if($product->off!=0)
                                            <span class="txt_org fa_nu text-center sploff_tag font18">{{$product->off}}%</span>
                                                @endif
                                        </div>
                                        <div class="col-md-12 et_itemtxt_col text-right m-auto p-0">
                                            <a href="{{url('site_product_det', $product->id)}}"><h6 class="txt_black font14 bold">{{$product->name}}</h6></a>
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

                                    </div></a>
                            </div>
                                @endforeach
                                @endforeach
                                @else
                                @foreach($products as $product)

                                    <div class="col-md-3 prd_itemcont mb-4">
                                        <a href="{{url('site_product_det', $product->id)}}">
                                            <div class="row prd_itemcontrow">
                                                <div class="col-md-12 prd_itemcontimg_col text-center">
                                                    <img class="splof_pr_img "
                                                         src='{{asset("images/".$product->image)}}' id="image">
                                                    @if($product->off!=0)
                                                        <span class="txt_org fa_nu text-center sploff_tag font18">{{$product->off}}%</span>
                                                    @endif
                                                </div>
                                                <div class="col-md-12 et_itemtxt_col text-right m-auto p-0">
                                                    <a href="{{url('site_product_det', $product->id)}}"><h6 class="txt_black font14 bold">{{$product->name}}</h6></a>
                                                </div>
                                                @if($product->off!=0)
                                                    <div class="col-12 col-md-12 splpr_prc_col text-right fa_nu txt_gray font14 p-0">
                                                        <del>{{$product->price}}</del>
                                                    </div>
                                                    <div class="col-md-12 et_itemtxt_col pt-1 pb-1 txt_dgray text-right m-auto p-0">

                                                        <span class="txt_black bold fa_nu font18 ">{{$product->off_price}}</span>

                                                    </div>
                                                @else
                                                    <div class="col-md-12 et_itemtxt_col pt-1 pb-1 txt_dgray text-right m-auto p-0">

                                                        <span class="txt_black bold fa_nu font18 ">{{$product->price}}</span>

                                                    </div>
                                                @endif

                                            </div></a>
                                    </div>
                                @endforeach
                            @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection

