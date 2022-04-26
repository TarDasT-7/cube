<?php

    function showDate($date){$date=Verta::instance($date)->format('Y/m/d');$exDate=explode('/',$date);switch ((int)$exDate[1]){case 1:$exDate[1] = 'فروردین';break;case 2:$exDate[1] = 'اردیبهشت';break;case 3:$exDate[1] = 'خرداد';break;case 4:$exDate[1] = 'تیر';break;case 5:$exDate[1] = 'مرداد';break;case 6:$exDate[1] = 'شهریور';break;case 7:$exDate[1] = 'مهر';break;case 8:$exDate[1] = 'ابان';break;case 9:$exDate[1] = 'آذر';break;case 10:$exDate[1] = 'دی';break;case 11:$exDate[1] = 'بهمن';break;case 12:$exDate[1] = 'اسفند';break;}return $exDate;}
    $date =  showDate($blog->created_at);
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

<section class="container-fluid slide_sec">
    <div class="row slide_npg_row">
        <div class="col-md-12 slide_npg_col p-0" style="background-image: url({{url('/images/blogs/'.$blog->image)}})"></div>
        
        <div class="col-md-12 wv_prjmcol">
            <div class="row">
                <div class="col-md-12 wv_prjcol p-0">
                    <svg  class="wv_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L720,288L1440,160L1440,320L720,320L0,320Z"></path></svg>
                </div>
            </div>
        </div>
    </div>  
</section>

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
                                        <img src="{{'/images/producers/'.$blog->producer->image}}" class="artcl_wrtimg">
                                    </div>
                                        <div class="col-md-12 artcl_wrtnmcol text-center">
                                            <h6 class="font15 txt_gray bold mb-1">{{$blog->producer->first_name}} {{$blog->producer->last_name}}</h6>
                                            <span class="txt_gray font12">{{$blog->producer->profession}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 artcltit_mcol m-auto">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="list-unstyled list-inline pr-0 txt_grayl font12">
                                            <li class=" list-inline-item ">
                                            <a class="txt_org" href="blog_mainpg.html"><span>{{$blog->category->title}}</span></a>
                                            </li>
                                                <li class=" list-inline-item txt_org">
                                            <span> | </span>
                                            </li>
                                            <li class=" list-inline-item mr-1">
                                            <span class=""> <i class="fas fa-calendar-alt font10 fa-fw"></i> {!! $date[2] !!} {!! $date[1] !!} {!! $date[0] !!} </span>
                                            </li>
                                            
                                        </ul>
                                        </div>
                                        <div class="col-md-12">
                                        <h1 class="txt_dgray artcl_tit">{{$blog->title}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        @foreach ($blog->articles as $article)
                            


                            <div class="col-md-12 crsl_txtcol pb-4">
                                {!! $article->desc !!}
                            </div>


                        @endforeach

                        
                    </div>
                </div>


               <div class="col-md-12 art_sharemcol pb-5">
                       <div class="row tags_row">
                           <div class="col-md-12 clr_col pt-4">
                                       <ul class="pr-0 txt_grayl list-inline bold list-unstyled">
                                            @foreach ($tags as $tag)
                                                @if(!empty($tag))
                                                    <li class="list-inline-item  tls_li ml-1">
                                                        <a href="#"  class="txt_gray"><h6 class="font12 mb-0 bold">#{{$tag}} </h6></a>
                                                    </li>
                                                @endif
                                            @endforeach
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
               <div class="row commentpr_row m-0 mt-6">
                   <div class="col-12 col-md-6 prdt_col p-5">
                                       
                                           <div class="row user_rating_row m-0">
                                               <div class="col-12 col-md-12 title_row2 pb-4">
                                               <h4 class="txt_dgray bold">دیدگاه خود را بیان کنید</h4>
                                             </div>
                                                <div class="col-md-12 scm_ico p-0">
                                         <div class="row sc_row">
                                            <div  class="alert-success">

                                                <h1 class="success_message">
                                            
                                                </h1>
                                            
                                            </div>
                                            
                                            
                                            <div class="alert-warning">
                                            
                                                <h1 class="warning_message">
                                            
                                                </h1>
                                            
                                            </div>
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
                   <div class="col-12 col-md-6 prdt_col prdt_cmm_col p-5">
                        <div class="row userscomm_row m-0">
                            <div class="col-12 col-md-12  title_row2 pb-5 ">
                                <h4 class="txt_dgray bold">نظرات کاربران</h4>
                            </div>
                            <div class="col-12 col-md-12 users_cmm_col mCustomScrollbar"
                                data-mcs-theme="minimal-dark">
                                @foreach ($blog->comments as $comment)                                            
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
        
</section>
 <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection


@section('add_script')

<script>

    if (window.innerWidth > 1024) {

        // global vars

        var winWidth = $(window).width();

        var winHeight = $(window).height() -5;



    // set initial div height / width

        $('div.slide_npg_col').css({

            'width': winWidth,

            'height': winHeight,

        });

    }
    // make sure div stays full width/height on resize

    $(window).resize(function () {

        $('div.slide_npg_col').css({

            'width': winWidth,

            'height': winHeight,

        });
    });

</script>
<script> 
 	   $(document).ready(function() {
              var owl = $('.splofs_slcrls');
              owl.owlCarousel({
				rtl:true,
                items:4,
				nav:true,
				navText:['<svg class="navsvg_sl_sploff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve"><g><g><path d="M511.189,251.931c-0.533-1.323-1.323-2.496-2.325-3.477L338.219,77.808c-4.16-4.16-10.923-4.16-15.083,0c-4.16,4.16-4.16,10.923,0,15.083l152.448,152.448H10.667C4.779,245.339,0,250.117,0,256.005s4.779,10.667,10.667,10.667h464.917L323.136,419.12c-4.16,4.16-4.16,10.923,0,15.083c2.091,2.091,4.821,3.115,7.552,3.115s5.461-1.045,7.552-3.115l170.645-170.645c0.96-0.981,1.749-2.176,2.304-3.477C512.277,257.477,512.277,254.533,511.189,251.931z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>','<svg class="navsvg_sl_sploff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve"><g><g><path d="M501.339,245.328H36.421L188.869,92.88c4.16-4.16,4.16-10.923,0-15.083c-4.16-4.16-10.923-4.16-15.083,0L3.141,248.443c-0.981,0.981-1.771,2.176-2.325,3.477c-1.088,2.603-1.088,5.547,0,8.149c0.533,1.323,1.323,2.496,2.325,3.477l170.645,170.645c2.091,2.091,4.821,3.136,7.552,3.136c2.731,0,5.461-1.045,7.552-3.115c4.16-4.16,4.16-10.923,0-15.083L36.421,266.661h464.917c5.888,0,10.667-4.779,10.667-10.667S507.227,245.328,501.339,245.328z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>'],
				loop: true,
                margin:25,
				 slideBy:1, 
                autoplay:false,
                autoplayTimeout: 1000,
                autoplayHoverPause: false,

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


    $('#subForm').click(function () {
        

        $('.rmAll').remove();
        $('.alert-success').hide(200);
        $('.alert-warning').hide(200);

        function fadeAlert() {
            setTimeout(() => {
                $('.alert-success').hide(200);
                $('.alert-warning').hide(200);
            }, 10000);
        }

        let user = "{{$userId}}";
        let id = "{{$blog->id}}";
        let formData = new FormData(document.getElementById("comment_form"));
        formData.append('user', user);
        formData.append('location', 'blog');
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
                // window.scrollTo(0, 0);

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
                // window.scrollTo(0, 0);

            }
        });




    });


</script>
@endsection

