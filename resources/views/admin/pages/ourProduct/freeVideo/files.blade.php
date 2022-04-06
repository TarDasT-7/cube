
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

    {{-- modal page--}}
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ایجاد کاربر جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action='{{route('free-file.store' , ['video'=>$video->id])}}' enctype="multipart/form-data">
                   @csrf
                    <div class="modal-body">
                        
                        <div class="col-md-12 ">
                            <fieldset class="form-group">
                                <label >فایل</label>
                                <input type="file" name="file" accept="video/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
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
                                <label >سایز</label>
                                <input type="text" name="size" class="form-control" placeholder="سایز فایل خود را وارد کنید">
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
                        <h4 class="card-title">لیست فایل های : {{$video->title}}</h4>
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
                                                        ایجاد فایل جدید
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
                                    <tr id="add">
                                        <th scope="col" class="text-center">عنوان</th>
                                        <th scope="col" class="text-center">حجم فایل</th>
                                        <th scope="col" class="text-center">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($files as $key=>$video)
                                        <tr>
                                            <td class="text-center">{{$video->title}}</td>
                                            <td class="text-center">{{$video->size}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-warning mb-1 text-white" data-toggle="modal" data-target="#update-{{$key}}">ویرایش</a>
                                                <form  method="post" action="{{route('free-file.destroy', $video->id)}}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger ">حذف</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="update-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action='{{route('free-file.update' , $video->id)}}' enctype="multipart/form-data">
                                                       @csrf
                                                       @method('patch')
                                                       <div class="modal-body">
                        
                                                        <div class="col-md-12 ">
                                                            <fieldset class="form-group">
                                                                <label >فایل</label>
                                                                <input type="file" name="file" accept="video/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                                                <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                                                            </fieldset>
                                                        </div>
                                                        
                                                        <div class="col-md-12  mb-1">
                                                            <fieldset class="form-group">
                                                                <label >عنوان</label>
                                                                <input type="text" name="title" class="form-control" value="{{$video->title}}" placeholder="عنوان فایل خود را وارد کنید">
                                                            </fieldset>
                                                        </div>
                                                        
                                                        <div class="col-md-12  mb-1">
                                                            <fieldset class="form-group">
                                                                <label >سایز</label>
                                                                <input type="text" name="size" class="form-control" value="{{$video->size}}" placeholder="سایز فایل خود را وارد کنید">
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

    <script>
			$(document).ready( function () {
				$('#example').DataTable();
			} );
    </script>


    @include('admin.partials.datatable_js')
@endsection
