
@extends('layouts/site')

@section('title', 'صفحه اصلی')

@section('more_style')



@endsection
@section('content')

<section class="container-fluid slide_sec">
    <div class="row sliderrow_blog justify-content-center pt-3 ">
        <div class="col-12 col-md-9 columns slider_col">
            <div class="owl-carousel owl-theme vbvc">
                @foreach ($sliders->where('rel' , 'slider') as $slider)                    
                    <div class="sl_blogitem item">
                        <div class="row slitm_row  ">
                            <div class="col-12 col-md-12 sl_blogimgcol pb-2 text-center">
                                <a href="#" class="txt_darkb">
                                    <img class="sl_blogimg" src="{{'images/wallpapers/'.$slider->image}}">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
               
           </div>
        </div>
    </div>
</section>
<section class="main_secppk container-fluid main-content">
<div class="row maincat_row mt-5 mb-5">
<div class="col-md-10 maincat_mcol m-auto text-center ">
    <div class="row catsdt_mrow m-0 ">
        @foreach ($categoryCourse as $category)
            
            <div class="col-md-2 catdt_mcol">
                <a href="crslists_page.html">
                    <div class="row catdt_mrow">
                        <div class="col-md-11 catdt_col">
                            <div class="row catdt_row">
                                <div class="col-md-8 icosvg_col">
                                    <svg class="ico_svg" id="line" viewBox="0 0 64 64"  xmlns="http://www.w3.org/2000/svg"><g fill="#ffa500c7"><path d="m59.125 46.757h3.875a1 1 0 0 0 0-2h-3.875a1 1 0 0 0 0 2z"/><path d="m63.216 59.789-3.875-.859a1 1 0 1 0 -.433 1.952l3.875.859a1 1 0 1 0 .433-1.952z"/><path d="m59.341 32.583 3.875-.86a1 1 0 1 0 -.433-1.952l-3.875.86a1 1 0 1 0 .433 1.952z"/><path d="m55.034 29.28-32.534 7.213v-1.255a1 1 0 0 0 -1-1h-3a3 3 0 0 0 -3 3v17.036a3 3 0 0 0 3 3h3a1 1 0 0 0 1-1v-1.254l3 .665v3.984a2.981 2.981 0 0 0 2.351 2.931l6 1.33a3 3 0 0 0 3.649-2.93v-2.655l17.534 3.888a1 1 0 0 0 1.216-.976v-31a1 1 0 0 0 -1.216-.977zm-34.534 8.458v17.536h-2a1 1 0 0 1 -1-1v-17.036a1 1 0 0 1 1-1h2zm15 23.262a1 1 0 0 1 -1.215.976l-6-1.33a.994.994 0 0 1 -.785-.976v-3.54l8 1.773z"/></g><path d="m47.5 14.56h-36.673l36.484-8.089a1 1 0 0 0 .761-1.192l-.65-2.93a3 3 0 0 0 -3.578-2.278l-41.493 9.198a3 3 0 0 0 -2.279 3.578l.628 2.821v29.832a3 3 0 0 0 3 3h41.8a3 3 0 0 0 3-3v-29.94a1 1 0 0 0 -1-1zm-3.223-12.537a1 1 0 0 1 1.193.759l.43 1.954-3.684.816-3.576-2.28zm-8.4 1.861 3.579 2.28-7.366 1.636-3.579-2.28zm-10.127 2.246 3.579 2.28-7.369 1.633-3.578-2.28zm-10.129 2.246 3.579 2.279-7.368 1.634-3.578-2.28zm-13.6 4.038a1 1 0 0 1 .76-1.193l2.708-.6 3.581 2.279-6.613 1.467zm44.479 33.086a1 1 0 0 1 -1 1h-41.8a1 1 0 0 1 -1-1v-28.94h43.8z" fill="#697d38"/><path d="m6.7 29.335h35.8a1 1 0 0 0 0-2h-16.9v-5.475a1 1 0 0 0 -2 0v5.475h-16.9a1 1 0 0 0 0 2z" fill="#697d38"/><path d="m8.7 42.111h31.8a3 3 0 0 0 3-3v-4.388a1 1 0 0 0 -2 0v4.388a1 1 0 0 1 -1 1h-31.8a1 1 0 0 1 -1-1v-4.388a1 1 0 0 0 -2 0v4.388a3 3 0 0 0 3 3z" fill="#697d38"/></svg>
                                </div>
                                <div class="col-md-12 cattxt_col">
                                    <h6 class="txt_dgrn font14 bold">{{$category->title}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        @endforeach

    </div>
</div>

    <div class="col-md-2 mre_butcol">
                        <a href="crslists_page.html" class="txt_dgray">
                            <div class="row mre_butrow">
                                <div class="col-md-9 text-center m-autoz">
                                    <h4 class="bbj txt_grdrk mcat_txt"> تمامی <br> دوره ها</h4>
                                </div>
                                <div class="col-md-3 text-left m-autoz pr-0">
                                   <svg class="dl_svgicon pr-1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
<g>
    <path d="M501.333,245.333H36.417l141.792-141.792c4.167-4.167,4.167-10.917,0-15.083c-4.167-4.167-10.917-4.167-15.083,0l-160,160
        c-4.167,4.167-4.167,10.917,0,15.083l160,160c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125
        c4.167-4.167,4.167-10.917,0-15.083L36.417,266.667h464.917c5.896,0,10.667-4.771,10.667-10.667S507.229,245.333,501.333,245.333z
        "/>
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

<div class="row special_offers_mrow mt-5 mb-5 ">
        <div class="col-12 col-md-12 slider_spoffmcol">
        
        <div class="row slider_spoffrow">
            <div class="col-md-12">
                <div class="row">
                <div class="col-md-2 slbn_mcol">
                <div class="row slbn_mrow back_crm">
                    <div class="col-md-12 slbn_col ">
                        <div class="row slbn_row">
                            <div class="col-md-12 slbn_svgcol">
                                <!--<svg class="slbn_svg" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g fill="#ccda45b0"><path d="m48 96v288h32v-32a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v32h192.37l-22.28-22.28a8 8 0 0 1 0-11.32l11.31-11.31a8 8 0 0 1 11.32 0l44.91 44.91h50.37v-288z"/><path d="m464 96v288h-50.37l-44.91-44.91a8 8 0 0 0 -11.32 0l-11.31 11.31a8 8 0 0 0 0 11.32l22.28 22.28h-192.37v-32a16 16 0 0 0 -16-16h-64a16 16 0 0 0 -16 16v32h-32v-288z"/></g><g fill="#697d38"><path d="m496 56h-480a8 8 0 0 0 -8 8v352a8 8 0 0 0 8 8h381.06l28.22 28.23a8.015 8.015 0 0 0 11.32 0l22.63-22.63a8.03 8.03 0 0 0 2.34-5.6h34.43a8 8 0 0 0 8-8v-352a8 8 0 0 0 -8-8zm-65.06 379.25-79.19-79.19 11.31-11.31 79.19 79.19zm-90.51-67.88 8.63 8.63h-165.06v-24a24.032 24.032 0 0 0 -24-24h-64a24.032 24.032 0 0 0 -24 24v24h-16v-272h400v272h-39.06l-42.57-42.57a16.006 16.006 0 0 0 -22.62 0l-11.32 11.32a16.006 16.006 0 0 0 0 22.62zm-172.43-15.37v24h-80v-24a8.011 8.011 0 0 1 8-8h64a8.011 8.011 0 0 1 8 8zm320 56h-39.06l-16-16h31.06a8 8 0 0 0 8-8v-288a8 8 0 0 0 -8-8h-416a8 8 0 0 0 -8 8v288a8 8 0 0 0 8 8h317.06l16 16h-357.06v-336h464z"/><path d="m269.858 183.077a30.2 30.2 0 0 1 -4 5.8c-25.712 30.854-23.329 57.74-12.525 72.612 11.42 15.718 32.476 20.4 53.642 11.937 6.317-2.526 11.038-2.639 14.031-.333 8.264 6.366 8.324 29.644 7.06 39.913a8 8 0 0 0 6.946 8.93 8.1 8.1 0 0 0 1 .063 8 8 0 0 0 7.928-7.009c.518-4.145 4.551-40.893-13.154-54.558-5.358-4.137-14.867-7.818-29.755-1.862-14.14 5.656-27.783 3.113-34.755-6.485-7.265-10-7.962-29.166 11.872-52.966 8.46-10.152 10.456-18.609 5.928-25.137-5.368-7.741-18.252-12.81-75.653 2.377-29.9 7.911-58.775 17.988-59.064 18.088a8 8 0 0 0 5.286 15.1c.261-.092 26.437-9.227 54.5-16.819 42.455-11.483 56.561-10.593 60.713-9.651z"/><path d="m122.343 211.343-8 8a8 8 0 0 0 11.314 11.314l8-8a8 8 0 0 0 -11.314-11.314z"/></g></g></svg>
                                <svg  class="slbn_svg" xmlns="http://www.w3.org/2000/svg" id="line" width="512" height="512" viewBox="0 0 64 64"><path d="M57.181,23.853c-2.6-2.6-7.4-5.33-9.9-2.828-2.015,2.015-.8,6.271,2.828,9.9,2.449,2.447,5.182,3.8,7.321,3.8a3.531,3.531,0,0,0,2.579-.969C62.536,31.227,59.729,26.4,57.181,23.853Z" style="fill:#ffa500c7"/><path d="M44.37,23.937,19,49.309c-1.037,1.037-1.245,2.7-.585,4.68a13.97,13.97,0,0,0,3.413,5.22,13.974,13.974,0,0,0,5.219,3.413c1.62.54,3.469.627,4.681-.585L57.074,36.688c-2.66-.137-5.759-1.73-8.379-4.349C46,29.645,44.5,26.57,44.37,23.937Z" style="fill:#ffa500c7"/><path d="M51,29.184V4a3,3,0,0,0-3-3H8A3,3,0,0,0,5,4V29.184A3,3,0,0,0,3,32v2a3,3,0,0,0,3,3H17.382l-2.829,5.658A3,3,0,0,0,17.236,47h1.528a2.983,2.983,0,0,0,2.683-1.658L25.618,37h3.764l4.171,8.342A2.983,2.983,0,0,0,36.236,47h1.528a3,3,0,0,0,2.683-4.342L37.618,37H50a3,3,0,0,0,3-3V32A3,3,0,0,0,51,29.184ZM7,4A1,1,0,0,1,8,3H48a1,1,0,0,1,1,1V29H20V27a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2v2H7ZM18,29H12V27h6Zm1.658,15.447a.994.994,0,0,1-.894.553H17.236a1,1,0,0,1-.894-1.447L19.618,37h3.764Zm19-.894A1,1,0,0,1,37.764,45H36.236a.994.994,0,0,1-.894-.553L31.618,37h3.764ZM51,34a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V32a1,1,0,0,1,1-1H50a1,1,0,0,1,1,1Z" style="fill:#697d38"/></svg>-->
                                <svg class="slbn_svg" id="Line" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m60 28h-38a3 3 0 0 0 -3 3v26a3 3 0 0 0 3 3h38a3 3 0 0 0 3-3v-26a3 3 0 0 0 -3-3zm-13.985 17.8-9.015 5.2a2 2 0 0 1 -3-1.732v-10.517a2 2 0 0 1 3.017-1.723l9.015 5.319a2 2 0 0 1 -.017 3.453z" fill="#ffa500c7"/><path d="m48 4h-44a3 3 0 0 0 -3 3v38a3 3 0 0 0 3 3h44a3 3 0 0 0 3-3v-38a3 3 0 0 0 -3-3zm-44 2h44a1 1 0 0 1 1 1v3h-46v-3a1 1 0 0 1 1-1zm7.7 24.5a3.5 3.5 0 1 1 3.5 3.5 3.5 3.5 0 0 1 -3.5-3.5zm9.7 15.5h-12.4v-3.8a6.2 6.2 0 0 1 12.4 0zm26.6 0h-24.6v-3.8a8.2 8.2 0 0 0 -4.745-7.426 5.5 5.5 0 1 0 -6.909 0 8.2 8.2 0 0 0 -4.746 7.426v3.8h-3a1 1 0 0 1 -1-1v-33h46v33a1 1 0 0 1 -1 1zm-4-21a1 1 0 0 1 -1 1h-15a1 1 0 0 1 0-2h15a1 1 0 0 1 1 1zm0-5a1 1 0 0 1 -1 1h-15a1 1 0 0 1 0-2h15a1 1 0 0 1 1 1zm0 10a1 1 0 0 1 -1 1h-15a1 1 0 0 1 0-2h15a1 1 0 0 1 1 1zm-10 5a1 1 0 0 1 -1 1h-5a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1zm10 0a1 1 0 0 1 -1 1h-5a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1z" fill="#697d38"/></svg>

                            </div>
                            <div class="col-md-12 lb_titcol">
                                <h5 class="bbj mb-0 font40 txt_grdrk">جدیدترین دوره ها</h5>
                            </div>
                           <!--	<div class="col-md-12 mre_butcol">
                        <a href="#" class="txt_dgray">
                            <div class="row mre_butrow">
                                <div class="col-md-6 text-center m-autoz">
                                    <h5 class="bold mb-0"> همه موارد </h5>
                                </div>
                                <div class="col-md-6 text-left m-autoz">
                                   <svg class="dl_svgicon pr-1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
<g>
    <path d="M501.333,245.333H36.417l141.792-141.792c4.167-4.167,4.167-10.917,0-15.083c-4.167-4.167-10.917-4.167-15.083,0l-160,160
        c-4.167,4.167-4.167,10.917,0,15.083l160,160c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125
        c4.167-4.167,4.167-10.917,0-15.083L36.417,266.667h464.917c5.896,0,10.667-4.771,10.667-10.667S507.229,245.333,501.333,245.333z
        "/>
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
                    </div> -->
                        </div>
                    </div>

                </div>
            </div>
                <div class="col-md-10 columns splofs_slcontrgt">
                    <div class="owl-carousel sp_offers_crl owl-theme">
                        
                        @foreach ($courses as $course)
                            
                            <div class="product_pr_col item">
                                <div class="row prd_pr_row  ">
                                    <div class="col-12 col-md-12 prd_pr_img_col pb-2 text-center">
                                        <a href="crs_dtpage.html" class="txt_dgray">
                                            <img class="prd_pr_img" src="{{'/images/courses/'.$course->image}}">
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 prd_pr_dt_col ">
                                        <div class="row prpr_dts_row">
                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                                <h6 class="font14 txt_dgray bold">{{$course->title}}</h6>
                                            </div>
                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                                <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                                <li class=" list-inline-item tch_dtulli">
                                                <img src="{{'/images/producers/'.$course->producer->image}}" class="post_itmsldateimg">
                                                </li>
                                                <li class=" list-inline-item tch_dtulli">
                                                <span class="txt_gray font14">{{$course->producer->first_name}} {{$course->producer->last_name}}</span>
                                                </li>
                                            </ul>

                                            </div>
                                            <div class="col-12 col-md-12 prpr_dt_col feature_dt_col text-left pb-2">
                                                <h6 class="font14 txt_dgray bold">{!! $course->price - (($course->price * $course->off) / 100) !!} تومان</h6>
                                                <span class="txt_gray font14"> {{$course->course_time}} <i class="far fa-clock pr-2 font14"></i></span>
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

        </div>
    </div>

    </div>
<div class="row edctsec_vidtxt mb-5">
        
    <div class="col-md-12 edcts_vidtxtcont">
        <div class="row edcts_vidtxtrow">
            <div class="col-md-12 edcts_vidtxtslcol pr-0">
                    <div class="owl-carousel educts_vidtxtsl owl-theme pb-2 pt-2">
                        @foreach ($frees as $free)
                        
                            <div class="edct_vidslitmcol item">
                                <div class="row edct_vidslitmrow">
                                    <div class="col-md-12 srvslist_rltcont">
                                        <div class="row srvslist_mrow ">
                                            <div class="col-md-12 srvprv_mcol">
                                                <a href="{{route('fvShow' , $free->id)}}"> 
                                                    <div class="row srvsprv_mrow m-0">
                                                        <div class="col-md-6 srvprv_rlttxtbxmcol m-auto">
                                                            <a href="{{route('fvShow' , $free->id)}}">
                                                                <div class="row srv_txtbxmrow">
                                                                    <div class="col-md-12 smmdtit_col m-auto pr-0">
                                                                        <h4 class="bbj font32 txt_grdrk">{{$free->title}}</h4>
                                                                    </div>
                                                                    <div class="col-md-12 crsl_txtcol txt_gray mb-2 pr-0">
                                                                        {!! $free->small_description !!}
                                                                    </div>
                                                                    <div class="col-md-12 but_srvprvmcol pl-0 ">
                                                                        <button class="learn-more but_srvprv" href="#">
                                                                            <span class="circle" aria-hidden="true">
                                                                            <span class="icon arroww"></span>
                                                                            </span>
                                                                            <span class="button-text">جزییات بیشتر</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-6 srvprv_bxmcol p-0 m-auto">
                                                            <div class="row srvprv_imgbxmrow m-0">
                                                                <div class="col-md-12 srvprv_rltbximgcol">

                                                                    <div class="row minmbx_slrow">

                                                                        <div class="col-md-12 minmbx_slvidcol p-0">
                                                                            <video id="my-player" class="my-player video-js vjs-theme-fantasy vjs-big-play-centered" poster="{{'/images/free/'.$free->cover}}"  style="object-fit:cover;" data-setup='{ "controls": true, "preload": "none" }'  >
                                                                                {{-- <source src="video/smpvid.mp4"> --}}
                                                                            </video>
                                                                                <!--<video src="video/smpvid.mp4" class="minmbx_slimg" style="object-fit:cover;" poster="img/sl_org4.jpg" ></video>
                                                                                                    </div>
                                                                                <div class="wrapper">

                                                                                    <video src="video/smpvid.mp4" class="video minmbx_slimg" style="object-fit:cover;" poster="img/sl_org4.jpg" controls="contorols"></video>
                                                                            <div class="playpause"></div>
                                                                            </div>-->

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
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
    </div>

<div class="row pckg_slsecrow mb-5">
    <div class="col-md-12 pckg_slcont">
        <div class="row pckg_slmrow">
        <!--<div class="col-md-2 slbn_mcol">
                <div class="row slbn_mrow">
                    <div class="col-md-12 slbn_col">
                        <div class="row slbn_row">
                            <div class="col-md-12 slbn_svgcol">
                                <svg class="slbn_svg" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g fill="#ccda45b0"><path d="m48 96v288h32v-32a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v32h192.37l-22.28-22.28a8 8 0 0 1 0-11.32l11.31-11.31a8 8 0 0 1 11.32 0l44.91 44.91h50.37v-288z"/><path d="m464 96v288h-50.37l-44.91-44.91a8 8 0 0 0 -11.32 0l-11.31 11.31a8 8 0 0 0 0 11.32l22.28 22.28h-192.37v-32a16 16 0 0 0 -16-16h-64a16 16 0 0 0 -16 16v32h-32v-288z"/></g><g fill="#697d38"><path d="m496 56h-480a8 8 0 0 0 -8 8v352a8 8 0 0 0 8 8h381.06l28.22 28.23a8.015 8.015 0 0 0 11.32 0l22.63-22.63a8.03 8.03 0 0 0 2.34-5.6h34.43a8 8 0 0 0 8-8v-352a8 8 0 0 0 -8-8zm-65.06 379.25-79.19-79.19 11.31-11.31 79.19 79.19zm-90.51-67.88 8.63 8.63h-165.06v-24a24.032 24.032 0 0 0 -24-24h-64a24.032 24.032 0 0 0 -24 24v24h-16v-272h400v272h-39.06l-42.57-42.57a16.006 16.006 0 0 0 -22.62 0l-11.32 11.32a16.006 16.006 0 0 0 0 22.62zm-172.43-15.37v24h-80v-24a8.011 8.011 0 0 1 8-8h64a8.011 8.011 0 0 1 8 8zm320 56h-39.06l-16-16h31.06a8 8 0 0 0 8-8v-288a8 8 0 0 0 -8-8h-416a8 8 0 0 0 -8 8v288a8 8 0 0 0 8 8h317.06l16 16h-357.06v-336h464z"/><path d="m269.858 183.077a30.2 30.2 0 0 1 -4 5.8c-25.712 30.854-23.329 57.74-12.525 72.612 11.42 15.718 32.476 20.4 53.642 11.937 6.317-2.526 11.038-2.639 14.031-.333 8.264 6.366 8.324 29.644 7.06 39.913a8 8 0 0 0 6.946 8.93 8.1 8.1 0 0 0 1 .063 8 8 0 0 0 7.928-7.009c.518-4.145 4.551-40.893-13.154-54.558-5.358-4.137-14.867-7.818-29.755-1.862-14.14 5.656-27.783 3.113-34.755-6.485-7.265-10-7.962-29.166 11.872-52.966 8.46-10.152 10.456-18.609 5.928-25.137-5.368-7.741-18.252-12.81-75.653 2.377-29.9 7.911-58.775 17.988-59.064 18.088a8 8 0 0 0 5.286 15.1c.261-.092 26.437-9.227 54.5-16.819 42.455-11.483 56.561-10.593 60.713-9.651z"/><path d="m122.343 211.343-8 8a8 8 0 0 0 11.314 11.314l8-8a8 8 0 0 0 -11.314-11.314z"/></g></g></svg>
                            </div>
                            <div class="col-md-12 lb_titcol">
                                <h5 class="bbj txt_org mb-0 font40">جدیدترین دوره ها</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>-->
            <div class="col-md-1 vrtcl_slbncol">
                <div class="row vrtcl_slbnrow">
                    <div class="col-md-12 slbn_svgcol m-auto">
                        <svg class="slbn_lsvg" xmlns="http://www.w3.org/2000/svg" id="Line" width="512" height="512" viewBox="0 0 64 64"><path d="M54,21H49v8.13A3.992,3.992,0,0,1,52,33v4a4,4,0,0,1-8,0V33a3.992,3.992,0,0,1,3-3.87V21H42a9.014,9.014,0,0,0-9,9V48a15,15,0,0,0,30,0V30A9.014,9.014,0,0,0,54,21Z" style="fill:#ffa500c7"/><path d="M49,16a3.009,3.009,0,0,0-3-3H31a3.009,3.009,0,0,0-3,3V52a1,1,0,0,1-1,1H25a1,1,0,0,1-1-1V43a1,1,0,0,0-2,0v9a3.009,3.009,0,0,0,3,3h2a3.009,3.009,0,0,0,3-3V16a1,1,0,0,1,1-1H46a1,1,0,0,1,1,1v5h2Z" style="fill:#ffa500c7"/><path d="M44.43,11.1l-21-10a1,1,0,0,0-.86,0l-21,10A1.052,1.052,0,0,0,1,12V31a1,1,0,0,0,2,0V13.584l3,1.429v9.751a2.983,2.983,0,0,0,1.658,2.683L22,34.618V43a1,1,0,0,0,2,0V34.618l14.342-7.171A2.983,2.983,0,0,0,40,24.764V15.013l4.43-2.11A1,1,0,0,0,44.43,11.1ZM38,24.764a1,1,0,0,1-.553.894L23,32.882,8.553,25.658A1,1,0,0,1,8,24.764v-8.8L22.57,22.9a1,1,0,0,0,.86,0L38,15.965ZM23,20.893,4.326,12,23,3.107,41.674,12Z" style="fill:#697d38"/></svg>

                    </div>
                    <div class="col-md-12 vrtcl_slbntxt_col">
                    <h6 class="vrtcl_slbntxt bbj txt_grdrk bold">جدیدترین پکیج های آموزشی</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-11 pckg_slmcol">
                <div class="owl-carousel pckg_sl owl-theme">
                <div class="pkg_pr_col item">
                    <a href="pkg_dtpage.html" class="txt_dgray pkg_pr_lnk">
                            <div class="row pkg_dtimg_row">
                                <div class="col-12 col-md-12 pkg_pr_imgcol  text-center">
                                        <img class="pkg_pr_img" src="img/prjexp45.jpg">
                                </div>
                                <div class="col-md-10 pkg_dtscol">
                                    <div class="row pkg_dtscol_row">
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col pb-2">
                                            <h6 class="font15 txt_dgray bold">نام پکیج در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col text-right mb-2">
                                            <h6 class="font14 bold txt_gray ">650,000 تومان</h6>
                                        </div>
                                          <div class="col-12 col-md-8 but_coll pl-0">
                                    <button class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 btn_more text-right">
                                            <span class="d-inline-block font12 bold txt_dgary">جزییات بیشتر</span>

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
                <div class="pkg_pr_col item">
                    <a href="pkg_dtpage.html" class="txt_dgray pkg_pr_lnk">
                            <div class="row pkg_dtimg_row">
                                <div class="col-12 col-md-12 pkg_pr_imgcol  text-center">
                                        <img class="pkg_pr_img" src="img/pkg3.jpg">
                                </div>
                                <div class="col-md-10 pkg_dtscol">
                                    <div class="row pkg_dtscol_row">
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col pb-2">
                                            <h6 class="font15 txt_dgray bold">نام پکیج در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col text-right mb-2">
                                            <h6 class="font14 bold txt_gray ">650,000 تومان</h6>
                                        </div>
                                          <div class="col-12 col-md-8 but_coll pl-0">
                                    <button class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 btn_more text-right">
                                            <span class="d-inline-block font12 bold txt_dgary">جزییات بیشتر</span>

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
                <div class="pkg_pr_col item">
                    <a href="pkg_dtpage.html" class="txt_dgray pkg_pr_lnk">
                            <div class="row pkg_dtimg_row">
                                <div class="col-12 col-md-12 pkg_pr_imgcol  text-center">
                                        <img class="pkg_pr_img" src="img/pkg8.jpg">
                                </div>
                                <div class="col-md-10 pkg_dtscol">
                                    <div class="row pkg_dtscol_row">
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col pb-2">
                                            <h6 class="font15 txt_dgray bold">نام پکیج در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col text-right mb-2">
                                            <h6 class="font14 bold txt_gray ">650,000 تومان</h6>
                                        </div>
                                          <div class="col-12 col-md-8 but_coll pl-0">
                                    <button class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 btn_more text-right">
                                            <span class="d-inline-block font12 bold txt_dgary">جزییات بیشتر</span>

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
                <div class="pkg_pr_col item">
                    <a href="pkg_dtpage.html" class="txt_dgray pkg_pr_lnk">
                            <div class="row pkg_dtimg_row">
                                <div class="col-12 col-md-12 pkg_pr_imgcol  text-center">
                                        <img class="pkg_pr_img" src="img/pkg4.jpg">
                                </div>
                                <div class="col-md-10 pkg_dtscol">
                                    <div class="row pkg_dtscol_row">
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col pb-2">
                                            <h6 class="font15 txt_dgray bold">نام پکیج در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col text-right mb-2">
                                            <h6 class="font14 bold txt_gray ">650,000 تومان</h6>
                                        </div>
                                          <div class="col-12 col-md-8 but_coll pl-0">
                                    <button class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 btn_more text-right">
                                            <span class="d-inline-block font12 bold txt_dgary">جزییات بیشتر</span>

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
                <div class="pkg_pr_col item">
                    <a href="pkg_dtpage.html" class="txt_dgray pkg_pr_lnk">
                            <div class="row pkg_dtimg_row">
                                <div class="col-12 col-md-12 pkg_pr_imgcol  text-center">
                                        <img class="pkg_pr_img" src="img/prjexp45.jpg">
                                </div>
                                <div class="col-md-10 pkg_dtscol">
                                    <div class="row pkg_dtscol_row">
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col pb-2">
                                            <h6 class="font15 txt_dgray bold">نام پکیج در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col text-right mb-2">
                                            <h6 class="font14 bold txt_gray ">650,000 تومان</h6>
                                        </div>
                                          <div class="col-12 col-md-8 but_coll pl-0">
                                    <button class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 btn_more text-right">
                                            <span class="d-inline-block font12 bold txt_dgary">جزییات بیشتر</span>

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
                <div class="pkg_pr_col item">
                    <a href="pkg_dtpage.html" class="txt_dgray pkg_pr_lnk">
                            <div class="row pkg_dtimg_row">
                                <div class="col-12 col-md-12 pkg_pr_imgcol  text-center">
                                        <img class="pkg_pr_img" src="img/prjexp45.jpg">
                                </div>
                                <div class="col-md-10 pkg_dtscol">
                                    <div class="row pkg_dtscol_row">
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col pb-2">
                                            <h6 class="font15 txt_dgray bold">نام پکیج در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 pkg_dtcol feature_dt_col text-right mb-2">
                                            <h6 class="font14 bold txt_gray ">650,000 تومان</h6>
                                        </div>
                                          <div class="col-12 col-md-8 but_coll pl-0">
                                    <button class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 btn_more text-right">
                                            <span class="d-inline-block font12 bold txt_dgary">جزییات بیشتر</span>

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
            </div>

        </div>
    </div>
</div>
</div>
    <div class="row pdcastsl_mrow pt-5 mb-5 ">
        <div class="col-12 col-md-12 slider_spoffmcol">
        <div class="row slider_spoffrow">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2 slbn_mcol">
                        <div class="row slbn_mrow back_crm">
                            <div class="col-md-12 slbn_col">
                                <div class="row slbn_row ">
                                    <div class="col-md-12 slbn_svgcol">
                                        <svg class="slbn_svg" id="Line" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m62 32.5h-1a1 1 0 0 0 -1 1v2h-3v-9a9.011 9.011 0 0 0 -9-9h-8a9.011 9.011 0 0 0 -9 9v9h-3v-1.663a1 1 0 0 0 -1-1h-1a1 1 0 0 0 -1 1v8.663a13.015 13.015 0 0 0 13 13h2v2h-3a3 3 0 0 0 -3 3 1 1 0 0 0 1 1h18a1 1 0 0 0 1-1 3 3 0 0 0 -3-3h-3v-2h2a13.015 13.015 0 0 0 13-13v-9a1 1 0 0 0 -1-1zm-24-6h12a1 1 0 0 1 0 2h-12a1 1 0 0 1 0-2zm0 6h12a1 1 0 0 1 0 2h-12a1 1 0 0 1 0-2zm22 9a11.013 11.013 0 0 1 -11 11h-10a11.013 11.013 0 0 1 -11-11v-4h3v3a9.011 9.011 0 0 0 9 9h8a9.011 9.011 0 0 0 9-9v-3h3z" fill="#ffa500c7"/><g fill="#697d38"><path d="m14 14.5a1 1 0 0 0 -1 1v12a1 1 0 0 0 2 0v-12a1 1 0 0 0 -1-1z"/><path d="m18 11.5a1 1 0 0 0 -1 1v18a1 1 0 0 0 2 0v-18a1 1 0 0 0 -1-1z"/><path d="m22 14.5a1 1 0 0 0 -1 1v12a1 1 0 0 0 2 0v-12a1 1 0 0 0 -1-1z"/><path d="m26 17.5a1 1 0 0 0 -1 1v6a1 1 0 0 0 2 0v-6a1 1 0 0 0 -1-1z"/><path d="m10 17.5a1 1 0 0 0 -1 1v6a1 1 0 0 0 2 0v-6a1 1 0 0 0 -1-1z"/><path d="m48 2.5h-44a3 3 0 0 0 -3 3v32a3 3 0 0 0 3 3h23.76a24.972 24.972 0 0 0 16.24 6 1 1 0 0 0 0-2 5.008 5.008 0 0 1 -4.9-4h8.9a3 3 0 0 0 3-3v-32a3 3 0 0 0 -3-3zm1 35a1 1 0 0 1 -1 1h-10a1 1 0 0 0 -1 1 6.965 6.965 0 0 0 1.507 4.334 22.983 22.983 0 0 1 -9.707-5.084 1 1 0 0 0 -.661-.25h-24.139a1 1 0 0 1 -1-1v-32a1 1 0 0 1 1-1h44a1 1 0 0 1 1 1z"/><path d="m38 14.5a1 1 0 0 0 -1 1v12a1 1 0 0 0 2 0v-12a1 1 0 0 0 -1-1z"/><path d="m30 14.5a1 1 0 0 0 -1 1v12a1 1 0 0 0 2 0v-12a1 1 0 0 0 -1-1z"/><path d="m42 17.5a1 1 0 0 0 -1 1v6a1 1 0 0 0 2 0v-6a1 1 0 0 0 -1-1z"/><path d="m34 11.5a1 1 0 0 0 -1 1v18a1 1 0 0 0 2 0v-18a1 1 0 0 0 -1-1z"/></g></svg>
                                    </div>
                                    <div class="col-md-12 lb_titcol">
                                        <h5 class="bbj mb-0 font40 text-center txt_grdrk">پادکست </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- podcast --}}
                    <div class="col-md-10 columns splofs_slcontrgt">
                        <div class="owl-carousel pdcst_slcont owl-theme">
                            
                            @foreach ($podcasts as $podcast)
                                <div class="pdcst_pr_col item">
                                            
                                    <a href="{{route('podcastCollection' , $podcast->id)}}" class="txt_dgray">
                                        <div class="row pdcst_pr_row  ">
                                            <div class="col-12 col-md-12 pdcst_pr_img_col pb-2 text-center">
                                                <img class="pdcst_img" src="{{'/images/podcasts/'.$podcast->image}}">
                                                <svg class="pdcst_icocol" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="163.861px" height="163.861px" viewBox="0 0 163.861 163.861" style="enable-background:new 0 0 163.861 163.861;"
                                                    xml:space="preserve">
                                                    <g>
                                                    <path d="M34.857,3.613C20.084-4.861,8.107,2.081,8.107,19.106v125.637c0,17.042,11.977,23.975,26.75,15.509L144.67,97.275
                                                        c14.778-8.477,14.778-22.211,0-30.686L34.857,3.613z"/>
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
                                                <div class="row pdcst_dts_row">
                                                    <div class="col-12 col-md-12 pdcst_dt_col feature_dt_col">
                                                        <h6 class="font14 txt_dgray bold">{{$podcast->title}}</h6>
                                                    </div>
                                                    {{-- <div class="col-12 col-md-12 pdcst_dt_col feature_dt_col ">
                                                        <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                                            <li class=" list-inline-item tch_dtulli">
                                                                <span class="txt_gray font14">نام گوینده</span>
                                                            </li>
                                                        </ul>
                                                    </div> --}}


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
    </div>

    </div>
