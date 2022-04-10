<?php

    function showDate($date){$date=Verta::instance($date)->format('Y/m/d');$exDate=explode('/',$date);switch ((int)$exDate[1]){case 1:$exDate[1] = 'فروردین';break;case 2:$exDate[1] = 'اردیبهشت';break;case 3:$exDate[1] = 'خرداد';break;case 4:$exDate[1] = 'تیر';break;case 5:$exDate[1] = 'مرداد';break;case 6:$exDate[1] = 'شهریور';break;case 7:$exDate[1] = 'مهر';break;case 8:$exDate[1] = 'ابان';break;case 9:$exDate[1] = 'آذر';break;case 10:$exDate[1] = 'دی';break;case 11:$exDate[1] = 'بهمن';break;case 12:$exDate[1] = 'اسفند';break;}return $exDate;}

?>
@extends('layouts/site')

@section('title', 'صفحه اصلی')

@section('more_style')

@endsection

@section('content')


<section class="container-fluid prtfil_mainsec pb-5 mb-5">
    @if($href == 'blog')
        <div class="row blgmntit_row justify-content-center">
		    <div class="col-md-8 blgmntit_col m-auto">
				<h1 class="bbj bold blgmn_tit txt_grdrk pr-3">بلاگ</h1>
			</div>
	    </div>
    @elseif($href == 'psychology')
        <div class="row blgmntit_row justify-content-center">
            <div class="col-md-8 blgmntit_col m-auto">
            <h1 class="bbj bold chldsphymn_tit txt_grdrk">روانشناسی کودک و نوجوان</h1>
            </div>
        </div>
    @endif
    
<div class="row prtfil_mainrow">
  <div class="col-md-12 prtfil_maincont">
          <div class="row nav_filtmrow justify-content-center ">
      
              <div class="col-md-10 flts_cont">
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

                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                                                                            
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
        <div class="row prjct_mrow">
            <div class="col-md-12 prjct_cont">
                @foreach ($blogs as $blog)
                    <div class="row prjcts_prv_mrow grid pb-5 m-0 pt-2">
                        <div class="col-12 col-md-3 artcl_prv_mcol grid-item">

                            <a href="{{route('blogShow' , $blog->id)}}" class="artcl_lnk">
                                <div class="row post_rowind justify-content-center">
                                    <div class="col-md-12 post_colindimg">
                                    <img src="{{'/images/blogs/'.$blog->image}}" class="postindimg">
                                    <div class="post_inddate date">
                                        <?php
                                             $date = showDate($blog->created_at);
                                        ?>
                                        <span class="day fa_nu">{{$date[2]}}</span>
                                        <span class="month">{{$date[1]}}</span>
                                        <span class="year fa_nu">{{$date[0]}}</span>
                                    </div>
                                </div>
                                <div class="col-md-11 post_colindtxts p-0">
                                    <div class="row post_rowindtxts pt-1">
                                        <div class="col-md-12 post_colindtxt">
                                            <span class="font12 txt_org">{{$blog->category->title}}</span>
                                        </div>
                                        <div class="col-md-12 post_colindtxt  ">
                                            <h6 class="font15 txt_dgray mb-0 bold">{{$blog->title}}</h6>
                                        </div>
                                        <div class="col-md-12 post_colindtxt font14 txt_gray">
                                            {!! $blog->desc !!}
                                        </div>
                                        <div class="col-12 col-md-7 but_coll pl-0">
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
                                                    </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </a>

                        </div>				 	  
                    </div>                    
                @endforeach

            </div>
        </div>
  </div>
</div>
</section>


@endsection


@section('add_script')

@endsection

