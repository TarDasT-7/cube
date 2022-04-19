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
        .slider{
				width: 100%;
				-webkit-appearance: none;
				background: #e1ecf4;
				height: 12px;
				opacity: 0.7;
				-webkit-transition: .5s;
				transition: opacity .5s;
			}
			.slider:hover {
				opacity: 1;
			}
			.slider::-webkit-slider-thumb {
				-webkit-appearance: none;
				appearance: none;
				width: 20px;
				height: 20px;
				background: #6acac8;
				cursor: pointer;
			}

			.slider::-moz-range-thumb {
				width: 20px;
				height: 20px;
				background: #6acac8;
				cursor: pointer;
			}
			#showOffRangeValue{
				display: inline-block;
				float: left;
				margin-left: 5px;
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
                    <form method='POST' action="{{route('course.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ایجاد دوره آموزشی</h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>عنوان</label>
                                            <input type="text" name="title" class="form-control" placeholder="عنوان خود را وارد کنید">        
                                        </div>
                                        <div class="col-4">
                                            <label>ویدئو دمو</label>
                                            <input type="file" name="video" accept="video/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                        </div>
                                        <div class="col-4">
                                            <label>کاور پیش فرض</label>
                                            <input type="file" name="image" accept="images/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <label>زمان دوره</label>
                                            <input type="text" name="time" class="form-control" placeholder="12:40:15 فرمت مناسب ساعت:دقیقه:ثانیه">        
                                        </div>
                                        <div class="col-3">
                                            <label>تولید کننده</label>
                                            <select class="select2-bg form-control" name="producer" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($producers as $producer)
                                                    <option value="{{$producer->id}}">{{$producer->first_name}} {{$producer->last_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label>دسته بندی</label>
                                            <select class="select2-bg form-control" name="category" id="cate" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option value="">دسته بندی را مشخص کنید</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label>زیر دسته بندی</label>
                                            <select class="select2-bg form-control" name="subCate" id="sub" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option value="">ابتدا دسته بندی را مشخص کنید</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>سطح</label>
                                            <select class="select2-bg form-control" name="hardship" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option value="1">سطح 1</option>
                                                <option value="2">سطح 2</option>
                                                <option value="3">سطح 3</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>قیمت دوره</label>
                                            <input type="text" name="price" class="form-control" placeholder="قیمت دوره...">
                                        </div>
                                        <div class="col-4">
                                            <label>تخفیف ( درصد )</label>
                                            <p id="showOffRangeValue">در صد: <span id="demo"></span></p>
                                            <input name="off" type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>نوع برگزاری</label>
                                            <select class="select2-bg form-control" name="type" id="type" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option value="دانلود">دانلود</option>
                                                <option value="آنلاین">آنلاین</option>
                                            </select>
                                        </div>
                                        <div class="col-10 doc" style="display: none">
                                            <label>لینک کلاس آنلاین</label>
                                            <textarea class="form-control lt" id="" rows="1" name="link"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>توضیح مختصر</label>
                                            <textarea class="form-control" id="summary-ckeditor2" rows="12" name="small_description"></textarea>
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
                    <form method='post' action="{{route('course.update' , $course->id)}}"  enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ویرایش دوره : </h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>عنوان</label>
                                            <input type="text" name="title" class="form-control" value="{{$course->title}}" placeholder="عنوان خود را وارد کنید">        
                                        </div>
                                        <div class="col-4">
                                            <label>ویدئو دمو</label>
                                            <input type="file" name="video" accept="video/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                        </div>
                                        <div class="col-4">
                                            <label>کاور پیش فرض</label>
                                            <input type="file" name="image" accept="images/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <label>زمان دوره</label>
                                            <input type="text" name="time" class="form-control" value="{{$course->course_time}}" placeholder="12:40:15 فرمت مناسب ساعت:دقیقه:ثانیه">        
                                        </div>
                                        <div class="col-3">
                                            <label>تولید کننده</label>
                                            <select class="select2-bg form-control" name="producer" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($producers as $producer)
                                                    <option @if($producer->id == $course->producer_id) selected @endif value="{{$producer->id}}">{{$producer->first_name}} {{$producer->last_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label>دسته بندی</label>
                                            <select class="select2-bg form-control" name="category" id="cate" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option value="">دسته بندی را مشخص کنید</option>
                                                @foreach ($categories as $category)
                                                    <option @if($category->id == $course->category) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label>زیر دسته بندی</label>
                                            <select class="select2-bg form-control" name="subCate" id="sub" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option value="{{$course->sub_category}}">{{$course->subcate->title}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>سطح</label>
                                            <select class="select2-bg form-control" name="hardship" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option @if($course->level == 1) selected @endif value="1">سطح 1</option>
                                                <option @if($course->level == 2) selected @endif value="2">سطح 2</option>
                                                <option @if($course->level == 3) selected @endif value="3">سطح 3</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <label>قیمت دوره</label>
                                            <input type="text" name="price" class="form-control" value="{{$course->price}}" placeholder="قیمت دوره...">
                                        </div>
                                        <div class="col-4">
                                            <label>تخفیف ( درصد )</label>
                                            <p id="showOffRangeValue">در صد: <span id="demo"></span></p>
                                            <input name="off" type="range" min="0" max="100" value="{{$course->off}}" class="slider" id="myRange">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <label>نوع برگزاری</label>
                                            <select class="select2-bg form-control" name="type" id="type" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option @if($course->type == 'دانلود') selected @endif value="دانلود">دانلود</option>
                                                <option @if($course->type == 'آنلاین') selected @endif value="آنلاین">آنلاین</option>
                                            </select>
                                        </div>

                                        <div class="col-10 doc" @if($course->type == 'دانلود') style="display:none;" @endif>
                                            <label>لینک کلاس آنلاین</label>
                                            <textarea class="form-control lt" id="" rows="1" name="link">{{$course->link}}</textarea>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>توضیح مختصر</label>
                                            <textarea class="form-control" id="summary-ckeditor2" rows="12" name="small_description">{{$course->desc}}</textarea>
                                        </div>
                                        <div class="col-8">
                                            <label>توضیحات کامل</label>
                                            <textarea class="form-control" id="summary-ckeditor3" name="long_description">{{$course->long_desc}}</textarea>
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

        $('#type').change(function () {

            if($(this).val() == 'دانلود')
            {
                $('.doc').hide(250);
                $('.lt').val('');

            }else if($(this).val() == 'آنلاین')
            {
                $('.doc').show(300);
                
            }

            

        });


    </script>

    <script>

        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        var outputTwo = document.getElementById("off_type");
        output.innerHTML = slider.value;

        slider.oninput = function() {
        output.innerHTML = this.value;
        outputTwo.value = this.value;
        }
        $('#off_type').change(function() {
            $('#myRange').val($('#off_type').val());
            $('#demo').html($('#off_type').val());
        })


        $('#cate').on('change' , function () {
            var cate=$(this).val();
            $('#sub').html('');
            $.ajax({
                type: "GET",
                url: "{{route('subcateFind')}}",
                data: {cate:cate},
                success: function (response) {
                    
                    var recorde=``;
                    if(response.length > 0)
                    {

                        for(var i = 0 ; i < response.length ; i++)
                        {
                            recorde=`<option value="`+ response[i].id +`">`+ response[i].title +`</option>`
                            $('#sub').append(recorde);
                        }

                    }else
                    {
                        recorde=`<option value="">موردی وجود ندارد</option>`
                            $('#sub').append(recorde);
                    }
                }
            });

        })


    </script>
    @include('admin.partials.datatable_js')
@endsection
