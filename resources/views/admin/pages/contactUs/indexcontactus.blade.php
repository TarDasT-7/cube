@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css')
    <style>


        #html{
            background-color: white;
        }
    </style>
@endsection

@section('content')

    <form method='post' action="{{route('contactUs.store')}}">
        @csrf
        <div class="row" id="table-striped">
            <div class="col-12">
                @if(session()->has('add'))
                    <div class="alert alert-danger">
                        <div>{{session('add')}}</div>
                    </div>
                @endif
            </div>
            <div class="col-12">
                @if(session()->has('update'))
                    <div class="alert alert-danger">
                        <div>{{session('update')}}</div>
                    </div>
                @endif
            </div>
            <div class="col-12">
                @if(session()->has('delete'))
                    <div class="alert alert-danger">
                        <div>{{session('delete')}}</div>
                    </div>
                @endif
            </div>
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ایجاد توضیحات صفحه ارتباط با ما</h4>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">

                                <label class="mt-3"><h2>جانمایی</h2></label>
                                <div class="col-xl-6 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <input type="text" name="location" class="form-control" placeholder="محل شرکت را از گوگل مپ وارد کنید..." >
                                    </fieldset>
                                </div>
                                <label class="mt-3"><h2>توضیحات</h2></label>
                                <div class="col-xl-6 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="عنوان شرکت را وارد کنید..." >
                                    </fieldset>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="شماره تماس را وارد کنید..." >
                                    </fieldset>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="آدرس دفتر مرکزی را وارد کنید..." >
                                    </fieldset>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="ایمیل شرکت را وارد کنید..." >
                                    </fieldset>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <input type="text" name="facebook" class="form-control" placeholder="آدرس فیسبوک شرکت را وارد کنید..." >
                                    </fieldset>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <input type="text" name="linkedin" class="form-control" placeholder="آدرس لینک این شرکت را وارد کنید..." >
                                    </fieldset>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <input type="text" name="instagram" class="form-control" placeholder="آدرس اینستاگرام شرکت را وارد کنید..." >
                                    </fieldset>
                                </div>
                                <div class="col-xl-6 col-md-6 col-12 mb-1">
                                    <fieldset class="form-group">
                                        <input type="text" name="telegram" class="form-control" placeholder="آدرس تگرام شرکت را وارد کنید..." >
                                    </fieldset>
                                </div>
                                @if(isset($contact->id))
                                    <a class="btn btn-warning" class="mt-1 ml-2" href="{{route('contactUs.edit', $contact->id)}}">ویرایش</a>
                                @endif
                                <button type="submit"  class="btn btn-success pull-left ">ذخیره</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="col " id="html">
        @if(isset($about))
            {!! $about->description !!}
        @endif
    </div>
@endsection
@section('more_scripts')

    @include('admin.partials.datatable_js')
@endsection
