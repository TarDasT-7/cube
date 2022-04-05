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
    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اتصاب نقش جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.store')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <select class="select2-bg form-control" name="user" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                @foreach($members as $member)
                                    <option value="{{$member->id}}">{{$member->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="select2-bg form-control" name="role" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    <option value="0">---</option>
                                    <option value="1">مدیر</option>
                            </select>
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
    {{--index page--}}
        <div class="row" id="table-striped">
            <div class="col-12">
                @if(session()->has('admin'))
                    <div class="alert alert-danger">
                        <div>{{session('admin')}}</div>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">مدیریت کاربران ادمین</h4>
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
                                                        انتصاب نقش جدید
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
                                        <th scope="col" class="text-center"> نام شخص</th>
                                        <th scope="col" class="text-center">سمت</th>
                                        <th scope="col" class="text-center">ادرس ایمیل</th>
                                        <th scope="col" class="text-center">شماره تماس</th>
                                        <th scope="col" class="text-center">حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr >

                                                <td class="text-center">{{$user->name}}</td>
                                                <td class="text-center">ادمین</td>
                                                <td class="text-center">{{$user->email}}</td>
                                                <td class="text-center">{{$user->phone}}</td>
                                                <td class="text-center">
                                                    <form method="post" action="{{route('admin.update', $user->id)}}">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-danger ">حذف از بخش ادمین ها</button>
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

