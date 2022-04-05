@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css')
    <style>
        #submit{
            margin-top: 15px;
        }
        #update{
            margin-top: 15px;
            margin-right: 15px;
        }
        #html{
            background-color: white;
        }
    </style>
@endsection

@section('content')

    <form method='post' action="{{route('aboutUs.store')}}">
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
                        <h4 class="card-title">ایجاد توضیحات صفحه درباره ما</h4>
                    </div>
           {{--         <div class="card-header">
                        <p class="card-title">تنها برای اولین مرتبه از ذخیره فایل برای ایجاد توضیحات استفاده کنید و حتی الامکان در مراحل بعد از گزینه ویرایش استفاده نمایید</p>
                    </div>--}}

                    <div id="submit" class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <label><h2>قسمت اول</h2></label>
                                <textarea class="form-control" id="summary-ckeditor1" name="description1"></textarea>
                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                <script>
                                        CKEDITOR.replace( 'summary-ckeditor1', {
                                            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                            filebrowserUploadMethod: 'form'
                                        });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <label><h2>قسمت دوم</h2></label>
                                <textarea class="form-control" id="summary-ckeditor2" name="description2"></textarea>
                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                <script>
                                    CKEDITOR.replace( 'summary-ckeditor2', {
                                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                        filebrowserUploadMethod: 'form'
                                    });
                                </script>
                                @if(isset($about->id))
                                        <a class="btn btn-warning" id="update" href="{{route('aboutUs.edit', $about->id)}}">ویرایش</a>
                                @endif
                                <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
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
    <script>

    </script>
    @include('admin.partials.datatable_js')
@endsection
