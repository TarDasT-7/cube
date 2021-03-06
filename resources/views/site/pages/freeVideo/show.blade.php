<?php

    function showDate($date){$date=Verta::instance($date)->format('Y/m/d');$exDate=explode('/',$date);switch ((int)$exDate[1]){case 1:$exDate[1] = 'فروردین';break;case 2:$exDate[1] = 'اردیبهشت';break;case 3:$exDate[1] = 'خرداد';break;case 4:$exDate[1] = 'تیر';break;case 5:$exDate[1] = 'مرداد';break;case 6:$exDate[1] = 'شهریور';break;case 7:$exDate[1] = 'مهر';break;case 8:$exDate[1] = 'ابان';break;case 9:$exDate[1] = 'آذر';break;case 10:$exDate[1] = 'دی';break;case 11:$exDate[1] = 'بهمن';break;case 12:$exDate[1] = 'اسفند';break;}return $exDate;}
    $date = showDate($video->created_at);
	if($user=Illuminate\Support\Facades\Auth::user()){$userId = $user->id;} else{$user=null;$userId=null;}

?>
@extends('layouts/site')

@section('title', 'صفحه اصلی')

@section('more_style')

@endsection

@section('content')

<style>
        
	.alert-success
	{
		background: #00ff0833;
		width: 100%;
		height: 50px;
		margin-top: 40px;
		text-align: center;
		display: none;
	}
	.success_message{
		font-size: 15px;
		padding: 15px 0;
		color: #007c3f;
	}
	.alert-warning
	{
		background: #ff00002b;
		width: 100%;
		height: 50px;
		margin-top: 40px;
		text-align: center;
		display: none;
	}
	.warning_message{
		font-size: 15px;
		padding: 15px 0;
		color: #790000;
	}

</style>

<div  class="alert-success">

	<h1 class="success_message">

	</h1>

</div>


<div class="alert-warning">

	<h1 class="warning_message">

	</h1>

</div>

