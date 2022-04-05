@extends('layouts.site')


@section('more_style')


@endsection

@section('content')

    <section class="container-fluid prtfil_mainsec mb-5">
        <div class="row blgmntit_row justify-content-center">
            <div class="col-md-8 blgmntit_col m-auto">
                <h1 class="bbj blgmn_titl txt_srmp">درباره ما</h1>
            </div>
        </div>
        <div class="row about_us_mainrow">
            <div class="col-md-12 srvslist_rltcont">
                <div class="row srvslist_mrow ">
                    <div class="col-md-12 srvprv_mcol">
                        <div class="row srvsprv_mrow m-0">
                            <div class="col-md-12 abt_txtimgcont">
                                <div class="row abt_txtimgrow">
                                    <div class="col-md-7 abttxt_rlttxtbxmcol m-auto">
                                        <a href="pkg_dtpage.html"><div class="row srv_txtbxmrow">
                                                <div class="col-md-12 smmdtit_col m-auto pr-0 ">
                                                </div>
                                                <div class="col-md-12 crsl_txtcol txt_gray mb-2 pr-0">
                                                    @if($about)
                                                    {!! $about->description1 !!}
                                                    @endif
                                                </div>

                                            </div></a>
                                    </div>
                                    <div class="col-md-5 srvprv_bxmcol p-0 m-auto">
                                        <div class="row abtimg_mrow m-0">
                                            <div class="col-md-12 abtimg_mcol">
                                                <div class="row abtimg_row m-0">
                                                    <div class="col-md-12 abtimg_col">
                                                        <img src="img/abtimg.jpg" class="abt_img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 abt_txtimgcont">
                                <div class="row abt_txtimgrow">
                                    <div class="col-md-5 srvprv_bxmcol p-0 m-auto">
                                        <div class="row abtimg_mrow m-0">
                                            <div class="col-md-12 abtimg_mcol">
                                                <div class="row abtimg_row m-0">
                                                    <div class="col-md-12 abtimg_rtlcol">
                                                        <img src="img/abtimgg.jpg" class="abt_img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-7 abttxt_lfttxtbxmcol m-auto">
                                        <a href="pkg_dtpage.html"><div class="row srv_txtbxmrow">
                                                <div class="col-md-12 smmdtit_col m-auto ">
                                                </div>
                                                <div class="col-md-12 crsl_txtcol txt_gray mb-2 ">
                                                    @if($about)
                                                    {!! $about->description2 !!}
                                                        @endif
                                                </div>

                                            </div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 about_us_maincont">
                                <div class="row abtus_mcontrow">
                                    <div class="col-md-12 srvslist_rltcont">
                                        <div class="row srvslist_mrow ">
                                            <div class="col-md-12 teammeb_mcol">

                                                <div class="row srvsprv_mrow">

                                                    <div class="col-md-5 abttm_imgtxtcol">
                                                        <div class="row srv_txtbxmrow">
                                                            <div class="col-md-12 smmdtit_col m-auto">
                                                                <h1 class="bbj text-center txt_srmp font50">اعضای تیم ایتوک</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 srvprv_bxmcol p-0 m-auto">
                                                        <div class="row srvprv_imgbxmrow m-0">
                                                            <div class="col-md-12 srvprv_rltbximgcol" >
                                                                @foreach($members as $member)
                                                                    <div class="row teammebs_mrow">
                                                                        <div class="col-md-2 tmmb_infimgcol">
                                                                            <div class="row tmmb_infimgrow">
                                                                                <div class="col-md-12 tmmb_imgcol p-0 pb-2">
                                                                                    <img class="tmmb_img" src="{{asset('site/img/avtfm1.png')}}">
                                                                                </div>
                                                                                <div class="col-md-12 tmmb_inftxtcol text-center">
                                                                                    <h6 class="txt_gray ssto tmmb_nmtxt font14">{{$member->name}}</h6>
                                                                                    <span class="txt_grayl tmmb_tlnttxt font12">{{$member->specialty}}</span><br>
                                                                                    <span class="txt_grayl tmmb_tlnttxt font12">{{$member->position}}</span>
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

                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    

@endsection

