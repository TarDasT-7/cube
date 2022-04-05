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
                    <h3 class="box-title pull-right">ایجاد مقاله جدید </h3>
                </div>
                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row col-md-12">

                                            <form class="col-md-12" method="post" action="{{route('blog.store')}}" enctype="multipart/form-data">
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
                                                                                    <label for="name">عنوان مقاله</label>
                                                                                    <input type="text" name="title" class="form-control" placeholder="عنوان دوره را وارد کنید..."
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">نام نویسنده</label>
                                                                                        <select class="select2-bg form-control" name="author" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                                            @foreach($authors as $author)
                                                                                                <option value="{{$author->id}}">{{$author->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">تصویر معرفی</label>
                                                                                    <input type="file" name="image" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                                                                    <p class="font-size-sm" >ابعاد عکس باید 630 در 420 پیکسل مربع باشد</p>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">دسته بندی</label>
                                                                                    <select class="select2-bg form-control" name="category[]"  id="category" multiple="multiple" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                                        @foreach($categories as $category)
                                                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
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
                                                                <h4 class="card-title">متن مقاله</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
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

    <script src="{{asset('admin/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
@endsection
