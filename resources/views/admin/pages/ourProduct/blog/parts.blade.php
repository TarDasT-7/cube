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
                    <h5 class="modal-title" id="exampleModalLabel">ایجاد پادکست جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action='{{route('podcast.store')}}' enctype="multipart/form-data">
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
                    <h4 class="card-title text-center">مدیریت پادکست : {{$podcast->title}}</h4>
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
                                                <a href="{{route('create_podItem' , $podcast->id)}}" class="btn btn-success mr-1 mb-1">
                                                    فایل جدید
                                                </a>
                                                    
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
                                <th scope="col" class="text-center">تولید کننده</th>
                                <th scope="col" class="text-center">شماره قسمت</th>
                                <th scope="col" class="text-center">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($parts as $key=>$part)
                                 <tr>
                                    <td style="text-align: center"><img width="150" src="{{"/images/podcasts/$podcast->id/".$part->image}}" ></td>
                                    <td class="text-center">{{$part->title}}</td>
                                    <td class="text-center">{{$part->producer->first_name}} {{$part->producer->last_name}}</td>
                                    <td class="text-center">{{$part->number}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning mb-1 text-white" href="{{route('edit_podItem' , $part->id)}}">ویرایش</a>
                                        <form method="post" action="{{route('destroy_podItem', $part->id)}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger ">حذف</button>
                                        </form>
                                    </td>
                                </tr>
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
