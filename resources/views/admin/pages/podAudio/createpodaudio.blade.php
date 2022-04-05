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
                    <h3 class="box-title pull-right">ایجاد دوره جدید </h3>
                </div>
                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row col-md-12">

                                            <form class="col-md-12" method="post" action="{{route('podaudio.store')}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <section id="basic-input">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">

                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="basicInput">توضیحات سر فصل</label>
                                                                                    <input type="text" name="title" class="form-control" id="basicInput" placeholder="توضیحات سرفصل">
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="basicInput">شماره فایل</label>
                                                                                    <input type="text" name="show_id" class="form-control" id="basicInput" placeholder="شماره ترتیب دهنده قایل">
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">ذخیره فایل</label>
                                                                                    <input type="file" name="file" class="form-control" placeholder="ذخیره فایل پادکست شامل فایل  ...">
                                                                                    <p class="font-size-sm" > حجم حداکثر قابل ذخیره فایل 100مگابایت باشد</p>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="name">مدت زمان فایل</label>
                                                                                    <input type="text" name="podcast_time" class="form-control" placeholder="مدت زمان فایل را وارد کنید mm:ss..." >
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">نام پادکست</label>
                                                                                    <select class="select2-bg form-control" name="podcast" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                                        @foreach($podcasts as $podcast)
                                                                                            <option value="{{$podcast->id}}">{{$podcast->title}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="row" id="table-striped">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">توضیحات فایل</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <textarea class="form-control" id="summary-ckeditor" name="desc"></textarea>
                                                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                                        <script>
                                                                            CKEDITOR.replace( 'summary-ckeditor', {
                                                                                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                                                filebrowserUploadMethod: 'form'
                                                                            });
                                                                        </script>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success pull-left">ذخیره</button>
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
                        <p class="card-text" ></p>
                        <div class="table-responsive">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('more_scripts')
    <script>
			function myFunction() {
				var x = document.getElementById("category").value;
			}
    </script>

@endsection
