@extends('layouts.site')


@section('more_style')


@endsection

@section('content')
    <section class="container-fluid etslist_cont back_white">
        <div class="row etslist_row m-0 pt-5 justify-content-center">

            <div class="col-md-12 ets_listcol mb-5">
                <div class="row blgmntit_row justify-content-center">

                    <div class="col-md-10 blgmntit_col m-auto">
                        <h1 class="bbj srvmn_titl txt_srmp">خدمات تولید محتوا و تبلیغات</h1>
                    </div>
                </div>

                <div class="row search_rs_mrow back_white m-0 p-3">
                    <div class="col-md-12 search_rs_cont">
                        <div class="row nav_filtmrow justify-content-center ">

                            <div class="col-md-12 flts_cont">
                                <div class="row  result_blg_filter p-2 back_white m-0">

                                    <div class="col-12 col-md-3">
                                        <h6 class="filters-title_hr txt_dgray font18 bold mt-2 text-center"> مرتب سازی براساس : </h6>
                                    </div>
                                    <div class="col-12 col-md-3 flt_drpcol">
                                        <div class="form-group ">
                                            <select class="selectpicker form-control " name="filter_range" id="range"
                                                    data-style="btn btn-default dropdown-toggle btn_cuswhite btn-md
																w-100 cursp txt_dgray filt_but drp_int">
                                                <option class="disabled selected">دسته بندی</option>
                                                <option class="" >پربازدیدترین</option>
                                                <option class="" >پرفروش ترین</option>
                                                <option class="" >محبوب ترین</option>
                                                <option class="" >جدیدترین</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 flt_drpcol">
                                        <div class="form-group ">
                                            <select class="selectpicker form-control " name="filter_range" id="range"
                                                    data-style="btn btn-default dropdown-toggle btn_cuswhite btn-md
																w-100 cursp txt_dgray filt_but drp_int">
                                                <option class="disabled selected">همه</option>
                                                <option class="" >پربازدیدترین</option>
                                                <option class="" >پرفروش ترین</option>
                                                <option class="" >محبوب ترین</option>
                                                <option class="" >جدیدترین</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 srfilter_box_col ">
                                        <div class="input-group ">
                                            <div class="input-group-prepend srchblg_cus">
                                                <span class="input-group-text " id="basic-addon1"><i class="fas fa-search txt_org"></i></span>
                                            </div>
                                            <input type="text" class="form-control srchblg_cus font14" placeholder="جستجو" aria-label="search" aria-describedby="basic-addon1">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row search_rs_row ">
                            @foreach($advertisements as $advertisement)
                            <div class="pkg_pr_col col-md-3">
                                <a href="{{url('site_advertisement_det', $advertisement->id)}}" class="txt_dgray pkg_pr_lnk">
                                    <div class="row pkgli_dtimg_row">
                                        <div class="col-12 col-md-12 pkgli_pr_imgcol  text-center">
                                            <img class="pkg_pr_img" src="{{asset('images/advertisement/'.$advertisement->image)}}">
                                        </div>
                                        <div class="col-md-11 pkgli_dtscol">
                                            <div class="row pkgli_dtscol_row">
                                                <div class="col-12 col-md-12 pkg_dtcol feature_dt_col pb-2">
                                                    <h6 class="font15 txt_dgray bold">{{$advertisement->title}}</h6>
                                                </div>
                                                <div class="col-12 col-md-12 pkg_dtcol feature_dt_col">
                                                    <p class="txt_gray">{{$advertisement->category}}</p>
                                                </div>

                                                <div class="col-12 col-md-8 but_coll pl-0">
                                                    <button class="btn btn-raised btn_cuswhite btn-sm btn_full w-100 btn_more">
                                                        <span class="d-inline-block ">جزییات بیشتر</span>

                                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="sp_afsvg mr-4 hvr-icon d-inline-block">
<g>
    <g>
        <path d="M501.333,234.667H68.417l109.792-109.792c2-2,3.125-4.708,3.125-7.542V96c0-4.313-2.594-8.208-6.583-9.854
			c-1.323-0.552-2.708-0.813-4.083-0.813c-2.771,0-5.5,1.083-7.542,3.125l-160,160c-4.167,4.167-4.167,10.917,0,15.083l160,160
			c3.063,3.042,7.615,3.969,11.625,2.313c3.99-1.646,6.583-5.542,6.583-9.854v-21.333c0-2.833-1.125-5.542-3.125-7.542
			L68.417,277.333h432.917c5.896,0,10.667-4.771,10.667-10.667v-21.333C512,239.438,507.229,234.667,501.333,234.667z"></path>
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
</svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

