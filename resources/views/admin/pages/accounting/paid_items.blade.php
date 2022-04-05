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
                        <h4 class="card-title">آیتم های پرداخت شده</h4>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text"></p>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped ">
                                <thead>
                                <tr id="add">
                                    <th scope="col" class="text-center">مشخصه شخص</th>
                                    <th scope="col" class="text-center">شخص</th>
                                    <th scope="col" class="text-center">ایمیل شخص</th>
                                    <th scope="col" class="text-center">نام آیتم</th>
                                    <th scope="col" class="text-center">کد</th>
                                    <th scope="col" class="text-center">دسته بندی</th>
                                    <th scope="col" class="text-center">مبلغ</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($accounts as $account)
                                    <tr>
                                        <td class="text-center">{{$account->user->id}}</td>
                                        <td class="text-center">{{$account->user->name}}</td>
                                        <td class="text-center">{{$account->user->email}}</td>
                                        <td class="text-center">{{$account->title}}</td>
                                        <td class="text-center">{{$account->good_id}}</td>
                                        <td class="text-center">{{$account->category}}</td>
                                        <td class="text-center">{{$account->off_price}}</td>

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
