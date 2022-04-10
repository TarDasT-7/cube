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
                            
                            @foreach ($abouts as $key=>$about)
                                
                                @if($key % 2 == 0)

                                    <div class="col-md-12 abt_txtimgcont">
                                        <div class="row abt_txtimgrow">
                                            
                                            <div class="col-md-7 abttxt_rlttxtbxmcol m-auto">
                                                <a><div class="row srv_txtbxmrow">
                                                        <div class="col-md-12 smmdtit_col m-auto pr-0 ">
                                                            <h4 class="bbj font32 txt_grdrk mb-3">{{$about->title}}</h4>
                                                        </div>
                                                        <div class="col-md-12 crsl_txtcol txt_gray mb-2 pr-0">
                                                            {!! $about->description !!}
                                                        </div>

                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-md-5 srvprv_bxmcol p-0 m-auto">
                                                <div class="row abtimg_mrow m-0">
                                                    <div class="col-md-12 abtimg_mcol">
                                                        <div class="row abtimg_row m-0">
                                                            <div class="col-md-12 abtimg_col">
                                                                <img src="{{'/images/abouts/'.$about->image}}" class="abt_img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                                                
                                @else

                                    <div class="col-md-12 abt_txtimgcont">
                                        <div class="row abt_txtimgrow">
                                            
                                            <div class="col-md-5 srvprv_bxmcol p-0 m-auto">
                                                <div class="row abtimg_mrow m-0">
                                                    <div class="col-md-12 abtimg_mcol">
                                                        <div class="row abtimg_row m-0">
                                                            <div class="col-md-12 abtimg_rtlcol">
                                                                <img src="{{'/images/abouts/'.$about->image}}" class="abt_img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-7 abttxt_lfttxtbxmcol m-auto">
                                                <a>
                                                    <div class="row srv_txtbxmrow">
                                                        <div class="col-md-12 smmdtit_col m-auto ">
                                                            <h4 class="bbj font32 txt_grdrk mb-3">{{$about->title}}</h4>

                                                        </div>
                                                        <div class="col-md-12 crsl_txtcol txt_gray mb-2 ">
                                                            {!! $about->description !!}
                                                        </div>

                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                    

                            @endforeach


                            <div class="col-md-12 about_us_maincont">
                                <div class="row abtus_mcontrow">
                                    <div class="col-md-12 srvslist_rltcont">
                                        <div class="row srvslist_mrow ">
                                            <div class="col-md-12 teammeb_mcol">

                                                <div class="row srvsprv_mrow">

                                                    <div class="col-md-5 abttm_imgtxtcol">
                                                        <div class="row srv_txtbxmrow">
                                                            <div class="col-md-12 smmdtit_col m-auto">
                                                                <h1 class="bbj text-center txt_srmp font50">اعضای تیم مکعب</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-12 srvprv_bxmcol p-0 m-auto">
                                                        <div class="row srvprv_imgbxmrow m-0">
                                                            <div class="col-md-12 srvprv_rltbximgcol" >
                                                                <div class="row teammebs_mrow">
                                                                    @foreach($users as $user)
                                                                        <div class="col-md-2 tmmb_infimgcol">
                                                                            <div class="row tmmb_infimgrow">
                                                                                <div class="col-md-12 tmmb_imgcol p-0 pb-2">
                                                                                    <img class="tmmb_img" src="{{'/images/users/'.$user->profile_photo_path}}">
                                                                                </div>
                                                                                <div class="col-md-12 tmmb_inftxtcol text-center">
                                                                                    <h6 class="txt_gray ssto tmmb_nmtxt font14">{{$user->first_name}} {{$user->last_name}}</h6>
                                                                                    @foreach ($user->roles as $role)
                                                                                        <span class="txt_grayl tmmb_tlnttxt font12">{{$role->title}}</span><br>
                                                                                    @endforeach
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

        </div>
    </section>
    

@endsection

