@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css');

    <style>
        #image{
            width: 50px;
            height: 50px;
        }
       #add{
           color: white;
       }

    </style>
@endsection

@section('content')



    {{--index page--}}

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
                    <h4 class="card-title text-center">مدیریت پکیج ها</h4>
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
                                                <button type="button" class="btn btn-success mr-1 mb-1" ><a id="add" href="{{route('plan_description.create')}}"> ایجاد توضیحات پکیج </a></button>
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
                                                <button type="button" class="btn btn-success mr-1 mb-1" ><a id="add" href="{{route('plan.create')}}"> ایجاد پکیج جدید</a></button>
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

                                <th scope="col" class="text-center">نام پکیج</th>
                                <th scope="col" class="text-center">مدت اعتبار</th>
                                <th scope="col" class="text-center">مبلغ</th>
                                <th scope="col" class="text-center">مبلغ تخفیف خورده</th>
                                <th scope="col" class="text-center">جزییات پکیج</th>
                                <th scope="col" class="text-center">ویرایش</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($plans as $plan)
                                 <tr>
                                    <td class="text-center">{{$plan->title}}</td>
                                     <td class="text-center">
                                             {{$plan->category}}روز <br>
                                     </td>
                                    <td class="text-center">{{$plan->price}}</td>
                                    <td class="text-center">{{$plan->off_price}}</td>
                                    <td class="text-center">{!! $plan->detail !!}</td>

                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('plan.edit', $plan->id)}}">ویرایش</a>
                                    </td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('plan.destroy', $plan->id)}}">
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
    <script>
			$(document).ready( function () {
				$('#example').DataTable();
			} );
    </script>
@endsection
