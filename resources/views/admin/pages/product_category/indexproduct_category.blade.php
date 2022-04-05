
@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css');

    <style>
        #create{
            width: 150px;
        }
        #button {
            margin-bottom: 0px;
            padding-bottom: 0px;
        }
    </style>
@endsection

@section('content')

    {{--modal page 1--}}
    <div class="modal fade" id="Modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ایجاد دسته بندی  </h5>
                    <button type="button" class="close" data-dismiss="modal-1" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('product_category.store')}}">
                        {{csrf_field()}}
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">عنوان</label>
                                <input type="text" name="name" class="form-control" id="basicInput" placeholder="عنوان دسته بندی">
                            </fieldset>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                            <fieldset class="form-group">
                                <label for="img">icon</label>
                                <select class="select2-bg form-control" name="svg" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    <option value="svg/language.svg">language</option>
                                    <option value="svg/science.svg">science</option>
                                </select>
                            </fieldset>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">ذخیره </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    {{--modal page 2--}}
    <div class="modal fade" id="Modal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ایجاد زیر دسته   </h5>
                    <button type="button" class="close" data-dismiss="modal-2" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('product_sub_category.store')}}">
                        {{csrf_field()}}
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">عنوان</label>
                                <input type="text" name="name" class="form-control" id="basicInput" placeholder="عنوان دسته بندی">
                            </fieldset>
                        </div>
                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                            <fieldset class="form-group">
                                <label for="img">دسته اصلی</label>
                                <select class="select2-bg form-control" name="category" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    @foreach($categories as $category)
                                     <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">ذخیره </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    {{--main page 1--}}
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
                        <h4 class="card-title">مدیریت دسته بندی محصولات</h4>
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
                                                    <button type="button" id="create" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#Modal-1">
                                                        ایجاد دسته بندی
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                                                    <button type="button" id="create" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#Modal-2">
                                                        ایجاد زیر دسته
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="card-header">
                        <h3 class="card-title">جدول دسته بندی اصلی</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped ">
                                    <thead>
                                    <tr id="add">
                                        <th scope="col" class="text-center"> </th>
                                        <th scope="col" class="text-center"> نام دسته بندی</th>
                                        <th scope="col" class="text-center"> نام زیر دسته ها</th>
                                        <th scope="col" class="text-center">ویرایش دسته</th>
                                        <th scope="col" class="text-center">حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr >
                                            <td class="text-center"><img style="width:50px; height::50px" src="{{asset($category->svg)}}"></td>
                                            <td class="text-center">{{$category->name}}</td>
                                            <td class="text-center">
                                            @foreach($category->product_sub_categories as $cat)
                                            {{$cat->name}}<br>
                                            @endforeach
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-warning" href="{{route('product_category.edit', $category->id)}}">ویرایش</a>
                                            </td>
                                            <td class="text-center">
                                                <form  method="post" action="{{route('product_category.destroy', $category->id)}}">
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
                    <div class="card-header">
                        <h3 class="card-title">جدول زیردسته ها</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped ">
                                    <thead>
                                    <tr id="add">
                                        <th scope="col" class="text-center"> نام زیر دسته</th>
                                        <th scope="col" class="text-center"> نام دسته اصلی</th>
                                        <th scope="col" class="text-center">ویرایش زیر دسته</th>
                                        <th scope="col" class="text-center">حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sub_categories as $pcategory)
                                        <tr >
                                            <td class="text-center">{{$pcategory->name}}</td>
                                            <td class="text-center">{{$pcategory->product_category->name}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-warning" href="{{route('product_sub_category.edit', $pcategory->id)}}">ویرایش</a>
                                            </td>
                                            <td class="text-center">
                                                <form  method="post" action="{{route('product_sub_category.destroy', $pcategory->id)}}">
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
@endsection
