@extends('layouts.site')

@section('title', 'درباره ما  ')
@section('more_styles')
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/main.css')}}">
@endsection
@section('content')
    <section class="container-fluid prjdt_mainsec pb-5">
        <div class="row artcl_mainrow m-0 justify-content-center" id="artcl_mainsec">
            <div class="col-md-10 artcl_cont">
                <div class="row prjdt_rltmrow m-0">
                    <div class="col-md-12 artcl_maintxtmcol">
                        <div class="row artcl_txtmrow">
                            <div class="col-md-12 artcl_infomcol">
                                <div class="row artcl_infomrow">
                                    <div class="col-md-4 artcl_wrtmcol m-auto">
                                        <div class="row artcl_wrtmrow justify-content-center">
                                            <div class="col-md-4 artcl_wrtimgcol text-center mb-3">
                                                <img src="{{asset('img/avtfm1.png')}}" class="artcl_wrtimg">
                                            </div>
                                            <div class="col-md-12 artcl_wrtnmcol text-center">
                                                <h6 class="font15 txt_gray bold mb-1">{{$audio->podcast->speaker->name}}</h6>
                                                <span class="txt_gray font12">{{$audio->podcast->speaker->specialty}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 artcltit_mcol m-auto">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-unstyled list-inline pr-0 txt_grayl font12">
                                                    <li class=" list-inline-item ">
                                                        <a class="txt_org" ><span>دسنه پادکست</span></a>
                                                    </li>
                                                    <li class=" list-inline-item txt_org">
                                                        <span> | </span>
                                                    </li>
                                                    <li class=" list-inline-item mr-1">
                                                        @foreach($audio->podcast->pod_categories as $category)
                                                            <span class="font12 txt_org">{{$category->name}}</span><br>
                                                        @endforeach
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="col-md-12">
                                                <h1 class="txt_dgray artcl_tit">{{$audio->podcast->title}}</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 txt_dgray col-md-12 pt-5 pb-3">
                                <h6 class="txt_dgray font24">{{$audio->title}}

                                </h6>
                            </div>
                            <div class="col-md-12 crsl_txtcol txt_gray pb-4">
                            {!! $audio->desc !!}
                            </div>
                            <div class="col-md-12 prj_picmcol pt-5 pb-5">
                                <div class="row prj_picmrow justify-content-center">
                                    <div class="col-md-12 pdcst_maincol ">
                                        <div class="podcast row">
                                            <div class="col-md-12 podcast__episode_titlecol">
                                                <h3 class="podcast__episode_title txt_dgray font20">{{$audio->title}}</h3>
                                                <h6 class="podcast__title txt_grdrk font12 mb-0">
                                                    {{'قسمت'.$audio->show_id}}
                                                </h6></div>

                                            <div class="col-md-12 podcast__meta ">
                                                <audio controls width="100%">
                                                    <source src="audio/The_Madam.mp3">
                                                    Your browser does not support the audio tag.
                                                </audio>
                                                <a href="#" class="artwork">
                                                    <img src="img/pdcast3.jpg" alt="">
                                                </a>
                                                <div class="dlpdcst_butmcol">
                                                    <a href="#">
                                                        <div class="usr_infoaddimgcol">
                                                            <svg class="add_plsicoimg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 477.867 477.867" style="enable-background:new 0 0 477.867 477.867;" xml:space="preserve">
	   <g>
           <g>
               <path d="M443.733,307.2c-9.426,0-17.067,7.641-17.067,17.067v102.4c0,9.426-7.641,17.067-17.067,17.067H68.267
				   c-9.426,0-17.067-7.641-17.067-17.067v-102.4c0-9.426-7.641-17.067-17.067-17.067s-17.067,7.641-17.067,17.067v102.4
				   c0,28.277,22.923,51.2,51.2,51.2H409.6c28.277,0,51.2-22.923,51.2-51.2v-102.4C460.8,314.841,453.159,307.2,443.733,307.2z"/>
           </g>
       </g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M335.947,295.134c-6.614-6.387-17.099-6.387-23.712,0L256,351.334V17.067C256,7.641,248.359,0,238.933,0
				   s-17.067,7.641-17.067,17.067v334.268l-56.201-56.201c-6.78-6.548-17.584-6.36-24.132,0.419c-6.388,6.614-6.388,17.099,0,23.713
				   l85.333,85.333c6.657,6.673,17.463,6.687,24.136,0.031c0.01-0.01,0.02-0.02,0.031-0.031l85.333-85.333
				   C342.915,312.486,342.727,301.682,335.947,295.134z"/>
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
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 art_sharemcol pb-5">
                        <div class="row mb-2 m-0">
                            <div class="col-6 lb_titcol">
                                <h6 class="m-auto bbj font30 txt_grdrk">از همین مجموعه</h6>
                            </div>
                            <div class="col-md-4 offset-md-2 mre_butcol">
                                <a href="pdclists_page.html" class="txt_dgray">
                                    <div class="row mre_butrow">
                                        <div class="col-md-6 text-center m-autoz">
                                            <h6 class="mb-0 bbj font30 txt_grdrk"> همه موارد </h6>
                                        </div>
                                        <div class="col-md-6 text-left m-autoz">
                                            <svg class="dl_svgicon pr-1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
    <g>
        <path d="M501.333,245.333H36.417l141.792-141.792c4.167-4.167,4.167-10.917,0-15.083c-4.167-4.167-10.917-4.167-15.083,0l-160,160
		c-4.167,4.167-4.167,10.917,0,15.083l160,160c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125
		c4.167-4.167,4.167-10.917,0-15.083L36.417,266.667h464.917c5.896,0,10.667-4.771,10.667-10.667S507.229,245.333,501.333,245.333z
		"></path>
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
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row prjcts_prv_mrow  mt-5 pdcstlistsim_mrow">
                            <div class="pdcst_lipr_col col-md-2">
                                <a href="pdcst_dtpage.html" class="txt_dgray">
                                    <div class="row pdcstlistsim_pr_row  ">
                                        <div class="col-12 col-md-12 pdcst_pr_img_col pb-2 text-center">
                                            <img class="pdcst_img" src="img/pdcast3.jpg">
                                            <svg class="pdcst_icocol" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 109.126 109.126" style="enable-background:new 0 0 109.126 109.126;" xml:space="preserve">
<g>
    <path d="M98.901,47.663L18.197,1.068c-2.467-1.424-5.502-1.424-7.972,0C7.762,2.491,6.243,5.124,6.243,7.971v93.188
c0,2.848,1.522,5.479,3.982,6.9c1.236,0.713,2.61,1.067,3.986,1.067c1.374,0,2.751-0.354,3.983-1.067l80.704-46.594
c2.466-1.422,3.984-4.054,3.984-6.9C102.887,51.719,101.366,49.088,98.901,47.663z"></path>
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
                                                    <h6 class="font14 txt_dgray bold">عنوان پادکست </h6>
                                                </div>
                                                <div class="col-12 col-md-12 pdcst_dt_col feature_dt_col ">
                                                    <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                                        <li class=" list-inline-item tch_dtulli">
                                                            <span class="txt_gray font13">قسمت 4</span>
                                                        </li>
                                                        <li class="list-inline-item tch_dtulli float-left">
                                                            <span class="txt_gray font13"> 6 اسفند 99 <i class="far fa-calendar-alt pr-1 font13"></i></span>
                                                        </li>
                                                    </ul>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>




                    <div class="col-md-12 art_sharemcol pb-5">
                        <div class="row tags_row">
                            <div class="col-md-12 clr_col pt-4">
                                <ul class="pr-0 txt_grayl list-inline bold list-unstyled">
                                    <li class="list-inline-item  tls_li ml-1">
                                        <a href="#"  class="txt_gray"><h6 class="font12 mb-0 bold"> تگ </h6></a>
                                    </li>
                                    <li class="list-inline-item  tls_li ml-1">
                                        <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> برچسب </h6></a>
                                    </li>
                                    <li class="list-inline-item  tls_li ml-1">
                                        <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> تگ </h6></a>
                                    </li>
                                    <li class="list-inline-item  tls_li ml-1">
                                        <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> برچسب </h6></a>
                                    </li>

                                    <li class="list-inline-item  tls_li ml-1">
                                        <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> تگ </h6></a>
                                    </li>
                                    <li class="list-inline-item  tls_li ml-1">
                                        <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> برچسب </h6></a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class="row art_sharerow">
                            <div class="col-2 col-md-2">
                                <span class="txt_gray font20 pt-4">همرسانی :</span>
                            </div>
                            <div class="col-1 col-md-1 shareico_col pr-0">
                                <a href="#"><span class="shr_ico"><i class="fab fa-instagram font26"></i></span></a>
                            </div>
                            <div class="col-1 col-md-1 shareico_col pr-0">
                                <a href="#"><span class="shr_ico"><i class="fab fa-telegram font26"></i></span></a>
                            </div>
                            <div class="col-1 col-md-1 shareico_col pr-0">
                                <a href="#"><span class="shr_ico"><i class="fab fa-whatsapp font26"></i></span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
            </div>
        </div>
                <div class="row commentpr_row m-0">
                    <div class="col-12 col-md-6 prdt_col p-5">

                        <div class="row user_rating_row m-0">
                            <div class="col-12 col-md-12 title_row2 pb-4">
                                <h4 class="txt_dgray bold">دیدگاه خود را بیان کنید</h4>
                            </div>
                            <div class="col-md-11 scm_ico p-0">

                                <form method="post" action="{{url('comment')}}">
                                    @csrf
                                    <input type="hidden" name="podcast" value="{{$audio->id}}">
                                    <div class="form-group col-12 col-md-12 ">
                                        <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-envelope txt_org"></i>
															  </span>
                                            <input name="email" class="form-control srch_cus3 txt_dgray mr-0" type="email" placeholder="ایمیل">

                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-md-12 ">
                                        <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-user txt_org"></i>
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
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 prdt_col prdt_cmm_col p-5">
                        <div class="row userscomm_row m-0">
                            <div class="col-12 col-md-12  title_row2 pb-5 ">
                                <h4 class="txt_dgray bold">نظرات کاربران</h4>
                            </div>
                            <div class="col-12 col-md-12 users_cmm_col mCustomScrollbar"
                                 data-mcs-theme="minimal-dark">
                                <div class="row">
                                    @foreach($comments as $comment)
                                        <div class="col-12 col-md-12 users_cmm_col mCustomScrollbar"
                                             data-mcs-theme="minimal-dark">
                                            <div class="row">
                                                <div class="col-12 col-md-12">
                                                    <h6 class="blackgray">{{$comment->name}} </h6>
                                                </div>

                                                <div class="col-12 col-md-12">
                                                    <P>{{$comment->desc}}</P>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </section>
@endsection
@section('more_scripts')
    <script src="{{asset('site/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('site/js/popper.min.js')}}"></script>
    <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('site/js/main_js.js')}}"></script>
    <script src="{{asset('site/js/jquery.mCustomScrollbar.js')}}"></script>
    <script src="{{asset('site/js/mediaelement-and-player.min.js')}}"></script>
@endsection

