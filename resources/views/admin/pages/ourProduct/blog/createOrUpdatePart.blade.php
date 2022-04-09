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

                    @if($rel == 'create')
                    <form method='POST' action="{{route('store_blogItem' , ['id'=>$blog->id])}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">افزودن مورد جدید</h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>عنوان</label>
                                            <input type="text" name="title" class="form-control" placeholder="عنوان خود را وارد کنید">        
                                        </div>
                                        <div class="col-6">
                                            <label>تصویر</label>
                                            <input type="file" name="image" accept="image/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                            <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                                        </div>
                                        <div class="col-12">
                                            <label>توضیحات</label>
                                            <textarea class="form-control" id="summary-ckeditor3" name="description"></textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor3', {
                                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form',

                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>                                

                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
                    
                    @elseif($rel == 'update')
                    <form method='post' action="{{route('update_blogItem' , $item->id)}}"  enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ویرایش مقاله  : {{$item->title}} </h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>عنوان</label>
                                            <input type="text" name="title" class="form-control" value="{{$item->title}}" placeholder="عنوان خود را وارد کنید">        
                                        </div>
                                        <div class="col-5">
                                            <label>تصویر</label>
                                            <input type="file" name="image" accept="image/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                            <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                                        </div>

                                        <div class="col-1">
                                            <label>حذف تصویر</label>
                                            <br>
                                            <input type="checkbox" name="rm_image" value="true" class="form-control">
                                        </div>

                                        <div class="col-12">
                                            <label>توضیحات</label>
                                            <textarea class="form-control" id="summary-ckeditor3" name="description">{{$item->desc}}</textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor3', {
                                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form',

                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success pull-left">ویرایش</button>
                    @endif
                    {{-- <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <label><h2>قسمت دوم</h2></label>
                                
                                @if(isset($about->id))
                                        <a class="btn btn-warning" id="update" href="{{route('aboutUs.edit', $about->id)}}">ویرایش</a>
                                @endif
                                <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </form>

@endsection
@section('more_scripts')
    <script>

    </script>
    @include('admin.partials.datatable_js')
@endsection
