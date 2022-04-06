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
                    <form method='POST' action="{{route('free-video.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ایجاد ویدئو رایگان</h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <label>عنوان</label>
                                            <input type="text" name="title" class="form-control" placeholder="عنوان خود را وارد کنید">        
                                        </div>
                                        <div class="col-3">
                                            <label>زمان ویدئو</label>
                                            <input type="text" name="time" class="form-control" placeholder="12:40:15 فرمت مناسب ساعت:دقیقه:ثانیه">        
                                        </div>
                                        <div class="col-3">
                                            <label>ویدئو دمو</label>
                                            <input type="file" name="video" accept="video/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                        </div>
                                        <div class="col-3">
                                            <label>کاور پیش فرض</label>
                                            <input type="file" name="image" accept="images/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                        </div>
                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>تولید کننده</label>
                                            <select class="select2-bg form-control" name="producer" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($producers as $producer)
                                                    <option value="{{$producer->id}}">{{$producer->first_name}} {{$producer->last_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>سطح</label>
                                            <select class="select2-bg form-control" name="hardship" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>دسته بندی</label>
                                            <select class="select2-bg form-control" name="category" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>توضیح مختصر</label>
                                            <textarea class="form-control" id="summary-ckeditor2" rows="16" name="small_description"></textarea>
                                        </div>
                                        <div class="col-8">
                                            <label>توضیحات کامل</label>
                                            <textarea class="form-control" id="summary-ckeditor3" name="long_description"></textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor3', {
                                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form'
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
                    
                    @elseif($rel == 'update')
                    <form method='post' action="{{route('free-video.update' , $video->id)}}"  enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ویرایش ویدئو رایگان : </h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <label>عنوان</label>
                                            <input type="text" name="title" class="form-control" value="{{$video->title}}" placeholder="عنوان خود را وارد کنید">        
                                        </div>
                                        <div class="col-3">
                                            <label>زمان ویدئو</label>
                                            <input type="text" name="time" class="form-control" value="{{$video->time}}" placeholder="12:40:15 فرمت مناسب ساعت:دقیقه:ثانیه">        
                                        </div>
                                        <div class="col-3">
                                            <label>ویدئو دمو</label>
                                            <input type="file" name="video" accept="video/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                        </div>
                                        <div class="col-3">
                                            <label>کاور پیش فرض</label>
                                            <input type="file" name="image" accept="images/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                        </div>
                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>تولید کننده</label>
                                            <select class="select2-bg form-control" name="producer" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($producers as $producer)
                                                    <option @if($producer->id == $video->producer_id) selected @endif value="{{$producer->id}}">{{$producer->first_name}} {{$producer->last_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>سطح</label>
                                            <select class="select2-bg form-control" name="hardship" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option @if($video->hardship == '1') selected @endif value="1">1</option>
                                                <option @if($video->hardship == '2') selected @endif value="2">2</option>
                                                <option @if($video->hardship == '3') selected @endif value="3">3</option>
                                                <option @if($video->hardship == '4') selected @endif value="4">4</option>
                                                <option @if($video->hardship == '5') selected @endif value="5">5</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>دسته بندی</label>
                                            <select class="select2-bg form-control" name="category" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($categories as $category)
                                                    <option @if($category->id == $video->category_id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>توضیح مختصر</label>
                                            <textarea class="form-control" id="summary-ckeditor2" rows="16" name="small_description">{{$video->small_description}}</textarea>
                                        </div>
                                        <div class="col-8">
                                            <label>توضیحات کامل</label>
                                            <textarea class="form-control" id="summary-ckeditor3" name="long_description">{{$video->long_description}}</textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor3', {
                                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form'
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
