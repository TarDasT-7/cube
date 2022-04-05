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
                        <h4 class="card-title">پکیج های خریداری شده</h4>
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
                                    <th scope="col" class="text-center">نام پکیج</th>
                                    <th scope="col" class="text-center">کد</th>
                                    <th scope="col" class="text-center">مشخصات پکیج</th>
                                    <th scope="col" class="text-center">اعتبار باقی مانده</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($packages as $package)
                                    <?php
                                    $now=date();
                                    $create=$package->create_at;
                                    $diff=$create->diff($now);
                                    $credit=$package->category;
                                    ?>
                                    @if($create>$diff)
                                    <tr>
                                        <td class="text-center">{{$package->user->id}}</td>
                                        <td class="text-center">{{$package->user->name}}</td>
                                        <td class="text-center">{{$package->user->email}}</td>
                                        <td class="text-center">{{$package->title}}</td>
                                        <td class="text-center">{{$package->good_id}}</td>

                                        <td class="text-center">{{$create-$diff}}</td>
                                        <td></td>
                                    </tr>
                                    @endif
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
