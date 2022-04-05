@extends('layouts/site')

@section('title', 'اطلاعات کاربری و پیگیری سفارشات')
<style>
    #exampleModalLabel{
        background-color: white;
        margin-right:20px;
        margin-top:5px;
        margin-bottom:5px;
    }
</style>
@section('content')

<section class="main ">
    {{--modal page--}}
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="exampleModalLabel class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ویرایش پروفایل</h5>
                </div>
                <form method="post" action="{{url('profile')}}">
                    {{csrf_field()}}
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">نام و نام خانوادگی </label>
                                <input type="text" name="name" class="form-control" id="basicInput" VALUE="{{$user->name}} ">
                            </fieldset>
                        </div>
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">تاریخ تولد</label>
                                @if($user->birthday)
                                     <input type="text" name="birthday" class="form-control" id="basicInput" VALUE="{{$user->birthday}} ">
                                @else
                                    <input type="text" name="birthday" class="form-control" id="basicInput" placeholder="yyyy/mm/dd">
                                @endif
                            </fieldset>
                        </div>
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                            <label for="basicInput">جنسیت</label>
                            <select class="select2-bg form-control" name="gender" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    <option value="">---</option>
                                    <option value="مرد">مرد</option>
                                    <option value="زن">زن</option>
                            </select>
                            </fieldset>
                        </div>
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">کدملی</label>
                                @if($user->id_name)
                                    <input type="text" name="id_num" class="form-control" id="basicInput" VALUE="{{$user->id_num}} ">
                                @else
                                    <input type="text" name="id_num" class="form-control" id="basicInput" placeholder="شماره ملی">
                                @endif
                            </fieldset>
                        </div>
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">موبایل</label>
                                <input type="text" name="phone" class="form-control" id="basicInput" VALUE="{{$user->phone}} ">
                            </fieldset>
                        </div>
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">ایمیل</label>
                                <input type="text" name="email" class="form-control" id="basicInput" VALUE="{{$user->email}} ">
                            </fieldset>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ذخیره </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    {{--end of modal page--}}
    <div class="container-fluid cart_page_cont main_cont pb-5 pt-5">
        <div class="row cart_main_row m-0">
            <div class="col-12 col-md-12 profile_col_cont p-5">
                <div class="card-header card_header_cus pb-0 pr-0">
                    <ul class="nav nav-tabs nav_cus pr-0">
                        <li class="nav-item navtab_st">
                            <a class="a_style4 nav-link prd_dtlink active" data-toggle="tab" href="#user_info">اطلاعات کاربر</a>
                        </li>
                        <li class="nav-item navtab_st">
                            <a class="a_style4 nav-link prd_dtlink" data-toggle="tab" href="#payment_list">گزارش خرید</a>
                        </li>
                        <li class="nav-item navtab_st ">
                            <a class="a_style4 nav-link prd_dtlink" data-toggle="tab" href="#payment_track">پیگیری خرید</a>
                        </li>
                        <li class="nav-item navtab_st">
                            <a class="a_style4 nav-link prd_dtlink" data-toggle="tab" href="#address_book">
                                آدرس ها</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body crd_ucus">
                    <div class="tab-content tb_cn">
                        <div class="tab-pane active container-fluid pb-5" id="user_info">
                            <div class="col-12 col-md-12 table-responsive pr-0">
                                <table class="table tabe_usepro_table ">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="user_pic_col ">
                                                <img src="img/if_user_male_172625.png" class="user_pic">
                                                <div class="usr_infoaddimgmcol">
                                                    <a href="#">
                                                        <div class="usr_infoaddimgcol">
                                                            <!--													<i class="fa fa-plus add_plsicoimg txt_gray"></i>
                                                            -->													 <svg class="fa fa-plus add_plsicoimg txt_gray" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
    <g>
        <path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
			v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z"/>
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
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td  class=" txt_black bold font24">اطلاعات کاربر</td>
                                        <td>
                                            <span class="name_fa  txt_cyan font24"><i class="fa fa-star font13"></i> امتیاز : </span>
                                            <span class="fa_nu  txt_cyan font24"> 12345 </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="txt_black bold">نام :
                                            <span class="name_fa  txt_gray">{{$name[0]}}</span>
                                        </td>
                                        <td class="txt_black bold ">نام خانوادگی :
                                            @if(isset($name[1]))
                                            <span class="name_fa  txt_gray">{{$name[1]}}</span>
                                                @endif
                                        </td>
                                        <td class="txt_black bold ">تاریخ تولد :
                                            <span class="brithdate rtl txt_gray">
																	{{$user->birthday}} </span>
                                        </td>
                                        <td class="txt_black bold ">جنسیت :
                                            <span class="gener_us txt_gray">
																{{$user->gender}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="txt_black bold ">کد ملی :
                                            <span class="brithdate  rtl txt_gray">
																	{{$user->id_num}} </span>
                                        </td>
                                        <td class="txt_black bold ">موبایل :
                                            <span class="name_fa  txt_gray">{{$user->phone}} </span>
                                        </td>

                                        <td class="txt_black bold ">ایمیل :
                                            <span class="email_us  txt_gray">
															    {{$user->email}}</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="row buyer_info_row ">

                                <div class="col-12 col-md-6 button_col">
                                    <div class="row">
                                        <div class="col-6 col-md-4 col-md-offset-2">
                                            <button type="button" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 cursp" data-toggle="modal" data-target="#Modal">
                                                ویرایش<i class="fa fa-pencil-alt fa-fw"></i>
                                            </button>
                                        </div>
                                        <div class="col-6 col-md-6">
                                            <a type="sumbit" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 cursp"><i class="fa fa-lock fa-fw"></i> تغییر کلمه عبور </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container-fluid" id="payment_list">
                            <div class="row guide_row">

                                <div class="col-md-12 info_title cursp txt_dgray collp_head pb-3">
                                    <h6 class="txt_dgray bold" data-toggle="collapse" data-target="#bought_prsh">
                                        <i class="fa fa-fw txt_dgray font12 fa-minus"></i> کالاهای خریداری شده از فروشگاه  </h6>
                                </div>
                                <div class="col-md-12 collapse collp_count pb-4 show" id="bought_prsh" >
                                    <div class="row">
                                        <div class="col-12 col-md-12 table-responsive">
                                            <table class="table prdbght_table">
                                                <thead class="back_gray">
                                                <tr>
                                                    <th></th>
                                                    <th>نام محصول</th>
                                                    <th>کد محصول</th>

                                                    <th>قیمت </th>
                                                    <th>تخفیف</th>
                                                    <th>قیمت پایانی</th>
                                                </tr>
                                                </thead>
                                                <tbody class="">
                                                <tr>
                                                    @foreach($accounts as $account)
                                                    <td class="img_td">
                                                        <div class="img_td_col p-2">
                                                            <img class="prcart_img" src="{{asset('images/'.$account->image)}}">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="et_prov sp_d">{{$account->title}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="et_pr d-block fa_nu">{{$account->good_id}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="air_line_name sp_d fa_nu">{{$account->price}} تومان</span>
                                                    </td>
                                                    <td>
                                                        <span class="air_line_name sp_d fa_nu">{{$account->off}} تومان </span>
                                                    </td>
                                                    <td>
                                                        <span class="air_line_name sp_d fa_nu">{{$account->off_price}} تومان</span>
                                                    </td>
                                                    @endforeach
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container-fluid" id="payment_track">
                            <div class="row pytr_row ">
                                <div class="col-md-12 onlineSu_cnt pt-3">
                                    <h4 class="txt_dgray bold pb-4 font16q">* کد پیگیری خرید خود را وارد کنید</h4>
                                    <div class="row onlineSu_row">
                                        <div class="col-md-12 SocialM_col pt-5 pb-4">
                                            <form id="payment_track_form" action="" method="post" role="form" class="w-100">
                                                <div class="row sc_row">
                                                    <div class="form-group col-12 col-md-6 pb-4">
                                                        <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-code txt_org"></i>
															  </span>
                                                            <input class="form-control srch_cus3 txt_dgray mr-0" type="email" placeholder="کد پیگیری">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mg pt-2">

                                                        <a type="sumbit"  href="user_profile.html" class="btn btn-raised btn_cusblgray btn-sm btn_full w-50 float-left">جستجو</a>

                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container-fluid" id="address_book">
                            <div class="row pytr_row pt-4">
                                <div class="col-md-6 onlineSu_cnt pt-3">
                                    <h4 class="txt_dgray bold pb-4 font16q">آدرس های شما</h4>
                                </div>
                                <div class="col-md-3 offset-md-3 mg pt-4">
                                    <div >
                                        <a  data-toggle="modal" data-target="#adrs_chmodal" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100 cursp"><i class="fas fa-plus"></i> وارد کردن آدرس جدید </a>
                                    </div>
                                </div>

                                <div class="col-md-12 SocialM_col pt-5 pb-4">
                                    <div class="row sc_row">
                                        <h6 class="txt_dgray bold  pt-3"></h6>
                                        <ol class="txt_dgray">
                                            @foreach($addresses as $address)
                                            <li>
                                                {{$address->address}}
                                            </li>
                                            @endforeach
                                        </ol>
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
