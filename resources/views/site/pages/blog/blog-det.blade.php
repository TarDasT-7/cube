@extends('layouts.site')

@section('title', 'درباره ما  ')

@section('content')
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
                                            <img src="{{asset('site/img/avtfm1.png')}}" class="artcl_wrtimg">
                                        </div>
                                        <div class="col-md-12 artcl_wrtnmcol text-center">
                                            <h6 class="font15 txt_gray bold mb-1">{{$blog->author->name}}</h6>
                                            <span class="txt_gray font12">{{$blog->author->spacialty}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 artcltit_mcol m-auto">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="list-unstyled list-inline pr-0 txt_grayl font12">
                                                <li class=" list-inline-item ">
                                                    @foreach($blog->blog_categories as $category)
                                                        <span class="font12 txt_org">{{$category->name}}</span><br>
                                                    @endforeach
                                                </li>
                                                <li class=" list-inline-item txt_org">
                                                    <span> | </span>
                                                </li>
                                                <li class=" list-inline-item mr-1">
                                                    <span class=""> <i class="fas fa-calendar-alt font10 fa-fw"></i> {{Verta::instance($blog->craated_at)->day."".Verta::instance($blog->craated_at)->formatWord('F')."".Verta::instance($blog->craated_at)->year}} </span>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <h1 class="txt_dgray bold artcl_tit">{{$blog->title}}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 txt_dgray col-md-12 pt-5 pb-4 ">
                        </div>
                       {!! $blog->desc !!}

                    </div>
                </div>
                <div class="col-md-12 art_sharemcol pb-5">
                    <div class="row tags_row">
                        <div class="col-md-12 clr_col pt-4">
                            <ul class="pr-0 txt_grayl list-inline bold list-unstyled">
                                <li class="list-inline-item  tls_li ml-1">
                                    <a href="#"  class="txt_gray"><h6 class="font12 mb-0 bold"> تگ </h6></a>
                                </li>
                                <li class="list-inline-item  tls_li ml-1">
                                    <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> برچسب </h6></a>
                                </li>
                                <li class="list-inline-item  tls_li ml-1">
                                    <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> تگ </h6></a>
                                </li>
                                <li class="list-inline-item  tls_li ml-1">
                                    <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> برچسب </h6></a>
                                </li>

                                <li class="list-inline-item  tls_li ml-1">
                                    <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> تگ </h6></a>
                                </li>
                                <li class="list-inline-item  tls_li ml-1">
                                    <a href="#" class="txt_gray"><h6 class="font12 mb-0 bold"> برچسب </h6></a>
                                </li>


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
    <div class="row commentpr_row m-0">
        <div class="col-12 col-md-6 prdt_col p-5">

            <div class="row user_rating_row m-0">
                <div class="col-12 col-md-12 title_row2 pb-4">
                    <h4 class="txt_dgray bold">دیدگاه خود را بیان کنید</h4>
                </div>
                <div class="col-md-12 scm_ico p-0">

                        <form method="post" action="{{url('comment')}}">
                            @csrf
                            <input type="hidden" name="blog" value="{{$blog->id}}">
                            <div class="form-group col-12 col-md-12 ">
                                <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-envelope txt_org"></i>
															  </span>
                                    <input name="email" class="form-control srch_cus3 txt_dgray mr-0" type="email" placeholder="ایمیل">

                                </div>
                            </div>
                            <div class="form-group col-12 col-md-12 ">
                                <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-user txt_org"></i>
															  </span>
                                    <input name="name" class="form-control srch_cus3  txt_dgray mr-0" type="text" placeholder="نام و نام خانوادگی">

                                </div>
                            </div>
                            <div class="form-group col-12 col-md-12 mg">
                                <textarea name="desc" class="form-control cus_txtarea" placeholder="پیام" id="exampleFormControlTextarea1" rows="5"></textarea>

                            </div>
                            <div class="col-md-5 offset-md-7 mg">
                                <div>
                                    <button type="submit" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100">ارسال</button>
                                </div>
                            </div>
                        </form>
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
                    <div class="row">
                        @foreach($comments as $comment)
                            <div class="col-12 col-md-12 users_cmm_col mCustomScrollbar"
                                 data-mcs-theme="minimal-dark">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <h6 class="blackgray">{{$comment->name}} </h6>
                                    </div>

                                    <div class="col-12 col-md-12">
                                        {{$comment->desc}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

