@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css')
@endsection

@section('content')

    <div class="row" id="table-striped">

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
                    <h3 class="box-title pull-right">ویرایش اسلاید: {{$slider->id}}</h3>
                </div>
                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row col-md-10">

                                            <form class="col-md-6" method="post" action="{{route('slider.update', $slider->id)}}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')

                                                <div class="modal-body">
                                                    <div class="col-md-12  mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">عنوان عکس</label>
                                                            <input type="text" name="title" class="form-control" id="basicInput" value="{{$slider->image}}">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="img">تصویر معرفی</label>

                                                            <input type="file" name="image" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                                            <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-12  mb-1">
                                                        <fieldset class="form-group">
                                                            <label> دسته بندی</label>
                                                            <select class="select2-bg form-control" name="category" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                <option value="siteproduct">"محصولات"</option>
                                                                <option value="sitecourse">"دوره های آموزشی"</option>
                                                                <option value="siteadvertismant">"خدمات تولید محتوا و تبلیغات"</option>
                                                                <option value="sitepodcast">"پادکست"</option>
                                                                <option value="blog">"وبلاگ"</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-12  mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">توضیحات عکس</label>
                                                            <textarea  name="desc" class="form-control" id="basicInput" placeholder="">{{$slider->desc}}</textarea>
                                                        </fieldset>
                                                    </div>
                                                <button type="submit" class="btn btn-success pull-left">به روز رسانی</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-text"></p>
                        <div class="table-responsive">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('more_scripts')
    @include('admin.partials.datatable_js')
@endsection