<section class="main_sec container-fluid main-content">
	<div class="row breadcrumb_row m-0">
		  <nav aria-label="breadcrumb">
		  <ol class="breadcrumb brdc_cus font14">
			<li class="breadcrumb-item"><a href="index.html" class="txt_gray">خانه</a></li>
			<li class="breadcrumb-item "><a href="prdlists_page.html" class="txt_gray">آموزش های آمورشی</a></li>
			<li class="breadcrumb-item "><a href="prdlists_page.html" class="txt_gray">نام دسته</a></li>
			  <li class="breadcrumb-item "><a href="prdlists_page.html" class="txt_dgray"> نام زیر دسته</a></li>
			  <li class="breadcrumb-item active" aria-current="page"> نام آموزش
			  </li>
		  </ol>
		</nav>	
	 </div>
	<div class="row prd_dtmainrow back_white m-0 mb-4">
	<div class="col-md-12 prd_dtmaincol">
		<div class="row prdt_galtxtrow">
			
            <div class="col-md-12 pr_name">
				<h6 class="font24 txt_dgray bold">{{$video->title}}</h6>
			</div>

            <div class="col-md-7 prdt_gal_mcol pt-4">
                <div class="row prdt_gal_mrow m-0">
                    <div class="col-md-12 prdtgal_col">
                        <div class="row prdtgal_row">
                            <div class="col-md-12 vid_mcol p-0">
                                <video id="my-player" class="video-js vjs-theme-fantasy vjs-big-play-centered" poster="{{'/images/free/'.$video->cover}}" style="object-fit:cover;" controls >
                                    <source src="{{'/videos/free/'.$video->demo}}">
                                </video>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>

			<div class="col-md-5 prddt_billtxt_cont pt-4">
				<div class="row sr_prbid_row m-0">
					<div class="col-md-12 prd_dtbillcont  ">
							<div class="row prd_dtbillrow justify-content-end m-0 back_crm h-100">
								<div class="col-md-12 crs_gndtcol">
									<div class="row crs_gndtrow m-0">
										<div class="col-md-3 artcl_wrtmcol m-autoz">
									<div class="row artcl_wrtmrow justify-content-center">
									 <div class="col-md-6 tch_authimgcol text-center mb-3">
										<img src="{{'/images/producers/'.$video->producer->image}}" class="tch_authimg">
									 </div>
										<div class="col-md-12 artcl_wrtnmcol text-center">
											<h6 class="font15 txt_gray bold mb-1">{{$video->producer->first_name}} {{$video->producer->last_name}}</h6>
											<span class="txt_gray font12">{{$video->producer->profession}}</span>
										</div>
									</div>
								</div>
                                <div class="col-md-3 m-autoz">
                                    <div class="row mtqg_row justify-content-center">
                                        <div class="col-12 col-md-6 text-center crs_ftcol mb-3">
                                            <svg  class="qg_ico" viewBox="-11 0 512 512.00018" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m489.746094 244.820312c-.027344-135.238281-109.683594-244.8476558-244.925782-244.820312-135.238281.0273438-244.8476558 109.6875-244.820312 244.925781.0234375 106.527344 68.910156 200.816407 170.390625 233.21875.96875.304688 1.976563.460938 2.988281.457031 1.929688-.003906 3.820313-.519531 5.480469-1.5 2.160156-1.277343 3.773437-3.308593 4.53125-5.703124l61.839844-196c16.90625-.085938 30.539062-13.863282 30.449219-30.765626-.085938-16.90625-13.859376-30.539062-30.765626-30.453124-4.546874.019531-9.035156 1.066406-13.121093 3.0625l-81.695313-81.707032c-4.054687-3.914062-10.511718-3.800781-14.425781.25-3.820313 3.957032-3.820313 10.222656 0 14.179688l81.652344 81.746094c-6.265625 12.789062-2.683594 28.226562 8.582031 36.945312l-58.921875 186.765625c-116.445313-42.894531-176.070313-172.0625-133.175781-288.507813 42.894531-116.445312 172.0625-176.070312 288.507812-133.175781 116.445313 42.894531 176.070313 172.066407 133.175782 288.507813-20.957032 56.890625-64.015626 102.898437-119.394532 127.574218l-6.367187-29.988281c-1.164063-5.511719-6.582031-9.035156-12.09375-7.867187-1.738281.371094-3.351563 1.1875-4.679688 2.371094l-61.390625 54.808593c-4.210937 3.746094-4.585937 10.195313-.835937 14.40625 1.21875 1.367188 2.78125 2.382813 4.53125 2.941407l78.378906 25.015624c5.363281 1.722657 11.109375-1.226562 12.832031-6.59375.546875-1.695312.636719-3.5.269532-5.242187l-6.257813-29.425781c90.628906-38.207032 149.472656-127.074219 149.261719-225.425782zm-244.871094-10.203124c5.632812 0 10.203125 4.570312 10.203125 10.203124 0 5.636719-4.570313 10.203126-10.203125 10.203126-5.636719 0-10.203125-4.566407-10.203125-10.203126 0-5.632812 4.566406-10.203124 10.203125-10.203124zm33.605469 237.824218 34.945312-31.171875 9.644531 45.445313zm0 0"/><path d="m234.671875 50.960938v20.40625c0 5.636718 4.566406 10.203124 10.203125 10.203124 5.632812 0 10.203125-4.566406 10.203125-10.203124v-20.40625c0-5.632813-4.570313-10.203126-10.203125-10.203126-5.636719 0-10.203125 4.570313-10.203125 10.203126zm0 0"/><path d="m51.015625 234.617188c-5.636719 0-10.203125 4.570312-10.203125 10.203124 0 5.636719 4.566406 10.203126 10.203125 10.203126h20.40625c5.636719 0 10.203125-4.566407 10.203125-10.203126 0-5.632812-4.566406-10.203124-10.203125-10.203124zm0 0"/><path d="m438.730469 255.023438c5.636719 0 10.203125-4.566407 10.203125-10.203126 0-5.632812-4.566406-10.203124-10.203125-10.203124h-20.40625c-5.632813 0-10.203125 4.570312-10.203125 10.203124 0 5.636719 4.570312 10.203126 10.203125 10.203126zm0 0"/></svg>
                                        </div>
                                        <div class="col-12 col-md-12 crs_ftcol text-center brtmj bold">
                                            <h6 class="font15 txt_gray bold mb-1">مدت آموزش</h6>
                                            <span class="txt_gray font12">{{$video->time}}</span>
                                        </div>
                                    </div>
									</div>
								        {{-- <div class="col-md-3 m-autoz">
											<div class="row mtqg_row justify-content-center">
												<div class="col-12 col-md-6 text-center crs_ftcol mb-3">
													<svg class="qg_ico" id="Layer_1_1_" enable-background="new 0 0 64 64"  viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m13 61c0 .55225.44727 1 1 1h25c.55273 0 1-.44775 1-1v-4h12c.55273 0 1-.44775 1-1v-12h6c.30176 0 .58789-.13623.77734-.37109.19043-.23486.26367-.54297.2002-.83838l-2.97754-13.89746c-.03027-7.63135-3.30664-14.92188-8.99902-20.01709-5.79785-5.18994-13.28906-7.57031-21.08789-6.7041-12.52344 1.39111-22.52247 11.50878-23.77442 24.05761-.65332 6.54443 1.0625 13.07129 4.83301 18.37793 3.29004 4.62988 5.02832 10.29834 5.02832 16.39258zm-7.87109-34.57178c1.15918-11.61572 10.41308-20.98095 22.00488-22.26904 7.23145-.7998 14.16504 1.40186 19.5332 6.20703 5.2959 4.74024 8.33301 11.53174 8.33301 18.63379 0 .07031.00781.14062.02246.20947l2.74024 12.79053h-5.7627c-.55273 0-1 .44775-1 1v12h-12-4v2h3v3h-23.01465c-.18164-6.13232-2.0332-11.83594-5.38281-16.55078-3.49024-4.9126-5.0791-10.95752-4.47363-17.021z"/><path d="m35.82715 30.72412-.74316-1.77588c.16016-.3291.30176-.67139.42285-1.02393l1.78418-.73193c.33301-.13672.56641-.44238.6123-.79932.06641-.52148.09668-.96386.09668-1.39306s-.03027-.87158-.09668-1.39307c-.0459-.35693-.2793-.6626-.6123-.79932l-1.78418-.73193c-.12109-.35205-.26172-.69434-.42188-1.02393l.74219-1.77588c.13867-.33252.08789-.71338-.13281-.99805-.57129-.73828-1.23438-1.40186-1.97168-1.97266-.28516-.22168-.66797-.27051-.99805-.13232l-1.77637.74268c-.33008-.16016-.67188-.30127-1.02344-.42188l-.73242-1.78418c-.13672-.3335-.44141-.56738-.79883-.61279-1.04297-.13184-1.74414-.13184-2.78711 0-.35742.04541-.66211.2793-.79883.61279l-.73242 1.78418c-.35156.12061-.69336.26172-1.02344.42188l-1.77637-.74268c-.33105-.13818-.71387-.08936-.99805.13232-.7373.57129-1.40039 1.23438-1.97168 1.97168-.2207.28467-.27148.66602-.13281.99854l.74316 1.77588c-.16016.32959-.30176.67188-.42285 1.02441l-1.78418.73193c-.33301.13672-.56641.44238-.6123.79932-.0664.5215-.09667.96388-.09667 1.39308s.03027.87158.09668 1.39307c.0459.35693.2793.6626.6123.79932l1.78418.73193c.12109.35205.26172.69434.42188 1.02393l-.74219 1.77588c-.13867.33252-.08789.71338.13281.99805.57129.73828 1.23438 1.40186 1.97168 1.97266.28418.22119.66699.27002.99805.13232l1.77637-.74268c.33008.16016.67188.30127 1.02344.42188l.73242 1.78418c.13672.3335.44141.56738.79883.61279.52148.06591.96386.09667 1.39355.09667s.87207-.03076 1.39355-.09668c.35742-.04541.66211-.2793.79883-.61279l.73242-1.78418c.35254-.12061.69434-.26172 1.02344-.42188l1.77637.74268c.33008.1377.71289.08887.99805-.13232.7373-.5708 1.40039-1.23438 1.97168-1.97266.2207-.28467.27148-.66602.13281-.99805zm-1.51465-4.47217c-.28418.1167-.49902.35742-.58203.65283-.15234.53516-.36133 1.04248-.62207 1.50684-.15039.26855-.16895.5918-.05078.87549l.69141 1.65186c-.25293.28711-.52344.55762-.80957.81006l-1.65234-.69092c-.28418-.11816-.60645-.1001-.875.05078-.46484.26074-.97168.46973-1.50684.62158-.2959.0835-.53613.29834-.65234.58252l-.68359 1.66504c-.40039.0293-.73828.0293-1.13867 0l-.68359-1.66504c-.11621-.28418-.35645-.49902-.65234-.58252-.5332-.15137-1.04004-.36084-1.50781-.62207-.26953-.14941-.58984-.16846-.87402-.05029l-1.65234.69092c-.28613-.25244-.55664-.52344-.80957-.81006l.69043-1.65186c.11816-.28369.09961-.60596-.0498-.87402-.26172-.46631-.4707-.97363-.62207-1.5083-.08301-.29541-.29785-.53613-.58203-.65283l-1.66504-.68311c-.01566-.2002-.0225-.38721-.0225-.56885s.00684-.36865.02246-.56885l1.66504-.68311c.28418-.1167.49902-.35742.58203-.65283.15234-.53516.36133-1.04248.62207-1.50684.15039-.26855.16895-.59131.05078-.87549l-.69141-1.65234c.25293-.28662.52344-.55713.80957-.80957l1.65234.69092c.28418.11816.60449.09912.87402-.05029.46777-.26123.97461-.4707 1.50781-.62207.2959-.0835.53613-.29834.65234-.58252l.68359-1.66504c.40039-.0293.73828-.0293 1.13867 0l.68359 1.66504c.11621.28418.35645.49902.65234.58252.5332.15137 1.04004.36084 1.50781.62207.26758.14941.58984.16846.87402.05029l1.65234-.69092c.28613.25244.55664.52344.80957.81006l-.69043 1.65186c-.11816.28369-.09961.60596.0498.87402.26172.46631.4707.97363.62207 1.5083.08301.29541.29785.53613.58203.65283l1.66504.68311c.01567.2002.02251.38721.02251.56885s-.00684.36865-.02246.56885z"/><path d="m27 20c-2.75684 0-5 2.24316-5 5s2.24316 5 5 5 5-2.24316 5-5-2.24316-5-5-5zm0 8c-1.6543 0-3-1.3457-3-3s1.3457-3 3-3 3 1.3457 3 3-1.3457 3-3 3z"/><path d="m35.29883 36.27734 1.1875 1.60938c1.14453-.84375 2.17285-1.83691 3.05762-2.95264l-1.56641-1.24316c-.77539.97754-1.67676 1.84765-2.67871 2.58642z"/><path d="m12.75098 32.28271 1.7793-.91211c-.43066-.8418-.77637-1.72852-1.02734-2.63672-.33399-1.20898-.50294-2.46533-.50294-3.73388 0-7.71973 6.28027-14 14-14h7.58594l-1.29297 1.29297 1.41406 1.41406 3-3c.39062-.39062.39062-1.02344 0-1.41406l-3-3-1.41406 1.41406 1.29297 1.29297h-7.58594c-8.82227 0-16 7.17773-16 16 0 1.44824.19336 2.88379.5752 4.26611.2871 1.03907.68261 2.05371 1.17578 3.0166z"/><path d="m42.4248 29.26611-1.92773-.53223c-.33105 1.2002-.82324 2.35107-1.46094 3.42139l1.7168 1.02441c.73047-1.22363 1.29297-2.54052 1.67187-3.91357z"/><path d="m15.48926 32.97021-1.64453 1.13965c.81055 1.16846 1.77344 2.22559 2.86426 3.14258l1.28711-1.53125c-.95508-.80273-1.79883-1.72803-2.50684-2.75098z"/><path d="m30.25586 38.61963.46289 1.94531c1.38477-.3291 2.71973-.84424 3.9707-1.53076l-.96289-1.75293c-1.09277.6001-2.26074 1.05029-3.4707 1.33838z"/><path d="m18.42871 38.51221c1.20312.76514 2.50293 1.36523 3.86328 1.78369l.58789-1.91211c-1.18945-.36523-2.3252-.89014-3.37695-1.55908z"/><path d="m28.61816 40.91943-.20117-1.99023c-.46484.04687-.93652.0708-1.40429.0708-.77637.03662-1.55664-.06299-2.31641-.18848l-.32617 1.97266c.86816.14355 1.79492.2041 2.64355.21582.53321 0 1.07227-.02734 1.60449-.08057z"/><path d="m23 55h2v2h-2z"/><path d="m27 55h2v2h-2z"/><path d="m31 55h2v2h-2z"/></svg>

												</div>
												<div class="col-12 col-md-12 crs_ftcol text-center brtmj bold">
													<h6 class="font15 txt_gray bold mb-1">سطح آموزش</h6>
													<span class="txt_gray font12">{{$video->hardship}}</span>

												</div>
											</div>
										</div> --}}
										
									</div>
                                </div>
							</div>
						</div>


						<div class="col-md-12 prd_dttxtcont pt-4">
							<div class="row prd_dttxtrow ">
								<div class="col-md-12 cart_rate_col">
												<div class="row cart_rate_row ">
													<div class="col-12 col-md-12 crss_ftcol ">
												<ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
												<li class=" list-inline-item tch_dtulli pl-3">
												 <span class="txt_dgray font14">دسته : <a href="#" class="txt_grdrk">{{$video->category->title}}</a></span>
												</li>
												<li class=" list-inline-item tch_dtulli pl-3">
														<span class="fa fa-star st_co font12 txt_org"></span>
														<span class="fa_nu txt_dgray">3.5</span>
														<span class="pr-3 txt_gray"><span class="fa_nu">10</span>نفر</span></span>
												</li>
													<li class=" list-inline-item tch_dtulli pl-3">
												 <span class="txt_dgray font14">تاریخ انتشار : <span class="txt_gray "> {!! $date[2] !!} {!! $date[1] !!} {!! $date[0] !!} </span></span>
												</li>
											</ul>
											</div>
												</div>
									<div class="row product_rwrow pt-2">
												<div class="col-12 col-md-12 product_rwcol">
                                                {!! $video->small_description !!}
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

    <div class="row prdt_rate_tabs_row  m-0 mb-4 pt-3"> 
		<div class="col-12 col-md-12 tab_navcol ">
            <ul class="nav nav-tabs nav_cus pr-0">
                        <li class="nav-item navtab_st">
                            <a class="a_style4 nav-link prd_dtlink active"  data-toggle="tab" href="#details"> توضیحات تکمیلی آموزش</a>
                        </li>
                        <li class="nav-item navtab_st">
                            <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#product_rw"> فایل های آموزش</a>
                        </li>
                <li class="nav-item navtab_st" >
                            <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#wash_care"> درباره استاد</a>
                        </li>
                <li class="nav-item navtab_st" >
                            <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#users_rtcm"> دیدگاه کاربران</a>
                        </li>
                <li class="nav-item navtab_st" >
                            <a  class=" a_style4   nav-link prd_dtlink" data-toggle="tab" href="#faq"> سوالات متداول</a>
                        </li>
                
            </ul>
        </div>
	    <div class="col-12 col-md-12 tab_cntcol ">
            <div class="tab-content tab_content_cus p-5">
                    <div id="details" class="tab-pane active container-fluid tab_cusprdft ">
                        <div class="row crs_dtxtmrow pt-3 ">
                            <div class="col-md-12">
                            <div class="row m-0 justify-content-center">
                                <div class="col-12 col-md-10 crs_dtxtmcol">
                            <div class="row crs_dtxtrow m-0">
                                <div class="col-12 col-md-12 title_row2 pb-4 pr-0">
                                    <h4 class="txt_dgray bold">درباره آموزش </h4>
                                    </div>
                                <div class="col-md-12 crs_dtxtcol pr-0">
                                    {!! $video->long_description !!}
                                </div>
                            </div>
                            
                            </div>
                                
                            </div>
                            </div>
                        
                        </div>
                    </div>
                    <div id="product_rw" class="tab-pane container-fluid tab_cusprdft ">
                        <div class="row product_rwrow">
                            <div class="col-12 col-md-6">
                                    <div class="row crscnt_dtsecrow m-0">
                                        <div class="col-12 col-md-12 title_row2 pb-4">
                                    {{-- <h4 class="txt_dgray bold">برای دانلود فایل های آموزش آموزش را خریداری کنید</h4> --}}
                                    </div>
                                    <div class="col-md-12 dlfile_mcol mb-2">
                                        <div class="row dlfile_mrow">
                                            <div class="col-md-12 dlfile_ulcol">
                                                    <ul class="txt_gray dlfile_ul list-unstyled pr-0">
                                                        
                                                        @foreach ($video->files as $file)
                                                            
                                                            <li class="cnt_li">
                                                                <div class="row cnt_limrow">
                                                                    <div class="col-md-6 cnt_limcol">
                                                                        <a href="#">
                                                                            <span class="txt_gray font15">
                                                                                <i class="li_ico fa fa-lock-open"></i>
                                                                                <span class="txt_gray pr-4">{{$file->title}}</span>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-6 cnt_limcol text-left">
                                                                        <span class="txt_gray font14">{{$file->size}} </span>
                                                                        <span><i class="fa fa-download pr-3"></i></span>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        @endforeach

                                                        
                                                    </ul>
                                            </div>
                                            
                                        </div>
                                    

                                        </div>
                                    </div>
                                    </div>
                            <div class="col-md-6 img_flsmcol m-auto">
                            <div class="row img_flsrow justify-content-center">
                                <div class="col-md-4 img_flscol">
                                    <svg class="img_fls" xmlns="http://www.w3.org/2000/svg" id="Icons" viewBox="0 0 64 64" ><path d="M56.37,33a2,2,0,0,0-2-2H52.784a2,2,0,0,0-1.414.586l-.828.828A2,2,0,0,1,49.127,33H31.37a2,2,0,0,0-2,2v3h27Z" fill="#ffa500c7"/><path d="M60,40H24.74a3,3,0,0,0-2.957,3.5l2.9,17A2.993,2.993,0,0,0,27.64,63H57.1a2.992,2.992,0,0,0,2.956-2.5l2.9-17A3,3,0,0,0,60,40ZM55.37,60h-7a1,1,0,0,1,0-2h7a1,1,0,1,1,0,2Z" fill="#ffa500c7"/><path d="M41.5,35a9.5,9.5,0,0,0,0-19h-.008A15.493,15.493,0,0,0,10.9,13.064,11,11,0,0,0,12,35h1V47a2,2,0,0,0,2,2h6a2,2,0,0,0,2-2V35h6v3h-.773a2,2,0,0,0-1.5,3.328l5.774,6.495a2,2,0,0,0,2.988,0l5.774-6.494A2,2,0,0,0,39.773,38H39V35ZM21,47H15V29a1,1,0,0,0-1-1H12.227L18,21.505,23.772,28H22a1,1,0,0,0-1,1Zm2-14V30h.773a2,2,0,0,0,1.5-3.328l-5.774-6.5a2.063,2.063,0,0,0-2.988,0l-5.774,6.494A2,2,0,0,0,12.227,30H13v3H12a8.995,8.995,0,0,1-.244-17.986,1,1,0,0,0,.958-.829A13.492,13.492,0,0,1,39.5,16.5c0,.091-.027.532-.027.532a1,1,0,0,0,1.119,1.03A7.174,7.174,0,0,1,41.5,18a7.5,7.5,0,0,1,0,15H39V21a2,2,0,0,0-2-2H31a2,2,0,0,0-2,2V33Zm16.773,7L34,46.5,28.228,40H30a1,1,0,0,0,1-1V21h6V39a1,1,0,0,0,1,1Z" fill="#697d38"/></svg>

                                </div>  
                            </div>
                            </div>	
                        </div>
								          
                    </div>
								    	<div id="wash_care" class="tab-pane  container-fluid tab_cusprdft ">
											<div class="row commentpr_row  p-3">
												<div class="col-12 col-md-12 wash_caremcol">	  
							 						<div class="row wash_caremrow">
														<div class="col-md-2 artcl_wrtmcol">
									<div class="row artcl_wrtmrow justify-content-center">
									 <div class="col-md-8 tch_authimgcol text-center mb-3">
										<img src="{{'/images/producers/'.$video->producer->image}}" class="tch_authimg">
									 </div>
										<div class="col-md-12 artcl_wrtnmcol text-center">
											<h6 class="font15 txt_gray bold mb-1">{{$video->producer->first_name}} {{$video->producer->last_name}}</h6>
											<span class="txt_gray font12">{{$video->producer->profession}}</span>
										</div>
									</div>
								</div>
                                    <div class="col-md-10 abt_tchmcol ">
                                        <div class="row abt_tchrow">
                                            <div class="col-md-12 abt_tchcol txt_gray font12">
                                                {!! $video->producer->description !!}
                                            </div>
                                        </div>
                                    </div>
													</div>
											   </div>
								            </div>
									   </div>
										<div id="faq" class="tab-pane  container-fluid tab_cusprdft ">
											<div class="row commentpr_row  p-3">
													<div class="col-11 col-md-12 faq_clp_mcol ">
																<div class="row faq_secrow ">
																<div class="col-md-12 faq_seccrscol">
                                                                    
                                                                    @foreach ($questions as $key=>$faq)
                                                                    {{-- @dd($faq->faq) --}}
                                                                        <div class="row guide_row back_crm mb-3">
                                                                            <div class="col-md-12 info_title cursp txt_dgray collp_head2">
                                                                                <h6 class="txt_dgray bold mb-0" data-toggle="collapse" data-target="#faq{{$key}}">
                                                                                    <i class="fas fa-minus fa-fw txt_org font12"></i>
                                                                                    {{$faq->faq->category->title}}
                                                                                </h6>
                                                                            </div>

                                                                            <div style="word-break: break-word;" class="col-md-12 collapse collp_count pb-4 " id="faq{{$key}}" >
                                                                                <h6 class="txt_dgray  pt-3">{{$faq->faq->title}}</h6>
                                                                                {!!$faq->faq->text!!}
                                                                            </div>
                                                                        </div>
                                                                    @endforeach

																
																	</div>
																</div>
															</div>
								            </div>
								          
									   </div>
								   	<div id="users_rtcm" class="tab-pane  container-fluid tab_cusprdft ">
											<div class="row strate_mrow  p-3">
												<div class="col-12 col-md-6 title_row2">
										<div class="row user_rating_row m-0">
											<div class="col-md-12">
												<div class="row">
													<div class="col-6 col-md-12 ">
										<h4 class="txt_dgray bold">میزان رضایت شما </h4>
								  </div>
								  <div class="col-12 col-md-2 TellChat_col star_user_rated_txt_col">
											  <span class="sp_d font30 text-center fa_nu txt_dgray">3.5</span>
								  </div>
								  <div class="col-6 col-md-9 star-rating pr-0">
										<span class="far fa-star font24 " data-rating="1"></span>
										<span class="far fa-star font24" data-rating="2"></span>
										<span class="far fa-star font24" data-rating="3"></span>
										<span class="far fa-star font24" data-rating="4"></span>
										<span class="far fa-star font24" data-rating="5"></span>
										<input type="hidden" name="whatever1" class="rating-value" value="2.56">
								  </div>
												</div>
											</div>
											<div class="col-12 col-md-12 pt-2">
												<div class="row ">
												<div class="col-12 col-md-6 star_user_rated_col">
													<div class="row star_user_rated_row">
														<div class="col-12 col-md-12 star_user_rated_txt_col">
															<span class="text-center txt_dgray sp_d font16"><img src="img/user_ico.png" class="srch_img"> 6 نفر</span>
														</div>
													</div>
												</div>
												</div>	
											  </div>
									   </div>
								  </div>
								<div class="col-12 col-md-6 rate_barcont">
									<div class="row rate_barrow">
									 <div class="col-2 col-md-1 star_lab_col">
								    	<span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray pb-3"></i> 1 </span>
								    	<span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray  pb-3"></i> 2 </span>
								    	<span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray pb-3"></i> 3 </span>
								    	<span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray pb-3"></i> 4 </span>
								    	<span class="psp d-block fa_nu font16"><i class="fas fa-star txt_gray pb-3"></i> 5 </span>
								    </div>
								    <div class="col-10 col-md-8 star_prbar_col ">
								    	<div class="progress prg_st">
										  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="10" style="width: 10%;font-family: yekan;"  aria-valuemax="100"></div>
										</div>
										<div class="progress prg_st ">
										  <div class="progress-bar" role="progressbar" style="width: 25%;font-family: yekan;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress prg_st ">
										  <div class="progress-bar" role="progressbar" style="width: 50%;font-family: yekan;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress prg_st ">
										  <div class="progress-bar" role="progressbar" style="width: 75%; font-family: yekan;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress prg_st">
										  <div class="progress-bar" role="progressbar" style="width: 100%; font-family: yekan;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
								    </div>
									  </div>
								</div>
								            </div>
											<div class="row commentpr_row mt-4  p-3">
												<div class="col-12 col-md-6 prdt_col">
									
										<div class="row user_rating_row m-0">
											<div class="col-12 col-md-12 title_row2 pb-4">
											<h4 class="txt_dgray bold">نظر خود را بیان کنید</h4>
										  </div>
											 <div class="col-md-12 scm_ico p-0">
	 		 						<div class="row sc_row">
										<form id="comment_form" role="form" class="w-100">
											<div class="form-group col-12 col-md-12 ">
												<div class="input-group input-group-sm  mb-3">
													<span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														<i class="fa fa-envelope txt_org"></i>
													</span>
													@if($user)
														<input class="form-control srch_cus3 txt_dgray mr-0 " type="email" value="{{$user->email}}" placeholder="ایمیل" name="email">
													@else
														<input class="form-control srch_cus3 txt_dgray mr-0 " type="email" placeholder="ایمیل" name="email">
													@endif
												</div>
											</div>
											<div class="form-group col-12 col-md-12 ">
												<div class="input-group input-group-sm  mb-3">
													<span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														<i class="fa fa-user txt_org"></i>
													</span>
													@if($user)
														<input class="form-control srch_cus3  txt_dgray mr-0" type="text" name="name" value="{{$user->first_name}} {{$user->last_name}}" placeholder="نام و نام خانوادگی">
													@else
														<input class="form-control srch_cus3  txt_dgray mr-0" type="text" name="name" placeholder="نام و نام خانوادگی">
													@endif

												</div>
											</div>
											<div class="form-group col-12 col-md-12 mg mb-2">
												<textarea class="form-control cus_txtarea " placeholder="پیام" name="text" id="text" rows="5"></textarea>
											</div>
											<div class="col-md-5 offset-md-7 mg">
												<div>
													<a id="subForm" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100">ارسال</a>
												</div>
											</div>
										</form>
									</div>
	 		 					</div>
								   </div>
									

							</div>
							<div class="col-12 col-md-6 prdt_col prdt_cmm_col">
								    <div class="row userscomm_row m-0">
										<div class="col-12 col-md-12  title_row2 pb-5 ">
											<h4 class="txt_dgray bold">نظرات کاربران</h4>
										</div>
										<div class="col-12 col-md-12 users_cmm_col mCustomScrollbar"
											data-mcs-theme="minimal-dark">
											@foreach ($video->comments as $comment)
											
												<div class="row">
													<div class="col-12 col-md-12">
														<h6 class="blackgray">{{$comment->name}}</h6>
													</div>
													<div class="col-12 col-md-12">
														<p class="txt_gray">{!! $comment->text !!}</p>	 	
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
	<div class="sims_prdctsssec row pt-3">
		<div class="col-md-12 sims_prdctscol">
			<div class="row sims_prdctsrow">
				<div class="col-md-3 simdprdcts_hdlbcol mr_2">
                    <h2 class="text-center bold mb-0 txt_grdrk bbj"> آموزش های مشابه</h2>
                </div>
                <div class="col-md-12 columns crsmpl_slcont">
                    <div class="owl-carousel sp_offers_crl owl-theme">

                        @foreach ($similars as $similar)
                            
                            <div class="frvid_lipr_col item">
                                <a href="{{route('fvShow' , $similar->id)}}" class="txt_dgray">
                                    <div class="row frvidlist_pr_row  ">
                                        <div class="col-12 col-md-12 frvid_imgcol pb-2 text-center">
                                            <img class="frvid_img" src="{{'/images/free/'.$similar->cover}}">
                                            <svg class="frvid_icocol" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
                                                    <h6 class="font14 txt_dgray bold">{{$similar->title}} </h6>
                                                </div>
                                                <div class="col-12 col-md-12 pdcst_dt_col feature_dt_col ">
                                                    <ul class="list-unstyled list-inline  pr-0 tch_dtul mb-0">
                                                    <li class=" list-inline-item tch_dtulli">
                                                    <span class="txt_gray font13">{{$similar->producer->first_name}} {{$similar->producer->last_name}}</span>
                                                    </li>
                                                    <li class="list-inline-item tch_dtulli float-left">
                                                    <span class="txt_gray font13"> {{$similar->time}} <i class="far fa-clock pr-1 font13"></i></span>
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
<meta name="csrf-token" content="{{ csrf_token() }}">
	

