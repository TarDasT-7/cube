

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

    {{--modal page--}}
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ایجاد زیر دسته جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action='{{route('sub.store')}}' enctype="multipart/form-data">
                   @csrf
                    <div class="modal-body">

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >عنوان </label>
                                <input type="text" name="title" class="form-control" placeholder="عنوان مورد نظر خود را وارد کنید">
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >دسته بندی</label>
                                <select class="select2-bg form-control" name="category"  id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    @foreach ($categories as $category)                                        
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
                        <h4 class="card-title">لیست زیر دسته بندی ها</h4>
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
                                                        ایجاد زیر دسته جدید
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
                                        <th scope="col" class="text-center">دسته بندی</th>
                                        <th scope="col" class="text-center">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($subCategories->sortBy('related') as $key=>$sub)
                                        <tr >
                                            <td class="text-center">{{$sub->title}}</td>
                                            <td class="text-center">{{$sub->category->title}}</td>

                                            <td class="text-center">
                                                <a class="btn btn-warning mb-1 text-white"  data-toggle="modal" data-target="#update-{{$key}}">ویرایش</a>
                                                <form  method="post" action="{{route('sub.destroy', $sub->id)}}">
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
                                                    <form method="post" action='{{route('sub.update' , $sub->id)}}' enctype="multipart/form-data">
                                                       @csrf
                                                       @method('patch')
                                                       <div class="modal-body">

                                                        <div class="col-md-12  mb-1">
                                                            <fieldset class="form-group">
                                                                <label >عنوان </label>
                                                                <input type="text" name="title" class="form-control" value="{{$sub->title}}" placeholder="عنوان مورد نظر خود را وارد کنید">
                                                            </fieldset>
                                                        </div>
                                
                                                        <div class="col-md-12  mb-1">
                                                            <fieldset class="form-group">
                                                                <label >دسته بندی</label>
                                                                <select class="select2-bg form-control" name="category"  id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                    @foreach ($categories as $category)                                        
                                                                        <option @if($category->id == $sub->category_id) selected @endif value="{{$category->id}}">{{$category->title}}</option>                                
                                                                    @endforeach
                                                                </select>
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
