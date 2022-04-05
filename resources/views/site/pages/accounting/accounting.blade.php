@extends('layouts.site')


@section('more_style')
    <style>
        #image{
            width: 50px;
            height: 50px;
        }

    </style>

@endsection

@section('content')
    {{--moda_create --}}
    <div class="overlay d-none"></div>
    <div id="adrs_chmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content md_contentcus">
                <div class="modal-header md_hdcus  back_black">
                    <button type="button" class="close cls_but txt_ghjyll m-auto" data-dismiss="modal"><svg class="close_svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
  <g>
      <g>
          <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717
			L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859
			c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287
			l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285
			L284.286,256.002z"></path></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg></button>
                    <h6 class="modal-title w-100 txt_white m-auto font18"> ویرایش آدرس </h6>
                </div>
                <div class="modal-body md_bodycus">
                    <div class=" card-login">
                        <div class="plogin-body">
                            <form method="post" action="{{url('address')}}">
                                @csrf
                            <div class="row p-4">

                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-user txt_srmp"></i>
															  </span>
                                        <input class="form-control srch_cus3 txt_gray mr-0" type="text"  name="name" placeholder="نام و نام خانوادگی گیرنده">

                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-phone txt_srmp"></i>
															  </span>
                                        <input class="form-control srch_cus3 txt_gray mr-0" type="text" name="phone" placeholder="شماره تماس">

                                    </div>
                                </div>

                                <div class="col-6 col-md-6 pr_name_col pb-3 pt-3">
                                    <div class="form-group ">
                                        <select class="selectpicker form-control " name="province" onchange="select()" id="province"
                                                data-style="btn btn-default dropdown-toggle btn_cuswhite btn-md
													w-100 cursp txt_dgray filt_but">
                                            <option class="disabled selected">استان</option>
                                            @foreach($provinces as $province)
                                            <option class=""value=" {{$province->id}}" >{{$province->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6 pr_name_col pb-3 pt-3">
                                   <select id="city_id">

                                   </select>
                                    <div class="form-group ">
                                        <select class="selectpicker form-control " name="city" id="city"
                                                data-style="btn btn-default dropdown-toggle btn_cuswhite btn-md
													w-100 cursp txt_dgray filt_but">
                                            <option id="city_id1" class="disabled selected"></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-map-marker txt_srmp"></i>
															  </span>
                                        <input class="form-control srch_cus3 txt_gray mr-0" type="text" name="address" placeholder="آدرس">

                                    </div>
                                </div>
                                <div class="form-group col-12 col-md-12">
                                    <div class="input-group input-group-sm">
														  <span class="input-group-addon span_cus inpgr_addoncus_regmodal" id="sizing-addon8">
														  <i class="fa fa-envelope txt_srmp"></i>
															  </span>
                                        <input class="form-control srch_cus3 txt_gray mr-0" type="text" name="postal_code" placeholder="کدپستی">

                                    </div>
                                </div>
                                <div class="col-md-6 mg">
                                    <div >
                                        <button type="button" class="btn btn-raised btn_cuswhite btn-sm btn_full w-100" data-dismiss="modal">بستن</button>

                                    </div>
                                </div>
                                <div class="col-md-6 mg">
                                    <div >

                                        <button type="submit" href="user_profile.html" class="btn btn-raised btn_cusblgray btn-sm btn_full w-100">ثبت تغییرات</button>
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
    <section class="container-fluid cart_page_cont maincart_cont pt-5 pb-7">
        <div class="row cart_table_row  mr-2 ml-2 back_white mb-4">
            <div class="col-12 col-md-12  prdt_col">
                <div class="prdt_cart_mcol">
                    <div class="row prdt_cart_row">
                        <div class="col-12 col-md-12 table-responsive">
                            <table class="table prcart_table">
                                <thead class="back_gray">
                                <tr>
                                    <th></th>
                                    <th>نام کالا</th>
                                    <th>کد کالا</th>
                                    <th>دسته</th>
                                    <th class="text-center">تعداد</th>
                                    <th>قیمت واحد</th>
                                    <th>تخفیف</th>
                                    <th>قیمت پایانی</th>
                                    <th>حذف</th>
                                </tr>

                                </thead>
                                <form id="send_form" method="post" action="{{url('calculation')}}">
                                <tbody class="">

                                @foreach($accounts as $account)
                                <tr>
                                    <td class="img_td">
                                        <div class="img_td_col p-2">
                                            <img  id="image" src="{{asset('images/'.$account->image)}}"  >
                                        </div>
                                    </td>
                                    <td>
                                        <span class=" sp_d">{{$account->title}}</span>
                                    </td>
                                    <td>
                                        <span class="fa_nu sp_d">{{$account->good_id}}</span>
                                    </td>
                                    <td>
                                        <span class="fa_nu sp_d">{{$account->category}}</span>
                                    </td>
                                    <td class="text-center">
                                        <input class=" input-number" id="number" type="number" name="number" onchange="get_data()" value="{{$account->number}}" min="1" max="10">
                                    </td>
                                    <td>
                                        <span class="fa_nu sp_d">{{number_format($account->price)}} تومان</span>
                                    </td>
                                    <td>
                                        <span class="fa_nu sp_d">{{number_format($account->off)}} تومان</span>
                                    </td>
                                    <td>
                                        <span class="fa_nu sp_d">{{number_format($account->off_price)}} تومان</span>
                                    </td>
                                    <td>

                                        <a href="{{url('delete_account',$account->id)}}"><span class="sp_d"><i class="fas fa-minus-circle txt_srmp"></i> </span></a></td>

                                </tr>
                                @endforeach
                                </tbody>
                                </form>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row cart_main_row ml-2 mr-2">
            <div class="col-md-7 rq_giftcont">
                <div class="row SocialM_col chrow">
                    <div class="col-md-12 addrs_cont">
                        <div class="row pytr_row  w-100 br_bt mb-3">
                            <div class="col-md-6 onlineSu_cnt pt-2">
                                <h6 class="txt_dgray bold pb-4 font16q">انتخاب آدرس تحویل سفارش
                                </h6>
                            </div>
                            <div class="col-md-3 offset-md-3 p-0">

                                <a  data-toggle="modal" data-target="#adrs_chmodal" class="btn btn-raised btn_cuswhite btn-sm btn_full cursp w-100">
                                    <i class="fas fa-plus txt_srmp"></i> وارد کردن آدرس جدید </a>

                            </div>
                        </div>
                        <div class="row addrs_chrow lblpack_st w-100">
                            <div class="col-md-12">

                            </div>
                            @foreach($addresses as $address)
                            <div class="col-md-12 addrs_col ">
                                <div class="row  br_bt m-0">
                                    <div class="form-check col-md-10 custom-controls-stacked pr-2_5 li_stch mb-0">
                                        <label class="custom-control custom-radio ">
                                            <input name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator m-1"></span>
                                            <span class="custom-control-description text-center pr-4 bold pt-2">انتخاب آدرس</span>
                                            <span class="d-inline-block txt_dgray font15 m-1"> </span>

                                        </label>
                                    </div>

                                    <div class="col-md-2 edt_addbutcol m-auto p-0 text-center">
                                        <a class="txt_white cursp edt_addbut font12"  data-toggle="modal" data-target="#adrs_chmodal">اصلاح آدرس</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 addrs_col pt-3">
                                <ul class="list-unstyled pr-0">
                                    <li class="list-group-item li_itemst pt-0 txt_dgray bold">
                                        نام گیرنده : <span class="txt_gray"> {{$address->name}} </span>
                                    </li>
                                    <li class="list-group-item li_itemst pt-0 txt_dgray ">
                                        شماره تماس : <span class="txt_gray fa_nu"> {{$address->phone}} </span>
                                    </li>
                                    <li class="list-group-item li_itemst pt-0 txt_dgray ">
                                        کدپستی : <span class="txt_gray fa_nu"> {{$address->postal_code}}  </span>
                                    </li>
                                    <li class="list-group-item li_itemst pt-0 txt_dgray  text-justify">
                                        آدرس :
                                        <span class="txt_gray">{{$address->address}} </span>

                                    </li>
                                </ul>
                            </div>
                                @endforeach
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-md-5 total_pr_col ">
                <div class="row total_pr_finish_row mb-8">
                    <div class="col-12 col-md-12  pr_fitable">

                        <div class="row total_price_tb ">
                            <div class="col-md-12 pb-3">
                                <div class="row">
                                    <div  class="col-md-6 text-right font15">
                                        جمع کل خرید شما :
                                    </div>
                                    <div class="col-md-6 fa_nu text-left font15">

                                        <span id="price"></span>
                                         تومان
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 pb-3">
                                <div class="row">
                                    <div  class="col-md-6 text-right font15">
                                        هزینه ارسال :
                                    </div>
                                    <div class="col-md-6 fa_nu text-left font15">
                                        {{number_format($send_price->price)}}  تومان
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 pb-3">
                                <div class="row">
                                    <div  class="col-md-6 text-right txt_dgray bold font18">
                                        مبلغ قابل پرداخت :
                                    </div>
                                    <div   class="col-md-6 fa_nu text-left txt_gray bold font18">
                                        <span id="final_price"></span>
                                        <input type="hidden" id="final_price1" name="final_price1" value="">
                                         تومان

                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>




                    <div class="col-md-6 offset-md-6  side_prdt pt-4 pl-0">
                       <a  href="{{url('get_token')}}" class="btn btn-raised btn_cusblgray btn-sm btn_full text-center w-100">تایید و پرداخت نهایی</a>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">

@endsection
@section('more_scripts')

    <script>
        $(document).ready(function() {
            $.getJSON('load' ,function (data){
                console.log(data.finalprice);
                    $("#final_price").append(data.finalprice);
                    $("#price").append(data.price);
                });
                });


        function select() {
            var data=$("#province").val();
            $.ajax({
                type:'get',
                url:"{{route('cities')}}",
                dataType:"json",
                data:{data:data},
                success:function (data) {
                    console.log(data);
                    $("#city_id").append("sasasasas");
                    $(".text").append('<option value="'+data.id+'" >'+data.name+'</option>');

                }

            });
        }
        function get_data() {
            var data=$("#send_form").serialize();
            var _token=$("#_token").val();
            $.ajax({
                type:'POST',
                url:"{{route('calculations')}}",
                dataType:"json",
                data:{_token:_token,data:data},
                success:function (data) {
                    console.log(data);
                    $("#final_price").empty().append(data.finalprice);
                    console.log(data);
                    $("#price").empty().append(data.price);
                }

            });
        }

    </script>
@endsection
