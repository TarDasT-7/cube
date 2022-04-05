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

    <form method='post' action="{{route('plan_description.store')}}">
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
                        <h4 class="card-title">ایجاد توضیحات صفحه حریداری پکیج ها</h4>
                    </div>
           {{--         <div class="card-header">
                        <p class="card-title">تنها برای اولین مرتبه از ذخیره فایل برای ایجاد توضیحات استفاده کنید و حتی الامکان در مراحل بعد از گزینه ویرایش استفاده نمایید</p>
                    </div>--}}


                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <label><h2>توضیحات</h2></label>
                                <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                <script>
                                    CKEDITOR.replace( 'summary-ckeditor', {
                                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                        filebrowserUploadMethod: 'form'
                                    });
                                </script>
                                @if(isset($description->id))
                                        <a class="btn btn-warning" id="update" href="{{route('plan_description.edit', $description->id)}}">ویرایش</a>
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
