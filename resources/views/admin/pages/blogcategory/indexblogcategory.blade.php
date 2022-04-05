
@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css');

    <style>
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
                    <h5 class="modal-title" id="exampleModalLabel">ایجاد دسته بندی  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('blogcategory.store')}}">
                        {{csrf_field()}}
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">عنوان</label>
                                <input type="text" name="name" class="form-control" id="basicInput" placeholder="عنوان دسته بندی">
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
                        <h4 class="card-title">مدیریت دسته بندی مقالات</h4>
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
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text"></p>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped ">
                                    <thead>
                                    <tr id="add">
                                        <th scope="col" class="text-center"> نام دسته بندی</th>
                                        <th scope="col" class="text-center">ویرایش</th>
                                        <th scope="col" class="text-center">حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr >
                                            <td class="text-center">{{$category->name}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-warning" href="{{route('blogcategory.edit', $category->id)}}">ویرایش</a>
                                            </td>
                                            <td class="text-center">
                                                <form  method="post" action="{{route('blogcategory.destroy', $category->id)}}">
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
