
@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css');

    <style>
        #image{
            width: 50px;
            height: 50px;
        }
        #button {
            margin-bottom: 0px;
            padding-bottom: 0px;
        }
    </style>
@endsection

@section('content')

    {{--modal page--}}
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافه کردن عکس معرفی تولید محتوا</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('advertisement_image.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">شماره عکس</label>
                                <input type="text" name="show_id" class="form-control" id="basicInput" placeholder="شماره ترتیب دهنده عکس">
                            </fieldset>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                            <fieldset class="form-group">
                                <label for="img">ذخیره عکس</label>
                                <input type="file" name="image" class="form-control" placeholder="ذخیره عکس های نولید محتوا ...">
                                <p class="font-size-sm" >ابعاد عکس باید 1000 در 1400 پیکسل مربع باشد</p>
                            </fieldset>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                            <fieldset class="form-group">
                                <label for="img">نام پروژه</label>
                                <select class="select2-bg form-control" name="advertisement" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    @foreach($advertisements as $advertisement)
                                        <option value="{{$advertisement->id}}">{{$advertisement->title}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">ذخیره </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                </div>
                    </form>
                </div>
            </div>

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
                        <h4 class="card-title"> عکس های پروژه</h4>
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
                                                     اضافه کردن عکس
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
                                        <th scope="col" class="text-center"> </th>
                                        <th scope="col" class="text-center">نام پروژه</th>
                                        <th scope="col" class="text-center">شماره عکس</th>
                                        <th scope="col" class="text-center">ویرایش</th>
                                        <th scope="col" class="text-center">حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $file)
                                        <tr >
                                            <td class="text-center"><img  src='{{asset('images/advertisement/'.$file->image)}}'  id="image" ></td>
                                            <td class="text-center">{{$file->advertisement->title}}</td>
                                            <td class="text-center">{{$file->show_id}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-warning" href="{{route('advertisement_image.edit', $file->id)}}">ویرایش</a>
                                            </td>
                                            <td class="text-center">
                                                <form  method="post" action="{{route('advertisement_image.destroy', $file->id)}}">
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
