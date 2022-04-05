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
    <div class="row" id="table-striped">
        <div class="col-12">
            @if(session()->has('exist'))
                <div class="alert alert-danger">
                    <div>{{session('exist')}}</div>
                </div>
            @endif
        </div>
    </div>
    <div class="row" id="table-striped">
        <div class="col-12">
            @if(session()->has('limited'))
                <div class="alert alert-danger">
                    <div>{{session('limited')}}</div>
                </div>
            @endif
        </div>
    </div>
    <section class="container-fluid prtfil_mainsec my-5 ">
        <div class="row blgmntit_row justify-content-center">
            <div class="col-md-10 blgmntitt_col txt_srmp font14 m-auto back_gray p-5">
                <h1 class="bbj txt_srmp font40 mb-3">خرید اشتراک</h1>
                @if(isset($desc))
             {!! $desc->description !!}
                    @endif
            </div>

        </div>
        <div class="row plans_mainrow">
            <div class="col-md-12 plns_cont">
                <div class="row  plns_mrow justify-content-center">
                    <div class="col-md-10 plns_mcol">
                        <div class="row plns_row justify-content-center">
                            @if(isset($packages))
                           @foreach($packages as $package)
                            <div class="col-md-3 pln_mcol">
                                <div class="row prid_plan_mrow m-0 justify-content-center">
                                    <div class="col-md-12 prid_plan_imgmcol">
                                        <div class="row prid_plan_imgrow m-2 justify-content-center">
                                            <div class="col-md-7 prid_plan_imgcol text-center">
                                                <svg class="plan_svgimg" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g fill="#f3f3f3"><path d="m16 216 192 96 48-56-192-96z"/><path d="m448 160-192 96 48 56 192-96z"/></g><path d="m502.07 210.79-48-56a7.855 7.855 0 0 0 -2.49-1.94v-.01l-192-96a8.049 8.049 0 0 0 -7.16 0l-192 96v.01a7.855 7.855 0 0 0 -2.49 1.94l-48 56a8.01 8.01 0 0 0 2.49 12.37l43.58 21.78v107.06a8.011 8.011 0 0 0 4.42 7.16l192 96a8.049 8.049 0 0 0 7.16 0l192-96a8.011 8.011 0 0 0 4.42-7.16v-107.06l43.58-21.78a8.01 8.01 0 0 0 2.49-12.37zm-473.33 2.64 37.27-43.48 177.25 88.62-37.27 43.48zm219.26 221.63-176-88v-94.12l132.42 66.22a8.015 8.015 0 0 0 9.65-1.95l33.93-39.58zm8-188-174.11-87.06 174.11-87.06 174.11 87.06zm184 100-176 88v-157.43l33.93 39.58a8.015 8.015 0 0 0 9.65 1.95l132.42-66.22zm-133.99-45.01-37.27-43.48 177.25-88.62 37.27 43.48z" fill="#3c2666"/></g></svg>
                                            </div>
                                            <div class="col-md-12 planprds_txtmcol text-center">
                                                <h4 class="txt_srmp bold">{{$package->title}}</h4>
                                                <p class="txt_srmp bold font16 mb-2">{{number_format($package->off_price).' '. 'تومان'.' ' .'('.  $package->plan_category_id .'روزه' .')'}} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 plan_txtdtcol text-center">
                                       {!! $package->detail !!}
                                    </div>

                                    <div class="col-10 col-md-10 crsl_butcol mb-2">
                                        <a data-toggle="modal" data-target="#rulls_md" href="#" type="button" class="btn btn-raised btn_cus_backstpgray btn-md btn_full w-100 font14">جزییات بیشتر</a>
                                    </div>
                                    <div class="col-10 col-md-10 crsl_butcol mb-2">
                                        <form method="post" action="{{route('account.store')}}">
                                            @csrf
                                            <input type="hidden" name="code" value="{{$package->id}}">
                                            <input type="hidden" name="category" value="پکیج">
                                            <button  class="btn btn-raised btn_cusblgray btn-md btn_full w-100 font14">انتخاب و خرید پکیج</button>
                                        </form>
                                    </div>




                                </div>
                            </div>
                            @endforeach
                                @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

