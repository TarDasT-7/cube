@extends('layouts.site')


@section('more_style')


@endsection

@section('content')

    <section class="main_sec main-content container-fluid pb-2" id="main-content">
        <section class="main_secmshind container-fluid main-content ">

            <div class="row justify-content-center faq_clpcont  ">
                <div class="col-11 col-md-11 faq_clp_mcol back_white m-5 p-5">
                    <div class="row faq_srchrow justify-content-center  abt_imgcol back_gray">
                        <div class="col-md-10 faq_srchcol m-autoz pt-4 pb-4">

                                <div class="row sc_row justify-content-center">
                                    <div class="form-group col-12 col-md-7 m-autoz">
                                        <div class="input-group input-group-sm">
															  <span class="input-group-addon span_cus inpgr_addoncus_faqmodal" id="sizing-addon8">
															  <i class="fa fa-question txt_org"></i>
																  </span>
                                            <input class="form-control srch_cuss txt_dgray mr-0" type="email" placeholder="پرسش خود را جستجو کنید..">

                                        </div>
                                    </div>
                                    <div class="col-md-3 m-autoz">

                                        <a type="sumbit"  href="user_profile.html" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 ">جستجو</a>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    @foreach($questions as $question)
                    <div class="row guide_row pb-3">
                        <div class="col-md-12 info_title cursp txt_dgray collp_head2">
                            <h6 class="txt_dgray bold" data-toggle="collapse" data-target="{{'#question'.$question->id}}"> <i class="fas fa-plus fa-fw txt_org font12"></i>  {{$question->question}} </h6>
                        </div>
                        <div class="col-md-12 collapse collp_count pb-4" id="{{'question'.$question->id}}" >
                            <h6 class="txt_dgray bold  pt-3"></h6>
                            <ol class="txt_gray">
                                {!! $question->answer !!}
                            </ol>
                        </div>
                    </div>
                    @endforeach
                    <form  method="post" action="{{url('sitequestion_store')}}">
                        @csrf
                            <div class="row commentprr_row p-5 back_gray">
                                <div class="col-12 col-md-12 prdt_col">

                                    <div class="row user_rating_row m-0">
                                        <div class="col-12 col-md-12 title_row2 pb-4">
                                            <h4 class="txt_srmp bbj"> ثبت پرسش جدید </h4>
                                        </div>

                                        <div class="col-md-12 scm_ico p-0">
                                            <div class="row sc_row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="form-group col-12 col-md-12 ">
                                                            <div class="input-group input-group-sm">
															  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
															  <i class="fa fa-envelope txt_org"></i>
                                                                 </span>
                                                                <input class="form-control srch_cus3 txt_dgray mr-0" type="email" name="email" placeholder="ایمیل">

                                                            </div>
                                                        </div>
                                                        <div class="form-group col-12 col-md-12">
                                                            <div class="input-group input-group-sm">
															  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
															  <i class="fa fa-user txt_org"></i>
																  </span>
                                                                <input class="form-control srch_cus3  txt_dgray mr-0" type="text" name="name" placeholder="نام و نام خانوادگی">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="form-group col-12 col-md-12 mg">
                                                            <textarea class="form-control cus_txtarea" placeholder="پیام"  name="question" id="exampleFormControlTextarea1" rows="5"></textarea>

                                                        </div>
                                                        <div class="col-md-5 offset-md-7 mg">
                                                            <div>
                                                                <button type="submit"  class="btn btn-raised btn_cusblgray btn-sm btn_full w-100">ارسال</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>
        </section>
    </section>
@endsection

