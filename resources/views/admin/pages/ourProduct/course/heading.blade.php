
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



                <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ایجاد سر فصل جدید</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action='{{route('heading.store' , ['id'=>$course->id])}}' enctype="multipart/form-data">
                               @csrf
                                <div class="modal-body">
                                    
                                    <div class="col-md-12  mb-1">
                                        <fieldset class="form-group">
                                            <label >عنوان</label>
                                            <input type="text" name="title" class="form-control" placeholder="عنوان فایل خود را وارد کنید">
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

            
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">لیست سرفصل های : {{$course->title}}</h4>
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
                                                    {{-- <a href="{{route('course.create')}}" class="btn btn-success mr-1 mb-1"> --}}
                                                        ایجاد مورد جدید
                                                    {{-- </a> --}}
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
                                        <th scope="col" class="text-center">عنوان سر فصل</th>
                                        <th scope="col" class="text-center">عملیات سر فصل</th>
                                        <th scope="col" class="text-center">عنوان زیر سر فصل</th>
                                        <th scope="col" class="text-center">عملیات زیر سر فصل</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($headings as $key=>$heading)
                                        <tr>
                                            <td class="text-center">{{$heading->title}}</td>
                                           
                                            <td class="text-center">
                                                <button type="button" class="btn btn-success mb-1 text-white" data-toggle="modal" data-target="#subHeading-{!! $key !!}">
                                                    زیر عنوان
                                                </button><br>
                                                {{-- <a class="btn btn-success mb-1 text-white"  href="{{route('subHeading_index' , $heading->id)}}"></a><br> --}}
                                                {{-- <a class="btn btn-warning mb-1 text-white"  href="{{route('course.edit' , $heading->id)}}">ویرایش</a> --}}
                                                <button type="button" class="btn btn-warning mb-1 text-white" data-toggle="modal" data-target="#edHeading-{!! $key !!}">
                                                    ویرایش
                                                </button><br>
                                                <form  method="post" action="{{route('heading.destroy', $heading->id)}}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger ">حذف</button>
                                                </form>
                                            </td>

                                            <td style="text-align: center">
                                                @foreach ($heading->items as $k=>$item)
                                                    {{$item->title}}  
                                                <br>
                                                @endforeach
                                            </td>

                                            <td class="text-center">
                                                <button type="button" class="btn btn-info mb-1 text-white" data-toggle="modal" data-target="#subHeadingUpdate-{!! $key !!}">
                                                    اقدامات
                                                </button>
                                            </td>

                                        </tr>

                                        <div class="modal fade mdlsubheadupdt" id="edHeading-{!! $key !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش سرفصل ها</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form  method="post" action='{{route('heading.update' , $heading->id)}}'>
                                                        @method('patch')
                                                        @csrf
                                                        <div class="modal-body">
                                                            
                                                            <div class="col-md-12 " style="display: inline-block">
                                                                <fieldset class="form-group">
                                                                    <label >عنوان</label>
                                                                    <input type="text" name="title" class="form-control" value="{{$heading->title}}" placeholder="عنوان فایل خود را وارد کنید">
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

                                        <div class="modal fade mdlsubheadupdt" id="subHeadingUpdate-{!! $key !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش زیر سرفصل ها</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form>
                                                        <div class="modal-body">
                                                            
                                                            @foreach ($heading->items as $k=>$item)
                                                                <div class="rm-sub-heading-{{$item->id}}">

                                                                    <div class="col-md-8 " style="display: inline-block">
                                                                        <fieldset class="form-group">
                                                                            <label >ایتم {{$k + 1}}</label>
                                                                            <input type="text" name="title" class="form-control" id="uptit-{{$item->id}}" value="{{$item->title}}" placeholder="عنوان فایل خود را وارد کنید">
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-3 " style="display: inline-block">
                                                                        <fieldset class="form-group ">
                                                                            <label class=" ">عملیات</label>
                                                                            <a class="form-control btn-danger text-white " style="display: inline-block" onclick="rmsubitem({{$item->id}})">حذف</a>
                                                                            <a class="form-control btn-warning text-white " style="display: inline-block" onclick="upsubitem({{$item->id}})">ویرایش</a>
                                                                        </fieldset>
                                                                    </div>

                                                                </div>

                                                            @endforeach
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>                                    
                                                        </div>
                                                    </form>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        <div class="modal fade" id="subHeading-{!! $key !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">ایجاد زیر سرفصل جدید</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action='{{route('sub_heading_store' , ['id'=>$heading->id])}}' enctype="multipart/form-data">
                                                       @csrf
                                                        <div class="modal-body">
                                                            
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >عنوان</label>
                                                                    <input type="text" name="title" class="form-control" placeholder="عنوان فایل خود را وارد کنید">
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

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <input type="hidden" id="rldpg" value="false">






@endsection

@section('more_scripts')

    <script>
			$(document).ready( function () {
				$('#example').DataTable();
			} );
    </script>


    <script>

        function rmsubitem(id) {
            
            var confirm =  window.confirm("تایید می کنید این ایتم حذف شود ؟");

            if(confirm == true)
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "DELETE",
                    url: "{{route('sub_heading_rm')}}",
                    data: {id:id},
                    success: function (response) {
                        if(response == 0)
                        {
                            $('.rm-sub-heading-'+id).remove();
                            alert('عملیات موفق');
                        }else
                        {
                            alert('مشکلی در حذف وجود دارد');
                        }
                    }
                });
            }
            $('#rldpg').val('true');
        }

        function upsubitem(id) {
            
            var confirm =  window.confirm("تایید می کنید این ایتم ویرایش شود ؟");
            var title = $('#uptit-'+id).val();
            if(confirm == true)
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "patch",
                    url: "{{route('sub_heading_up')}}",
                    data: {id:id , title:title},
                    success: function (response) {
                        if(response == 0)
                        {
                            alert('عملیات موفق');
                        }else
                        {
                            alert('مشکلی در ویرایش وجود دارد');
                        }
                    }
                });
            }
            $('#rldpg').val('true');

        }



        $('.mdlsubheadupdt').on('hidden.bs.modal', function () {
            if($('#rldpg').val() == 'true')
            {
                location.reload();
            }
        })


    </script>




    @include('admin.partials.datatable_js')
@endsection