<div class="row blogpsts_slsecrow pt-5">
    <div class="col-md-12 blogpsts_slcont">
        <div class="row mb-2 m-0">
            <div class="col-6 lb_titcol">
                <h6 class="bold m-auto bbj font40 txt_grdrk">آخرین مطالب بلاگ</h6>
            </div>
                    <div class="col-md-3 offset-md-3 mre_butcol">
                        <a href="#" class="txt_dgray">
                            <div class="row mre_butrow">
                                <div class="col-md-6 text-center m-autoz">
                                    <h6 class="bold mb-0 bbj font35 txt_grdrk"> همه موارد </h6>
                                </div>
                                <div class="col-md-6 text-left m-autoz">
                                   <svg class="dl_svgicon pr-1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
<g>
    <path d="M501.333,245.333H36.417l141.792-141.792c4.167-4.167,4.167-10.917,0-15.083c-4.167-4.167-10.917-4.167-15.083,0l-160,160
        c-4.167,4.167-4.167,10.917,0,15.083l160,160c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125
        c4.167-4.167,4.167-10.917,0-15.083L36.417,266.667h464.917c5.896,0,10.667-4.771,10.667-10.667S507.229,245.333,501.333,245.333z
        "/>
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
        
    {{-- blog --}}
        <div class="row blogpsts_slmrow">

        
            <div class="col-md-12 blogpsts_slcol">
                <div class="row blogpsts_slrow m-0">
                
                    @foreach ($blogs as $blog)
                        
                        <div class="blogpst_mcol col-md-6">
                            <a href="{{route('blogShow' , $blog->id)}}" class="txt_dgray pkg_pr_lnk">
                                <div class="row blgpst_dtimg_row">
                                    <div class="col-12 col-md-6 blgpst_indx_imgcol  text-center" style="background-image: url({{url('/images/blogs/'.$blog->image)}})">
                                            <!--<img class="blgpst_pr_img" src="img/prjexp45.jpg">-->
                                    </div>
                                    <div class="col-md-6  blgpst_pr_dtsmcol">
                                        <div class="row  blgpst_pr_dts_mrow">
                                            <div class="col-md-12 blgpst_pr_dtscol">
                                                <div class="row  blgpst_pr_dts_row">

                                                    <div class="col-md-12 blgpst_pr_txtcol ">
                                                        <h6 class="font15 txt_dgray mb-0 bold">{{$blog->title}}</h6>
                                                    </div>
                                                    <div class="col-md-12 blgpst_pr_txtcol">
                                                        <span class="font12 txt_pink">{{$blog->category->title}}</span>
                                                    </div>
                                                    <div class="col-md-12 blgpst_pr_txtcol font12 txt_gray pt-2">
                                                        <?php echo $blog->desc;?>
                                                    </div>
                                                    <div class="col-12 col-md-7 but_coll pl-0">
                                                        <button class="btn btn-raised btn_cuswhitee btn-sm btn_full w-100 btn_moree">
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