@endsection


@section('add_script')

<script> 
	
    $(document).ready(function() {
          var owl = $('.sp_offers_crl');
          owl.owlCarousel({
            rtl:true,
            items:4,
            nav:true, 
            navText: ['<svg class="navsvg_sl_spoff" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>','<svg class="navsvg_sl_spoff" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>'],
            loop: true,
            margin:15,
            autoplay:false,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
          });
          $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [1000])
          })
          $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
          })
        })
</script>	
<script>
var player = videojs("my-player" ,
  { "preload": "none" 
  
  });
</script>
<script>
$('.guide_row').click(function(){
$(this).find('i').toggleClass('fa-plus fa-minus')
});
</script>
<script>
$('.cntxt_mrow').click(function(){
$(this).find('i').toggleClass('fa-plus fa-minus')
});
</script>

<script>


	$('#subForm').click(function () {
		

		$('.rmAll').remove();
		$('.alert-success').hide(200);
		$('.alert-warning').hide(200);

		function fadeAlert() {
			setTimeout(() => {
				$('.alert-success').hide(200);
				$('.alert-warning').hide(200);
			}, 5000);
		}

		let user = "{{$userId}}";
		let id = "{{$video->id}}";
		let formData = new FormData(document.getElementById("comment_form"));
		formData.append('user', user);
		formData.append('location', 'free');
		formData.append('rel_id', id);


		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			type: "POST",
			url: "{{route('comment.store')}}",
			data:formData,
			cache:false,
			contentType: false,
			processData: false,
			success: function (response) {
				window.scrollTo(0, 0);

				if(response == 0)
				{
					$('.alert-success').show(200);
					$('.alert-warning').hide(200);

					$('#text').val('');
					$('.success_message').text('نظر شما با موفقیت ثبت شد و در انتظار تایید مدیران سایت قرار گرفت');
					
				}else
				{
					$('.alert-warning').show(200);
					$('.alert-success').hide(200);

					$('.warning_message').text('خطایی وجود دارد . لطفا دوباره امتحان کنید.');

				}


				fadeAlert();
			},
			error: function (err) {
				// $('.loading').hide(50);

				if (err.status == 422) {


					$('.alert-warning').show(200);
					$('.alert-success').hide(200);

					$('.warning_message').text('خطایی وجود دارد . لطفا دوباره امتحان کنید.');


					$.each(err.responseJSON.errors, function (i, error) {

						var el = $(document).find('[name="'+i+'"]');
						let elParent=el;
						elParent=elParent.parent();
						// elParent=elParent.parent();

						elParent.after($('<p style="color: red;margin:-10px 15px 15px 0;" class="rmAll">'+error[0]+'</p>'));
						fadeAlert();
					});
				}
				window.scrollTo(0, 0);

			}
		});




	});


</script>

@endsection

