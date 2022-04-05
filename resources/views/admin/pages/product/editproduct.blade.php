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
                    <h3 class="box-title pull-right">ویرایش محصول: {{$product->id}}</h3>
                </div>
                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row col-md-12">

                                            <form class="col-md-12" method="post" action="{{route('product.update',$product->id)}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                @method('PATCH')
                                                <section id="basic-input">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">

                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="name">عنوان محصول</label>
                                                                                    <input type="text" name="name" class="form-control" value="{{$product->name}}" >
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">

                                                                                    <label for="img">تصویر معرفی</label>
                                                                                    <input type="file" name="image" class="form-control" value="{{$product->name}}">
                                                                                    <p class="font-size-sm" >ابعاد عکس باید 710 در 870 پیکسل مربع باشد</p>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">دسته</label>
                                                                                    <select  class="select2-bg form-control" onchange="get_data();get_teacher()" name="category"  id="select"  data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                                        <option value="#">--انتخاب دسته--</option>
                                                                                        @foreach($categories as $category)
                                                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">زیر دسته</label>
                                                                                    <select  class="select2-bg form-control"  name="sub_category"  id="sub_category"  onchange="get_teacher()" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                                        <option value="#">--انتخاب زیر دسته--</option>
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">نام استاد</label>
                                                                                    <select class="select2-bg form-control" name="teacher" id="teacher" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                                        <option value="#">--انتخاب استاد--</option>
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">سطح محصول</label>
                                                                                    <select class="select2-bg form-control" name="level" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                                        <option >--سطح--</option>
                                                                                        <option >کودک</option>
                                                                                        <option >نوجوان</option>
                                                                                        <option >بزرگسال</option>
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="name">کد محصول</label>
                                                                                    <input type="text" name="good_id" class="form-control" value="{{$product->good_id}}" >
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="name">تعداد ویدیو</label>
                                                                                    <input type="text" name="video_num" class="form-control" value="{{$product->video_num}}" >
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="name">زبان</label>
                                                                                    <input type="text" name="language" class="form-control" value="{{$product->language}}" >
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="name">ویژگی های محصول</label>
                                                                                    <input type="text" name="properties" class="form-control" value="{{$product->properties}}" >
                                                                                </fieldset>
                                                                            </div>

                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="name">قیمت</label>
                                                                                    <input type="text" name="price" class="form-control" value="{{$product->price}}" >
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="name">قیمت تخفیف خورده</label>
                                                                                    <input type="text" name="off_price" class="form-control" value="{{$product->off_price}}" >
                                                                                </fieldset>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </section>
                                                <div class="row" id="table-striped">

                                                    <div class="col-xl-6 col-md-6 col-12 ">
                                                        <div class="card-header">
                                                            <h4 class="card-title">فهرست مطالب</h4>
                                                        </div>
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <textarea class="form-control" id="summary-ckeditor-1" name="content">{{$product->content}}</textarea>
                                                                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                                    <script>
                                                                        CKEDITOR.replace( 'summary-ckeditor-1', {
                                                                            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                                            filebrowserUploadMethod: 'form'
                                                                        });
                                                                    </script>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-12 "> <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">نقد و بررسی محصول</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <textarea class="form-control" id="summary-ckeditor-2" name="review">{{$product->review}}</textarea>
                                                                        <script src="{{ asset('ckeditor4standard/ckeditor.js') }}"></script>
                                                                        <script>
                                                                            CKEDITOR.replace( 'summary-ckeditor-2', {
                                                                                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                                                filebrowserUploadMethod: 'form'
                                                                            });
                                                                        </script>

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
    <script>
        function get_data() {
            var data=$("#select").val();
            $.ajax({
                type:'get',
                url:"{{route('product_selects')}}",
                dataType:"json",
                data:{data:data},
                success:function (data) {
                    var teach="<option value='"+0+"'>"+"--زیر دسته--"+"</option>";
                    console.log(data);
                    for(var key in data){
                        console.log(data[key]['id']);
                        teach+="<option value='"+data[key]['id']+"'>"+data[key]['name']+"</option>";
                    }

                    $("#sub_category").html(teach);
                    //append('<option value="'+data.id+'" selected>'+data.name+'</option>');



                }

            });
        }
    </script>
    <script>
        function get_teacher() {
            var data=$("#select").val();
            $.ajax({
                type:'get',
                url:"{{route('product_teachers')}}",
                dataType:"json",
                data:{data:data},
                success:function (data) {
                    var teach="<option value='"+0+"'>"+"--نام استاد--"+"</option>";
                    console.log(data);
                    for(var key in data){
                        console.log(data[key]['id']);
                        teach+="<option value='"+data[key]['id']+"'>"+data[key]['name']+"</option>";
                    }

                    $("#teacher").html(teach);
                    //append('<option value="'+data.id+'" selected>'+data.name+'</option>');



                }

            });
        }
    </script>
@endsection
