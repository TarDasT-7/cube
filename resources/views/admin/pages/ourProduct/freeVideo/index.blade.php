
@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css');

    <style>
        #image{
            width: 150px;
            height: 50px;
        }
        #button {
            margin-bottom: 0px;
            padding-bottom: 0px;
        }
    </style>
@endsection

@section('content')
    
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
                        <h4 class="card-title">لیست ویدئو های رایگان</h4>
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
                                                    {{-- <button type="button" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#Modal"> --}}
                                                    <a href="{{route('free-video.create')}}" class="btn btn-success mr-1 mb-1">
                                                        ایجاد مورد جدید
                                                    </a>
                                                    {{-- </button> --}}
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
                                    <tr id="add">
                                        <th scope="col" class="text-center">تصویر</th>
                                        <th scope="col" class="text-center">عنوان</th>
                                        <th scope="col" class="text-center">تولید کننده</th>
                                        <th scope="col" class="text-center">دسته بندی</th>
                                        <th scope="col" class="text-center">سطح</th>
                                        <th scope="col" class="text-center">توضیح مختصر</th>
                                        <th scope="col" class="text-center">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($videos as $key=>$video)
                                        <tr>
                                            <td class="text-center"><img  src='{{"/images/free/".$video->cover}}'  width="100px" ></td>
                                            <td class="text-center">{{$video->title}}</td>
                                            <td class="text-center">{{$video->producer->first_name}} {{$video->producer->last_name}}</td>
                                            <td class="text-center">{{$video->category->title}}</td>
                                            <td class="text-center">{{$video->hardship}}</td>
                                            <td class="text-center" style="width: 45%">{{$video->small_description}}</td>

                                            <td class="text-center">
                                                <a class="btn btn-success mb-1 text-white"  href="{{route('free-file-index' ,$video->id)}}">فایل ها</a><br>
                                                <a class="btn btn-warning mb-1 text-white"  href="{{route('free-video.edit' , $video->id)}}">ویرایش</a>
                                                <form  method="post" action="{{route('user.destroy', $video->id)}}">
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

    <script>
			$(document).ready( function () {
				$('#example').DataTable();
			} );
    </script>


    @include('admin.partials.datatable_js')
@endsection
