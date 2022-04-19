
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
         <div class="col-md-2 catdt_mcol">
            <a href="crslists_page.html">
                <div class="row catdt_mrow">
                    <div class="col-md-11 catdt_col">
                        <div class="row catdt_row">
                            <div class="col-md-8 icosvg_col">
                                <svg class="ico_svg" id="line" viewBox="0 0 64 64"  xmlns="http://www.w3.org/2000/svg"><g fill="#ffa500c7"><path d="m59.125 46.757h3.875a1 1 0 0 0 0-2h-3.875a1 1 0 0 0 0 2z"/><path d="m63.216 59.789-3.875-.859a1 1 0 1 0 -.433 1.952l3.875.859a1 1 0 1 0 .433-1.952z"/><path d="m59.341 32.583 3.875-.86a1 1 0 1 0 -.433-1.952l-3.875.86a1 1 0 1 0 .433 1.952z"/><path d="m55.034 29.28-32.534 7.213v-1.255a1 1 0 0 0 -1-1h-3a3 3 0 0 0 -3 3v17.036a3 3 0 0 0 3 3h3a1 1 0 0 0 1-1v-1.254l3 .665v3.984a2.981 2.981 0 0 0 2.351 2.931l6 1.33a3 3 0 0 0 3.649-2.93v-2.655l17.534 3.888a1 1 0 0 0 1.216-.976v-31a1 1 0 0 0 -1.216-.977zm-34.534 8.458v17.536h-2a1 1 0 0 1 -1-1v-17.036a1 1 0 0 1 1-1h2zm15 23.262a1 1 0 0 1 -1.215.976l-6-1.33a.994.994 0 0 1 -.785-.976v-3.54l8 1.773z"/></g><path d="m47.5 14.56h-36.673l36.484-8.089a1 1 0 0 0 .761-1.192l-.65-2.93a3 3 0 0 0 -3.578-2.278l-41.493 9.198a3 3 0 0 0 -2.279 3.578l.628 2.821v29.832a3 3 0 0 0 3 3h41.8a3 3 0 0 0 3-3v-29.94a1 1 0 0 0 -1-1zm-3.223-12.537a1 1 0 0 1 1.193.759l.43 1.954-3.684.816-3.576-2.28zm-8.4 1.861 3.579 2.28-7.366 1.636-3.579-2.28zm-10.127 2.246 3.579 2.28-7.369 1.633-3.578-2.28zm-10.129 2.246 3.579 2.279-7.368 1.634-3.578-2.28zm-13.6 4.038a1 1 0 0 1 .76-1.193l2.708-.6 3.581 2.279-6.613 1.467zm44.479 33.086a1 1 0 0 1 -1 1h-41.8a1 1 0 0 1 -1-1v-28.94h43.8z" fill="#697d38"/><path d="m6.7 29.335h35.8a1 1 0 0 0 0-2h-16.9v-5.475a1 1 0 0 0 -2 0v5.475h-16.9a1 1 0 0 0 0 2z" fill="#697d38"/><path d="m8.7 42.111h31.8a3 3 0 0 0 3-3v-4.388a1 1 0 0 0 -2 0v4.388a1 1 0 0 1 -1 1h-31.8a1 1 0 0 1 -1-1v-4.388a1 1 0 0 0 -2 0v4.388a3 3 0 0 0 3 3z" fill="#697d38"/></svg>

                </div>
                <div class="col-md-12 cattxt_col">
                    <h6 class="txt_dgrn font14 bold">نمایش خلاق</h6>
                </div>
                        </div>
                    </div>


             </div>
             </a>
         </div>
         <div class="col-md-2 catdt_mcol">
            <a href="crslists_page.html">
                <div class="row catdt_mrow">
                    <div class="col-md-11 catdt_col">
                        <div class="row catdt_row">
                            <div class="col-md-8 icosvg_col">
                                <svg class="ico_svg" id="Line" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m61 48h-11v-32a3 3 0 0 0 -3-3h-28a3 3 0 0 0 -3 3v44a3 3 0 0 0 3 3h36a7.008 7.008 0 0 0 7-7v-7a1 1 0 0 0 -1-1zm-42 13a1 1 0 0 1 -1-1v-44a1 1 0 0 1 1-1h28a1 1 0 0 1 1 1v40a6.973 6.973 0 0 0 2.111 5zm41-5a5 5 0 0 1 -10 0v-6h10z" fill="#ffa500c7"/><rect fill="#ffa500c7" height="40" rx="3" width="24" x="21" y="18"/><g fill="#697d38"><path d="m42 1h-28a3 3 0 0 0 -3 3v5h-6a3 3 0 0 0 -3 3v36a3 3 0 0 0 3 3h28a3 3 0 0 0 3-3v-5h6a3 3 0 0 0 3-3v-36a3 3 0 0 0 -3-3zm-8 47a1 1 0 0 1 -1 1h-28a1 1 0 0 1 -1-1v-36a1 1 0 0 1 1-1h28a1 1 0 0 1 1 1zm9-8a1 1 0 0 1 -1 1h-6v-29a3 3 0 0 0 -3-3h-20v-5a1 1 0 0 1 1-1h28a1 1 0 0 1 1 1z"/><path d="m27 18h-16a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2z"/><path d="m27 26h-16a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2z"/><path d="m27 34h-16a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2z"/></g></svg>
                </div>
                <div class="col-md-12 cattxt_col">
                    <h6 class="txt_dgrn font14 bold">داستان نویسی</h6>
                </div>
                        </div>
                    </div>


             </div>
             </a>
         </div>
         <div class="col-md-2 catdt_mcol">
            <a href="crslists_page.html">
                <div class="row catdt_mrow">
                    <div class="col-md-11 catdt_col">
                        <div class="row catdt_row">
                            <div class="col-md-8 icosvg_col">
                                <svg class="ico_svg" id="line" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><g fill="#ffa500c7"><path d="m29.208 29.25h4.959v6.55h-4.959z"/><path d="m57.042 35.8h6.958v-3.55a3 3 0 0 0 -3-3h-3.958z"/><path d="m36.167 29.25h4.958v6.55h-4.958z"/><path d="m27.208 35.8v-6.55h-3.958a3 3 0 0 0 -3 3v3.55z"/><path d="m43.125 29.25h4.958v6.55h-4.958z"/><path d="m50.083 29.25h4.959v6.55h-4.959z"/><path d="m64 61v-23.2h-43.75v23.2a3 3 0 0 0 3 3h37.75a3 3 0 0 0 3-3zm-33.243-3.55a1 1 0 0 1 1-1h20.736a1 1 0 1 1 0 2h-20.736a1 1 0 0 1 -1-1zm26.743-6.55a1 1 0 0 1 -1 1h-28.75a1 1 0 0 1 0-2h5.625v-5.55a1 1 0 1 1 2 0v5.55h13.5v-5.55a1 1 0 1 1 2 0v5.55h5.625a1 1 0 0 1 1 1z"/></g><path d="m41.892 46.58-18.09-7.7 18.085-7.7a1.04 1.04 0 0 0 .608-.9c0-.008.005-.015.005-.024v-4a3 3 0 0 0 -3-3v-20.256a3 3 0 0 0 -3-3h-30.5a3 3 0 0 0 -3 3v20.25a3 3 0 0 0 -3 3v4a1.011 1.011 0 0 0 .607.919l18.086 7.7-18.084 7.711a1 1 0 1 0 .783 1.84l19.858-8.458 19.859 8.458a1 1 0 0 0 .783-1.84zm-36.892-43.58a1 1 0 0 1 1-1h30.5a1 1 0 0 1 1 1v20.25h-32.5zm-3 23.25a1 1 0 0 1 1-1h36.5a1 1 0 0 1 1 1v3h-38.5zm3.9 5h30.7l-15.35 6.538z" fill="#697d38"/></svg>

                            </div>
                <div class="col-md-12 cattxt_col">
                    <h6 class="txt_dgrn font14 bold">نمایشنامه نویسی</h6>
                </div>
                        </div>
                    </div>


             </div>
             </a>
         </div>
         <div class="col-md-2 catdt_mcol">
            <a href="crslists_page.html">
                <div class="row catdt_mrow">
                    <div class="col-md-11 catdt_col">
                        <div class="row catdt_row">
                            <div class="col-md-8 icosvg_col">
                    
                    <svg id="Line" class="ico_svg" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><g fill="#ffa500c7"><path d="m13 55h50v-18h-50zm19-12.229a2.854 2.854 0 0 1 4.191-2.447l6.29 3.229a2.732 2.732 0 0 1 0 4.894l-6.29 3.229a2.853 2.853 0 0 1 -4.191-2.447z"/><path d="m23 29h6v6h-6z"/><path d="m31 29h6v6h-6z"/><path d="m47 35h6v-5.75a1.449 1.449 0 0 1 .04-.25h-6.08a1.449 1.449 0 0 1 .04.25z"/><path d="m60 29h-5.04a1.449 1.449 0 0 1 .04.25v5.75h8v-3a3 3 0 0 0 -3-3z"/><path d="m45 29.25a1.449 1.449 0 0 1 .04-.25h-6.04v6h6z"/><path d="m21 29h-5a3 3 0 0 0 -3 3v3h8z"/><path d="m39 57h6v6h-6z"/><path d="m23 57h6v6h-6z"/><path d="m31 57h6v6h-6z"/><path d="m47 57h6v6h-6z"/><path d="m55 63h5a3 3 0 0 0 3-3v-3h-8z"/><path d="m13 60a3 3 0 0 0 3 3h5v-6h-8z"/></g><path d="m19.225 46.455a20.993 20.993 0 0 1 2.184-41.278l-.116.116a1 1 0 0 0 1.414 1.414l2-2a1 1 0 0 0 0-1.416l-2-2a1 1 0 0 0 -1.414 1.414l.408.408a23 23 0 0 0 -2.929 45.287 1 1 0 1 0 .453-1.947z" fill="#697d38"/><path d="m47 26a22.89 22.89 0 0 0 -17.774-22.4 1 1 0 1 0 -.453 1.947 20.993 20.993 0 0 1 -2.182 41.279l.116-.116a1 1 0 0 0 -1.414-1.414l-2 2a1 1 0 0 0 0 1.416l2 2a1 1 0 0 0 1.414-1.414l-.408-.408a23.031 23.031 0 0 0 20.701-22.89z" fill="#697d38"/><path d="m23.445 10.168-12 8a1.063 1.063 0 0 0 -.445.832v14a1 1 0 0 0 .445.832l12 8a1.016 1.016 0 0 0 1.11 0l12-8a1 1 0 0 0 .445-.832v-14a1.056 1.056 0 0 0 -.445-.832l-12-8a1 1 0 0 0 -1.11 0zm-10.445 10.7 10 6.667v11.6l-10-6.67zm12 18.263v-11.6l10-6.667v11.6zm-1-13.331-10.2-6.8 10.2-6.8 10.2 6.8z" fill="#697d38"/></svg>			
                </div>
                <div class="col-md-12 cattxt_col">
                    <h6 class="txt_dgrn font14 bold">تدوین</h6>
                </div>
                        </div>
                    </div>


             </div>
             </a>
         </div>
         <div class="col-md-2 catdt_mcol">
            <a href="crslists_page.html">
                <div class="row catdt_mrow">
                    <div class="col-md-11 catdt_col">
                        <div class="row catdt_row">
                            <div class="col-md-8 icosvg_col">
                                
                                <svg class="ico_svg" id="Line" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="m58 52.5h-24a5 5 0 0 0 0 10h24a5 5 0 0 0 0-10z" fill="#ffa500c7"/><path d="m37.2 49.09a1 1 0 0 0 .8.41h16a1 1 0 0 0 .8-.41l8-11.22a1 1 0 0 0 0-1.17l-15.8-24.2v13.89a2.89 2.89 0 0 0 1.2 2.4 4 4 0 1 1 -4.4 0 2.89 2.89 0 0 0 1.2-2.4v-13.89l-15.83 24.2a1 1 0 0 0 0 1.17z" fill="#ffa500c7"/><g fill="#697d38"><path d="m5 9.5a4 4 0 0 0 3.86-3h13.28a4.16 4.16 0 0 0 .62 1.33 16 16 0 0 0 -12.76 14.8 4 4 0 1 0 2 0 14 14 0 0 1 27.92 0 4 4 0 1 0 2 0 16 16 0 0 0 -12.68-14.8 4.16 4.16 0 0 0 .62-1.33h13.28a4 4 0 1 0 0-2h-13.28a4 4 0 0 0 -7.72 0h-13.28a4 4 0 1 0 -3.86 5zm8 17a2 2 0 1 1 -2-2 2 2 0 0 1 2 2zm30 0a2 2 0 1 1 -2-2 2 2 0 0 1 2 2zm4-23a2 2 0 1 1 -2 2 2 2 0 0 1 2-2zm-21 0a2 2 0 1 1 -2 2 2 2 0 0 1 2-2zm-21 0a2 2 0 1 1 -2 2 2 2 0 0 1 2-2z"/><path d="m46 42.5a4 4 0 0 0 -3.84 3 16 16 0 0 1 -15.16-15.16 4 4 0 1 0 -2.08 0 16 16 0 0 1 -15.08 15.12 4 4 0 1 0 0 2 18 18 0 0 0 16.16-12.1 18 18 0 0 0 16.13 12.1 4 4 0 1 0 3.87-5zm-40 6a2 2 0 1 1 2-2 2 2 0 0 1 -2 2zm18-22a2 2 0 1 1 2 2 2 2 0 0 1 -2-2zm22 22a2 2 0 1 1 2-2 2 2 0 0 1 -2 2z"/></g></svg>

                </div>
                <div class="col-md-12 cattxt_col">
                    <h6 class="txt_dgrn font14 bold">فتوشاپ</h6>
                </div>
                        </div>
                    </div>


             </div>
             </a>
         </div>
         <div class="col-md-2 catdt_mcol">
            <a href="crslists_page.html">
                <div class="row catdt_mrow">
                    <div class="col-md-11 catdt_col">
                        <div class="row catdt_row">
                            <div class="col-md-8 icosvg_col">
                                <svg class="ico_svg" id="Icons"  viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><path d="m57.5 41.42v-3.42a18 18 0 0 0 -36 0v3.42a5 5 0 0 0 -3 4.58v9a5 5 0 0 0 5 5h3.05a3.49 3.49 0 0 0 7-.5v-18a3.49 3.49 0 0 0 -6-2.44v-1.06a12 12 0 0 1 24 0v1.06a3.49 3.49 0 0 0 -6 2.44v18a3.49 3.49 0 0 0 7 .5h3a5 5 0 0 0 5-5v-9a5 5 0 0 0 -3.05-4.58zm-4-3.42h2v3h-2zm-30 0h2v3h-2zm5 3.5a1.5 1.5 0 0 1 3 0v18a1.5 1.5 0 0 1 -3 0zm22 18a1.5 1.5 0 0 1 -3 0v-18a1.5 1.5 0 0 1 3 0z" fill="#ffa500c7"/><path d="m28.5 17h-2v-7a9 9 0 0 0 -18 0v7h-2a3 3 0 0 0 -3 3v6a14 14 0 0 0 13 14v4h-5a3 3 0 0 0 -3 3v2a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2a3 3 0 0 0 -3-3h-5v-4a14 14 0 0 0 13-14v-6a3 3 0 0 0 -3-3zm-4 30v2h-14v-2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-7-44a7 7 0 0 1 6.92 6h-3.92a1 1 0 0 0 0 2h4v6h-4a1 1 0 0 0 0 2h4v6h-4a1 1 0 0 0 0 2h3.92a7 7 0 0 1 -13.84 0h3.92a1 1 0 0 0 0-2h-4v-6h4a1 1 0 0 0 0-2h-4v-6h4a1 1 0 0 0 0-2h-3.92a7 7 0 0 1 6.92-6zm12 23a12 12 0 0 1 -24 0v-6a1 1 0 0 1 1-1h2v7a9 9 0 0 0 18 0v-7h2a1 1 0 0 1 1 1z" fill="#697d38"/></svg>
                </div>
                <div class="col-md-12 cattxt_col">
                    <h6 class="txt_dgrn font14 bold">پادکست سازی</h6>

                            </div>
                        </div>
                    </div>


             </div>
             </a>
         </div>

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
        <!--<div class="row mb-2 m-0">
                    <div class="col-6 lb_titcol">
                        <h5 class="txt_gld bold m-auto">جدیدترین دوره ها</h5>
                    </div>
                    <div class="col-md-3 offset-md-3 mre_butcol">
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
                    </div>
                </div>-->
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
                <div class="product_pr_col item">
                            <div class="row prd_pr_row  ">
                                <div class="col-12 col-md-12 prd_pr_img_col pb-2 text-center">
                                    <a href="crs_dtpage.html" class="txt_dgray">
                                    <img class="prd_pr_img" src="img/crs01.jpg">
                                    </a>
                                </div>
                                <div class="col-12 col-md-12 prd_pr_dt_col ">
                                    <div class="row prpr_dts_row">
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <h6 class="font14 txt_dgray bold">عنوان دوره در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                            <li class=" list-inline-item tch_dtulli">
                                             <img src="img/avtfm1.png" class="post_itmsldateimg">
                                            </li>
                                            <li class=" list-inline-item tch_dtulli">
                                             <span class="txt_gray font14">نام استاد</span>
                                            </li>
                                        </ul>

                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col text-left pb-2">
                                            <h6 class="font14 txt_dgray bold">650,000 تومان</h6>
                                            <span class="txt_gray font14"> 04:30:56 <i class="far fa-clock pr-2 font14"></i></span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>
                <div class="product_pr_col item">
                            <div class="row prd_pr_row  ">
                                <div class="col-12 col-md-12 prd_pr_img_col pb-2 text-center">
                                    <a href="crs_dtpage.html" class="txt_dgray">
                                    <img class="prd_pr_img" src="img/crs05.jpg">

                                    </a>
                                </div>
                                <div class="col-12 col-md-12 prd_pr_dt_col ">
                                    <div class="row prpr_dts_row">
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <h6 class="font14 txt_dgray bold">عنوان دوره در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                            <li class=" list-inline-item tch_dtulli">
                                             <img src="img/avtfm1.png" class="post_itmsldateimg">
                                            </li>
                                            <li class=" list-inline-item tch_dtulli">
                                             <span class="txt_gray font14">نام استاد</span>
                                            </li>
                                        </ul>

                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col text-left pb-2">
                                            <h6 class="font14 txt_dgray bold">650,000 تومان</h6>
                                            <span class="txt_gray font14"> 04:30:56 <i class="far fa-clock pr-2 font14"></i></span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>
                <div class="product_pr_col item">
                            <div class="row prd_pr_row  ">
                                <div class="col-12 col-md-12 prd_pr_img_col pb-2 text-center">
                                    <a href="crs_dtpage.html" class="txt_dgray">
                                    <img class="prd_pr_img" src="img/crs04.jpg">

                                    </a>
                                </div>
                                <div class="col-12 col-md-12 prd_pr_dt_col ">
                                    <div class="row prpr_dts_row">
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <h6 class="font14 txt_dgray bold">عنوان دوره در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                            <li class=" list-inline-item tch_dtulli">
                                             <img src="img/avtfm1.png" class="post_itmsldateimg">
                                            </li>
                                            <li class=" list-inline-item tch_dtulli">
                                             <span class="txt_gray font14">نام استاد</span>
                                            </li>
                                        </ul>

                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col text-left pb-2">
                                            <h6 class="font14 txt_dgray bold">650,000 تومان</h6>
                                            <span class="txt_gray font14"> 04:30:56 <i class="far fa-clock pr-2 font14"></i></span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>
                <div class="product_pr_col item">
                            <div class="row prd_pr_row  ">
                                <div class="col-12 col-md-12 prd_pr_img_col pb-2 text-center">
                                    <a href="crs_dtpage.html" class="txt_dgray">
                                    <img class="prd_pr_img" src="img/crs03.jpg">

                                    </a>
                                </div>
                                <div class="col-12 col-md-12 prd_pr_dt_col ">
                                    <div class="row prpr_dts_row">
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <h6 class="font14 txt_dgray bold">عنوان دوره در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                            <li class=" list-inline-item tch_dtulli">
                                             <img src="img/avtfm1.png" class="post_itmsldateimg">
                                            </li>
                                            <li class=" list-inline-item tch_dtulli">
                                             <span class="txt_gray font14">نام استاد</span>
                                            </li>
                                        </ul>

                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col text-left pb-2">
                                            <h6 class="font14 txt_dgray bold">650,000 تومان</h6>
                                            <span class="txt_gray font14"> 04:30:56 <i class="far fa-clock pr-2 font14"></i></span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>
                <div class="product_pr_col item">
                            <div class="row prd_pr_row  ">
                                <div class="col-12 col-md-12 prd_pr_img_col pb-2 text-center">
                                    <a href="crs_dtpage.html" class="txt_dgray">
                                    <img class="prd_pr_img" src="img/crs02.jpg">

                                    </a>
                                </div>
                                <div class="col-12 col-md-12 prd_pr_dt_col ">
                                    <div class="row prpr_dts_row">
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <h6 class="font14 txt_dgray bold">عنوان دوره در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                            <li class=" list-inline-item tch_dtulli">
                                             <img src="img/avtfm1.png" class="post_itmsldateimg">
                                            </li>
                                            <li class=" list-inline-item tch_dtulli">
                                             <span class="txt_gray font14">نام استاد</span>
                                            </li>
                                        </ul>

                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col text-left pb-2">
                                            <h6 class="font14 txt_dgray bold">650,000 تومان</h6>
                                            <span class="txt_gray font14"> 04:30:56 <i class="far fa-clock pr-2 font14"></i></span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>
                <div class="product_pr_col item">
                            <div class="row prd_pr_row  ">
                                <div class="col-12 col-md-12 prd_pr_img_col pb-2 text-center">
                                    <a href="crs_dtpage.html" class="txt_dgray">
                                    <img class="prd_pr_img" src="img/crs03.jpg">

                                    </a>
                                </div>
                                <div class="col-12 col-md-12 prd_pr_dt_col ">
                                    <div class="row prpr_dts_row">
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <h6 class="font14 txt_dgray bold">عنوان دوره در این مکان قرار می گیرد</h6>
                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col">
                                            <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                            <li class=" list-inline-item tch_dtulli">
                                             <img src="img/avtfm1.png" class="post_itmsldateimg">
                                            </li>
                                            <li class=" list-inline-item tch_dtulli">
                                             <span class="txt_gray font14">نام استاد</span>
                                            </li>
                                        </ul>

                                        </div>
                                        <div class="col-12 col-md-12 prpr_dt_col feature_dt_col text-left pb-2">
                                            <h6 class="font14 txt_dgray bold">650,000 تومان</h6>
                                            <span class="txt_gray font14"> 04:30:56 <i class="far fa-clock pr-2 font14"></i></span>
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



