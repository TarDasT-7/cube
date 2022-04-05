@extends('layouts.site')

@section('title', 'درباره ما  ')

@section('content')
    <section class="container-fluid prjdt_mainsec pb-5">

        <div class="row artcl_mainrow m-0 justify-content-center" id="artcl_mainsec">
            <div class="col-md-12 pkgdt_cont">
                <div class="row pkgdt_infosmrow">
                    <div class="pkgdt_infosmcol col-md-12">
                        <div class="row pkgdt_infosrow m-0">
                            <div class="col-md-12 pkgdt_infoscol">
                                <div class="row pkgdt_infodtrow">
                                    <div class="col-md-6 pkgdt_txtmcol">
                                        <div class="row pkgdt_txtmrow">
                                            <div class="col-md-12 smmdtit_col mb-2">
                                                <h4 class="bbj font32 txt_srmp">{{$advertisement->title}}</h4>
                                            </div>
                                            <div class="col-12 col-md-12 pkg_dtcol feature_dt_col pb-3 font13">
                                                <span class="txt_gray d-block pb-1">{{$advertisement->category}}</span>
                                                <span class="txt_gray d-block">{{$advertisement->client}}</span>
                                            </div>

                                            <div class="col-md-12 crsl_txtcol txt_dgray mb-2">
                                           {!! $advertisement->desc !!}

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 pkgdt_vidmcol m-auto">
                                        <div class="row pkgdt_vidrow  justify-content-center">
                                            <div class="col-md-10 pkgdt_vidcol p-0">
                                                <video id="my-player" class="video-js vjs-theme-fantasy vjs-big-play-centered"  poster="{{asset('images/advertisement/'.$advertisement->image)}}" style="object-fit:cover;" controls >
                                                    <source src="{{asset('files/advertisement/'.$advertisement->video)}}">
                                                </video>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12 phtprjs_maincont p-3">
                                <div class="row phtprjs_mrow m-0">
                                    @foreach($advertisement->advertisement_images as $image)
                                    <div class="col-12 col-md-3 phtprj_mcol">
                                        <div class="row phtprj_mrow  m-0">
                                            <div class="col-md-12 phtprj_imgmcol">
                                                <div class="row phtprj_imgmrow ">
                                                    <div class="col-md-12 phtprj_imgcol">
                                                        <a class="txt_dgray bold text-center cursp" href="{{asset('images/advertisement/'.$image->image)}}" data-toggle="lightbox" data-gallery="prj_dtgal">
                                                            <img class="phtprj_img" src="{{asset('images/advertisement/'.$image->image)}}">
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

            </div>
        </div>


    </section>
@endsection

