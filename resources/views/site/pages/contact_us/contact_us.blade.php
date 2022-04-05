@extends('layouts.site')


@section('more_style')


@endsection

@section('content')

    <section class="main_sec main-content container-fluid" id="main-content">
        <div class="row article_txt_mrow  justify-content-center pb-5">
            <div class="col-11 col-md-11 back_gray cntus_txt_mcol ">
                <div class="row contus_main_row">
                    <div class="col-md-12 onlineSu_cnt ">
                        <h2 class="txt_srmp bbj pb-3 pr-5">@if($contact) {{$contact->title}} @endif</h2>
                        <div class="row onlineSu_row m-4">

                            <div class="col-md-6 TellChat_col ">
                                <div class="row TellChat_row m-0">
                                    <div class="col-md-12 tell_col pb-3">
                                        <span class="txt_srmp bold font15 "><i class="fa fa-fw fa-phone txt_srmp"></i> شماره تماس : </span>
                                        <span class="txt_dgray lato pb-3"> @if($contact){{$contact->phone}} @endif</span>
                                        <span class="txt_srmp bold d-block pt-3 "><i class="fa fa-fw fa-map-marker-alt"></i> دفتر مرکزی : </span>
                                        <p class="txt_dgray pt-2 pb-3"> @if($contact){{$contact->address}} @endif</p>
                                        <span class="txt_srmp bold font15"><i class="fa fa-fw fa-envelope"></i> ایمیل : </span>
                                        <span class="txt_dgray lato">@if($contact) {{$contact->email}} @endif </span>
                                        </div>
                                        <div class="col-md-12 map_office_col pt-4 pb-4 border">
                                            @if($contact)
                                            <iframe src="{{$contact->location}}" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                            @endif
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-6 SocialM_col">
                                <div class="row SocialM_row m-0">
                                    <h6 class="txt_srmp bold pb-4 ">ما را در شبکه های اجتماعی دنبال کنید</h6>
                                    <div class="col-md-12 scm_ico p-0">
                                        <div class="row sc_row">
                                            <div class="col-3 col-md-1 sc_col text-center p-0">
                                                @if($contact)
                                                <a href="{{asset($contact->facebook)}}" class="sc_linkitem txt_srmp">
                                                    @endif
                                                    <i class="fab fa-fw fa-facebook font30"></i></a>
                                            </div>
                                            <div class="col-3 col-md-1 sc_col text-center p-0">
                                                @if($contact)
                                                <a href="{{asset($contact->linkedin)}}" class="sc_linkitem txt_srmp">
                                                    @endif
                                                    <i class="font30 fab fa-fw fa-linkedin-in"></i></a>
                                            </div>
                                            <div class="col-3 col-md-1 sc_col text-center p-0">
                                                @if($contact)
                                                <a href="{{asset($contact->instagram)}}" class="sc_linkitem txt_srmp">
                                                    @endif
                                                    <i class="font30 fab fa-fw fa-instagram"></i></a></div>
                                            <div class="col-3 col-md-1 sc_col text-center p-0">
                                                @if($contact)
                                                <a href="{{asset($contact->telegram)}}" class="sc_linkitem txt_srmp">
                                                    @endif
                                                    <i class="font30 fab fa-fw fa-telegram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="txt_srmp bold pt-5 pb-4">ارسال پیام</h6>
                                    <div class="col-md-12 scm_ico p-0">
                                        <div class="row sc_row">
                                            <form id="comment_form" action="{{url('comment')}}" method="post" role="form" class="w-100">
                                                @csrf

                                                <input type="hidden" name="contact" value="contact">

                                                <div class="form-group col-12 col-md-12">
                                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-envelope txt_srmp"></i>
															  </span>
                                                        <input name="email" class="form-control srch_cus3 txt_dgray mr-0" type="email" placeholder="ایمیل">

                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-md-12 mg">
                                                    <textarea name="desc" class="form-control cus_txtarea" placeholder="پیام" id="exampleFormControlTextarea1" rows="5"></textarea>

                                                </div>
                                                <div class="col-md-5 offset-md-7 mg">
                                                    <div >
                                                        <button type="submit" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100">ارسال</button>
                                                    </div>
                                                </div>
                                            </form>
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

