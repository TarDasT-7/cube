@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css');

    <style>
       #add{
           color: white;
       }

    </style>
@endsection

@section('content')

    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ایجاد بلاگ جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action='{{route('blog.store')}}' enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                        
                        <div class="col-md-12 ">
                            <fieldset class="form-group">
                                <label >تصویر</label>
                                <input type="file" name="image" accept="image/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                            </fieldset>
                        </div>
                        
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >عنوان</label>
                                <input type="text" name="title" class="form-control" placeholder="عنوان فایل خود را وارد کنید">
                            </fieldset>
                        </div>
                        
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >دسته بندی</label>
                                <select class="select2-bg form-control" name="category"  id="category" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >گروه</label>
                                <select class="select2-bg form-control" name="related"  id="category" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    <option value="بلاگ">بلاگ</option>
                                    <option value="روانشناسی">روانشناسی</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >تولید کننده</label>
                                <select class="select2-bg form-control" name="producer"  id="category" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    @foreach($producers as $producer)
                                        <option value="{{$producer->id}}">{{$producer->first_name}} {{$producer->last_name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-12  mb-1">
                            <label>برچسب ها</label>
                            <select class="select2-bg form-control" multiple name="tags[]" id="tag" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                <option value="null" selected>هیچکدام</option>
                                @foreach ($tags as $tag)
                                    <option  value="{{$tag->title}}">{{$tag->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >توضیح مختصر</label>
                                <textarea class="form-control" id="" rows="6" name="description"></textarea>
                            </fieldset>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ذخیره </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>

                    </div>
                </form>
            </div>

        </div>
    </div>

    {{--index page--}}

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
                    <h4 class="card-title text-center">مدیریت بلاگ ها</h4>
                </div>

                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row">
                                            <div class="col-10">
                                            </div>
                                            <div class="col-2">
                                                <button type="button" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#Modal">
                                                    ایجاد بلاگ جدید
                                                </button>
                                                    
                                            </div>
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
                        <table id="example" class="table table-striped ">
                            <thead>
                            <tr >
                                <th scope="col" class="text-center">تصویر</th>
                                <th scope="col" class="text-center">عنوان</th>
                                <th scope="col" class="text-center">دسته بندی</th>
                                <th scope="col" class="text-center">گروه</th>
                                <th scope="col" class="text-center">تولید کننده</th>
                                <th scope="col" class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($blogs as $key=>$blog)
                                 <tr>
                                     <td style="text-align: center"><img width="150" src="{{"/images/blogs/".$blog->image}}" ></td>
                                    <td class="text-center">{{$blog->title}}</td>
                                    <td class="text-center">{{$blog->category->title}}</td>
                                    <td class="text-center">{{$blog->related}}</td>
                                    <td class="text-center">{{$blog->producer->first_name}} {{$blog->producer->last_name}}</td>
                                    <td class="text-center">
                                        @if(count($blog->articles) > 0)
                                            <a class="btn btn-info mb-1 text-white" href="{{route('edit_blogItem' , $blog->articles[0]->id)}}">مقالات</a><br>
                                        @else
                                            <a class="btn btn-info mb-1 text-white" href="{{route('blog_article' , $blog->id)}}">مقالات</a><br>
                                        @endif
                                        <a class="btn btn-warning mb-1 text-white"  data-toggle="modal" data-target="#update-{{$key}}">ویرایش</a>
                                        <form method="post" action="{{route('blog.destroy', $blog->id)}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger ">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                                    <?php 
                                        $blogTags=explode('&&&',$blog->tags);
                                    ?>
                                <div class="modal fade" id="update-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">ویرایش پادکست</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" action='{{route('blog.update' , $blog->id)}}' enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                            <div class="modal-body">
                        
                                                <div class="col-md-12 ">
                                                    <fieldset class="form-group">
                                                        <label >تصویر</label>
                                                        <input type="file" name="image" accept="image/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                                        <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                                                    </fieldset>
                                                </div>
                                                
                                                <div class="col-md-12  mb-1">
                                                    <fieldset class="form-group">
                                                        <label >عنوان</label>
                                                        <input type="text" name="title" class="form-control" value="{{$blog->title}}" placeholder="عنوان فایل خود را وارد کنید">
                                                    </fieldset>
                                                </div>
                                                
                                                <div class="col-md-12  mb-1">
                                                    <fieldset class="form-group">
                                                        <label >دسته بندی</label>
                                                        <select class="select2-bg form-control" name="category"  id="category" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                            @foreach($categories as $category)
                                                                <option @if($category->id == $blog->category_id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                                            @endforeach
                                                        </select>
                                                    </fieldset>
                                                </div>
                        
                                                <div class="col-md-12  mb-1">
                                                    <fieldset class="form-group">
                                                        <label >گروه</label>
                                                        <select class="select2-bg form-control" name="related"  id="category" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                            <option @if($blog->related == 'بلاگ') selected @endif value="بلاگ">بلاگ</option>
                                                            <option @if($blog->related == 'روانشناسی') selected @endif value="روانشناسی">روانشناسی</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                        
                                                <div class="col-md-12  mb-1">
                                                    <fieldset class="form-group">
                                                        <label >تولید کننده</label>
                                                        <select class="select2-bg form-control" name="producer"  id="category" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                            @foreach($producers as $producer)
                                                                <option @if($producer->id == $blog->producer_id) selected @endif value="{{$producer->id}}">{{$producer->first_name}} {{$producer->last_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </fieldset>
                                                </div>

                                                <div class="col-md-12  mb-1">
                                                    <label>برچسب ها</label>
                                                    <select class="select2-bg form-control" multiple name="tags[]" id="tag" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                        <option value="null" @if(is_null($blog->tags)) selected @endif>هیچکدام</option>
                                                        @foreach ($tags as $tag)
                                                            <option  @if(in_array($tag->title , $blogTags)) selected @endif value="{{$tag->title}}">{{$tag->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                        
                                                <div class="col-md-12  mb-1">
                                                    <fieldset class="form-group">
                                                        <label >توضیح مختصر</label>
                                                        <textarea class="form-control" id="" rows="6" name="description">{{$blog->desc}}</textarea>
                                                    </fieldset>
                                                </div>
                        
                                            </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">ویرایش </button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                            
                                                </div>
                                            </form>
                                        </div>
                            
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('more_scripts')
    @include('admin.partials.datatable_js')
    <script>
			$(document).ready( function () {
				$('#example').DataTable();
			} );
    </script>
@endsection
