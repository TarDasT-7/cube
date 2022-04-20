@extends('layouts.site')


@section('more_style')


@endsection

@section('content')

<section class="container-fluid etslist_cont back_white">
    <div class="row etslist_row m-0 pt-5">
     <div class="col-md-3 filters_col pb-5 ">
      <div  class="row filterboxes_row m-0 back_crm">
              
              <div class="col-md-12 catfilters_box m_shadow pt-4">
              <div class="row titleflt_row pb-3" data-toggle="collapse" data-target="#filterbox1">
                  <a  class="cursp w-100">
                      <div class="col-md-12 titlenews_col" >
                     <h6 class="d-inline-block font18 bold mb-0 txt_grdrk">دسته بندی نتایج</h6>
                                 <i class="fa fa-minus d-inline-block pt-2 float-left txt_org"></i>

                  </div></a>
              </div>
              <div class="row catfilters_boxrow collapse pt-3 show" id="filterbox1">
                 <div class="col-md-12 catfilter_box_col  mCustomScrollbar" data-mcs-theme="minimal-dark">
                             <div class="row filter_row  pt-3">
                                 <div class="col-md-12 flcat_list_col">
                                     <ul id="listpr" class="list-unstyled pr-3">
                                         <li class="fl_li pb-3"><a class="fl_item font15 txt_dgray" data-toggle="collapse" href="#lspr1">نمایش خلاق<i class="fas fa-angle-down d-inline-block pt-2 font10 pr-3"></i></a>
                                             <ul id="lspr1" class="list-unstyled collapse show pr-2 pt-2" 
                                                 data-parent="#listpr">
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                                 
                                             </ul>
                                         </li>
                                         <li class="fl_li pb-3"><a class="fl_item font15 txt_dgray" data-toggle="collapse" href="#lspr2">داستان نویسی<i class="fas fa-angle-down d-inline-block pt-2 font10 pr-3"></i></a>
                                             <ul id="lspr2" class="list-unstyled collapse pr-2 pt-2" 
                                                 data-parent="#listpr">
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته  </a></li>
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                                 
                                             </ul>
                                         </li>
                                         <li class="fl_li pb-3"><a class="fl_item font15 txt_dgray" data-toggle="collapse" href="#lspr3">نمایشنامه نویسی<i class="fas fa-angle-down d-inline-block pt-2 font10 pr-3"></i></a>
                                             <ul id="lspr3" class="list-unstyled collapse pr-2 pt-2" 
                                                 data-parent="#listpr">
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته </a></li>
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                                 
                                             </ul>
                                         </li>
                                         <li class="fl_li pb-3"><a class="fl_item font15 txt_dgray" data-toggle="collapse" href="#lspr2">تدوین<i class="fas fa-angle-down d-inline-block pt-2 font10 pr-3"></i></a>
                                             <ul id="lspr2" class="list-unstyled collapse pr-2 pt-2" 
                                                 data-parent="#listpr">
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته  </a></li>
                                                 <li class="fl_li pb-2"><a class="txt_gray fl_item font15" href="entertains_page.html">زیر دسته</a></li>
                                                 
                                             </ul>
                                         </li>
                                         <li class="fl_li pb-3"><a class="fl_item font15 txt_dgray" data-toggle="collapse" href="#lspr3">پادکست سازی<i class="fas fa-angle-down d-inline-block pt-2 font10 pr-3"></i></a>
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
              </div>
              <div class="col-md-12 srfilter_box m_shadow mt-3">
              <div class="row titleflt_row pb-3"  data-toggle="collapse" data-target="#filterbox2">
                  <div class="col-md-12 titlenews_col">
                      <h6 class="d-inline-block txt_grdrk font18 bold mb-0">جستجو در نتایج</h6>
                        <i class="fa fa-minus d-inline-block pt-2 float-left txt_org"></i>
                  </div>
              </div>
                 
              <div class="row catfilters_boxrow collapse pt-3 show" id="filterbox2">
                 <div class="col-md-12 srfilter_box_col ">
                     <div class="input-group">
                         <div class="input-group-prepend back_litegray p-1 pr-2 pl-2">
                     <span class="input-group-text " id="basic-addon1"><i class="fas fa-search txt_org"></i></span>
                   </div>
                   <input type="text" class="form-control back_litegray font13" placeholder="نام دوره مورد نظر خود را وارد کنید.." aria-label="search" aria-describedby="basic-addon1">
                          
                 </div>
                 </div> 
              </div>
              </div>
              <div class="col-md-12 srfilter_box m_shadow mt-3">
              
              <div class="row titleflt_row pb-3"  data-toggle="collapse" data-target="#filterbox5">
                  <div class="col-md-12 titlenews_col">
                      <h6 class="d-inline-block txt_grdrk font18 bold mb-0">نرم افزار</h6>
                                 <i class="fa fa-minus d-inline-block pt-2 float-left txt_org"></i>
                  </div>
              </div>
                 
              <div class="row catfilters_boxrow collapse pt-3 show" id="filterbox5">

             <div class="col-md-12 flcl_mcol">
             <ul class="fl_chbox_ul list-unstyled pr-1 pb-3 filt_ul2 mCustomScrollbar" data-mcs-theme="minimal-dark">
                                         <li class=" flit_li ">
                                             <div class=" form-check custom-controls-stacked  pr-2_5">
                                                         <label class="form-check-label custom-control material-checkbox">
                                                           <input class="form-check-input material-control-input" type="checkbox">
                                                            <span class="material-control-description">فتوشاپ</span>
                                                           <span class="material-control-indicator"></span>

                                                         </label>
                                                       </div>
                                         </li>
                                         <li class=" flit_li">
                                             <div class=" form-check custom-controls-stacked  pr-2_5">
                                                         <label class="form-check-label custom-control material-checkbox">
                                                           <input class="form-check-input material-control-input" type="checkbox">
                                                            <span class="material-control-description">ایلستریتور</span>
                                                           <span class="material-control-indicator"></span>

                                                         </label>
                                                       </div>
                                         </li>
                                         <li class=" flit_li">
                                             <div class=" form-check custom-controls-stacked  pr-2_5">
                                                         <label class="form-check-label custom-control material-checkbox">
                                                           <input class="form-check-input material-control-input" type="checkbox">
                                                            <span class="material-control-description">پرمیر</span>
                                                           <span class="material-control-indicator"></span>

                                                         </label>
                                                       </div>
                                         </li>
                                         <li class=" flit_li">
                                             <div class=" form-check custom-controls-stacked  pr-2_5">
                                                         <label class="form-check-label custom-control material-checkbox">
                                                           <input class="form-check-input material-control-input" type="checkbox">
                                                            <span class="material-control-description"> کورل درا</span>
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
                      <h6 class="d-inline-block txt_grdrk font18 bold mb-0">سطح دوره</h6>
                                 <i class="fa fa-minus d-inline-block pt-2 float-left txt_org"></i>
                  </div>
              </div>
                 
              <div class="row catfilters_boxrow collapse pt-3 show" id="filterbox5">

             <div class="col-md-12 flcl_mcol">
             <ul class="fl_chbox_ul list-unstyled pr-1 pb-3 filt_ul2 mCustomScrollbar" data-mcs-theme="minimal-dark">
                                         <li class=" flit_li ">
                                             <div class=" form-check custom-controls-stacked  pr-2_5">
                                                         <label class="form-check-label custom-control material-checkbox">
                                                           <input class="form-check-input material-control-input" type="checkbox">
                                                            <span class="material-control-description">مقدماتی</span>
                                                           <span class="material-control-indicator"></span>

                                                         </label>
                                                       </div>
                                         </li>
                                         <li class=" flit_li">
                                             <div class=" form-check custom-controls-stacked  pr-2_5">
                                                         <label class="form-check-label custom-control material-checkbox">
                                                           <input class="form-check-input material-control-input" type="checkbox">
                                                            <span class="material-control-description">متوسط</span>
                                                           <span class="material-control-indicator"></span>

                                                         </label>
                                                       </div>
                                         </li>
                                         <li class=" flit_li">
                                             <div class=" form-check custom-controls-stacked  pr-2_5">
                                                         <label class="form-check-label custom-control material-checkbox">
                                                           <input class="form-check-input material-control-input" type="checkbox">
                                                            <span class="material-control-description">پیشرفته</span>
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
                      <h6 class="d-inline-block txt_grdrk font18 bold mb-0">قیمت</h6>
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
                                                     
                                                   <input type="text" min="0" max="1420000" oninput="validity.valid||(value='8000');" id="max_price" class="price-range-field form-control" />
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
                                                 <input type="text" min="0" max="1450000" oninput="validity.valid||(value='2000');" id="min_price" class="price-range-field form-control" />
                                                  <div class="input-group-addon cus_addon">
                                                       <span class="input-group-text">تومان</span>
                                                     </div>
                                               </div>
                                           </div>
                                           </div>
                                           <div class="row but_row">
                                               <div class="col-md-12 mt-3">
                                                 <div>
                                                     <a type="sumbit" href="user_profile.html" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100">اعمال فیلتر</a>
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
        <div class="col-md-9 ets_listcol mb-5">
      <div class="row breadcrumb_row">
       <nav aria-label="breadcrumb">
       <ol class="breadcrumb brdc_cus font14">
         <li class="breadcrumb-item"><a href="index.html" class="txt_gray">خانه</a></li>
         <li class="breadcrumb-item "><a href="prdlists_page.html" class="txt_gray">نام دسته</a></li>
         <li class="breadcrumb-item "><a href="prdlists_page.html" class="txt_gray">نام سر دسته</a></li>
         <li class="breadcrumb-item active txt_dgray" aria-current="page">نام زیر دسته</li>
       </ol>
     </nav>	
  </div>
       <div class="row  result_side_filter p-2 m-0 mb-3 back_white ">
                     <div class="col-12 col-md-2">
                         <h6 class="filters-title_hr font14 bold mt-2 txt_grdrk"> مرتب سازی براساس : </h6>
                     </div>
                    <div class="col-12 col-md-10">
                        <a role="button" href="#" class="btn btn_ordlist txt_gray bold active font14">همه</a>
                         <a role="button" href="#" class="btn btn_ordlist txt_gray bold font14">پربازدیدترین</a>
                         <a role="button" href="#" class="btn btn_ordlist txt_gray bold font14">دارای تخفیف</a>
                         <a role="button" href="#" class="btn btn_ordlist txt_gray bold font14">محبوب  ترین </a>
                        <a role="button" href="#" class="btn btn_ordlist txt_gray bold font14">جدیدترین</a>
                    </div>
                 </div>

                @foreach ($courses as $cours)
                    
                    <div class="row search_rs_mrow back_white m-0 p-3">
                        <div class="col-md-12 search_rs_cont">
                            <div class="row search_rs_row ">
                                <div class="col-md-12 prd_itemcont mb-4">
                                    <div class="row prd_itemcontrow">
                                        <div class="col-md-4 prd_itemcontimg_col text-center">
                                            <a href="{{route('courseShow' , $cours->id)}}">
                                                <img class="prd_itemcontimg imghv" src="{{'/images/courses/'.$cours->image}}">
                                                @if($cours->off > 0)
                                                    <span class="lato text-center sploff_tagind font20 txt_grdrk">{{$cours->off}}%<br></span>
                                                @endif
                                            </a>
                                        </div>
                                        <div class="col-md-8 prd_itemconttxt_mcol">
                                            <div class="row  prd_itemtxtdt_mrow ">
                                                <div class="col-md-12 prd_itemtxtdt_mcol">
                                                    <div class="row">
                                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                                            <h6 class="font15 txt_dgray bold">{{$cours->title}}</h6>
                                                        </div>
                                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                                            <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                                                <li class=" list-inline-item tch_dtulli">
                                                                    <img src="{{'/images/producers/'.$cours->producer->image}}" class="post_itmsldateimg">
                                                                </li>
                                                                <li class=" list-inline-item tch_dtulli">
                                                                    <span class="txt_gray font14">{{$cours->producer->first_name}}{{$cours->producer->last_name}}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-12 prd_itemtxtdt_col txt_gray font12 pt-2">
                                                            {!! $cours->desc !!}
                                                        </div>
                                                        <div class="prpr_dt_cont">
                                                            <div class="row m-0">
                                                                <div class="col-12 col-md-6 prpr_dt_col feature_dt_col">
                                                                    <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">

                                                                        <li class=" list-inline-item tch_dtulli">
                                                                            <span class="txt_gray font14"><i class="far fa-clock pr-2 font14"></i> {{$cours->course_time}} </span>
                                                                        </li>
                                                                        <li class=" list-inline-item tch_dtulli">
                                                                            <span class="txt_gray font14"><i class="pr-2 font14 fas fa-puzzle-piece"></i> سطح {{$cours->level}} </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6 prc_dtcol text-left">
                                                                    <div class="row">
                                                                        <div class="col-md-6 pl-0 txt_gray">
                                                                            <del>{{$cours->price}} تومان</del>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <h6 class="font20 txt_org bold mb-0">{!! $cours->price - (($cours->price * $cours->off) / 100) !!} تومان</h6>
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
                    </div>

                @endforeach
                
                    
    </div>
 </div>
</section>


@endsection

@section('add_script')
    <script>
        $('.titleflt_row').click(function(){
            $(this).find('i').toggleClass('fa-plus fa-minus')
        });
    </script>
@endsection

