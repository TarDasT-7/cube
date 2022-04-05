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





   {{--index page--}}
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">پیام ها</h4>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text"></p>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped ">
                                <thead>
                                <tr id="add">
                                    <th scope="col" class="text-center">نام کاربر</th>
                                    <th scope="col" class="text-center">ایمیل</th>
                                    <th scope="col" class="text-center">پیام</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td class="text-center">{{$comment->user->name}}</td>
                                        <td class="text-center">{{$comment->email}}</td>
                                        <td class="text-center">{{$comment->desc}}</td>
                                        <td></td>
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
    @include('admin.partials.datatable_js')
@endsection
