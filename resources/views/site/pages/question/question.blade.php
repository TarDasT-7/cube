@extends('layouts.site')


@section('more_style')


@endsection

@section('content')


<section class="main_sec main-content container-fluid cntpg_back pb-2" id="main-content">
	<section class="main_secmshind container-fluid main-content ">

		<div class="row justify-content-center faq_clpcont  "> 
						<div class="col-11 col-md-11 faq_clp_mcol back_white m-5 p-5">
							<div class="row faq_srchrow justify-content-center  abt_imgcol back_crm">
							  <div class="col-md-10 faq_srchcol m-autoz pt-4 pb-4">
											<form id="payment_track_form mb-0" action="" method="post" role="form" class="w-100">
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
							<div class="row faq_secrow">
							<div class="col-md-12 faq_seccol">
								
                                @foreach ($questions as $key=>$faq)

                                    <div class="row guide_row pb-3">
                                        <div class="col-md-12 info_title cursp txt_dgray collp_head2">
                                            <h6 class="txt_dgray bold" data-toggle="collapse" data-target="#how_to_buy{{$key}}">
                                                <i class="fas fa-minus fa-fw txt_org font12"></i>{{$faq->category->title}}</h6>
                                        </div>
        
                                        <div class="col-md-12 collapse collp_count pb-4 @if($key == 0) show @endif" id="how_to_buy{{$key}}" >
                                            <h6 class="txt_dgray bold  pt-3">{{$faq->title}}</h6>
                                            {!! $faq->text !!}
                                        </div>

                                    </div>
                                    
                                @endforeach

								</div>
							</div>
						   <div class="row commentpr_row p-5 back_crm">
								<div class="col-12 col-md-12 prdt_col">
										
											<div class="row user_rating_row m-0">
												<div class="col-12 col-md-12 title_row2 pb-4">
												<h4 class="txt_dgray bold">* ثبت پرسش جدید </h4>
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
															  <input class="form-control srch_cus3 txt_dgray mr-0" type="email" placeholder="ایمیل">
	
															   </div>
															</div>
												   <div class="form-group col-12 col-md-12">
															  <div class="input-group input-group-sm">
															  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
															  <i class="fa fa-user txt_org"></i>
																  </span>
															  <input class="form-control srch_cus3  txt_dgray mr-0" type="email" placeholder="نام و نام خانوادگی">
	
															   </div>
															</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row">
											<div class="form-group col-12 col-md-12 mg">
															  <textarea class="form-control cus_txtarea" placeholder="پیام" id="exampleFormControlTextarea1" rows="5"></textarea>
							
											</div>
											<div class="col-md-5 offset-md-7 mg">
																		<div>
																		<a type="sumbit" href="user_profile.html" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100">ارسال</a>
																		</div>
																	</div>
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
		</section>
	</section>	


@endsection

