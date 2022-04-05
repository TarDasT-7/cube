@extends('layouts.site')


@section('more_style')


@endsection

@section('content')

    <section class="container-fluid prtfil_mainsec pb-5 mb-5">
        <div class="row blgmntit_row justify-content-center">
            <div class="col-md-10 blgmntit_col m-auto">
                <h1 class="bbj pdcst_titll txt_grdrk">عنوان مجموعه پادکست</h1>
            </div>
        </div>
        <div class="row prtfil_mainrow">
            <div class="col-md-12 prtfil_maincont">
                <div class="row nav_filtmrow justify-content-center ">

                    <div class="col-md-10 flts_cont">
                        <div class="row  result_blg_filter p-2 back_white m-0">

                            <div class="col-12 col-md-3">
                                <h6 class="filters-title_hr txt_dgray font18  mt-2 text-center"> مرتب سازی براساس : </h6>
                            </div>

                            <div class="col-12 col-md-4 flt_drpcol">
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
                            <div class="col-md-5 srfilter_box_col ">
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
                <div class="row prjct_mrow m-0">
                    <div class="col-md-12 prjct_cont">
                        <div class="row prjcts_prv_mrow  m-0 ">
                            @foreach($podcast->pod_audio as $audio)
                            <div class="pdcst_lipr_col col-md-2">
                                <a href="{{url('audio',$audio->id)}}" class="txt_dgray">
                                    <div class="row pdcstlist_pr_row  ">
                                        <div class="col-12 col-md-12 pdcst_pr_img_col pb-2 text-center">
                                            <img class="pdcst_img" src="{{'images/'.$podcast->image}}">
                                            <svg class="pdcst_icocol" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 109.126 109.126" style="enable-background:new 0 0 109.126 109.126;" xml:space="preserve">
<g>
    <path d="M98.901,47.663L18.197,1.068c-2.467-1.424-5.502-1.424-7.972,0C7.762,2.491,6.243,5.124,6.243,7.971v93.188
		c0,2.848,1.522,5.479,3.982,6.9c1.236,0.713,2.61,1.067,3.986,1.067c1.374,0,2.751-0.354,3.983-1.067l80.704-46.594
		c2.466-1.422,3.984-4.054,3.984-6.9C102.887,51.719,101.366,49.088,98.901,47.663z"/>
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
                                        <div class="col-12 col-md-12 pdcst_pr_dt_col p-0 pt-3">
                                            <div class="row pdcst_dts_row m-0">
                                                <div class="col-12 col-md-12 pdcst_dt_col feature_dt_col">
                                                    <h6 class="font14 txt_dgray bold">{{$audio->title}} </h6>
                                                </div>
                                                <div class="col-12 col-md-12 pdcst_dt_col feature_dt_col ">
                                                    <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                                        <li class=" list-inline-item tch_dtulli">
                                                            <span class="txt_gray font13"> {{'قسمت'.$audio->show_id}}</span>
                                                        </li>
                                                        <li class="list-inline-item tch_dtulli float-left">
                                                            <span class="txt_gray font13"> {{Verta::instance($podcast->craated_at)->day."".Verta::instance($podcast->craated_at)->formatWord('F')."".Verta::instance($podcast->craated_at)->year}}  <i class="far fa-calendar-alt pr-1 font13"></i></span>
                                                        </li>
                                                    </ul>
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

