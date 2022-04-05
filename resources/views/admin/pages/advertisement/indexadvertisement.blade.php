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
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">مدیریت تولید محتوا و تبلیغات</h4>
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
                                                <button type="button" class="btn btn-success mr-1 mb-1" ><a id="add" href="{{route('advertisement.create')}}"> ایجاد محتوای جدید</a></button>
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
                                <th scope="col" class="text-center">تصویر</th>
                                <th scope="col" class="text-center">نام پروژه</th>
                                <th scope="col" class="text-center">نوع محتوا</th>
                                <th scope="col" class="text-center">نام مشتری/شرکت</th>
                                <th scope="col" class="text-center">تیزر معرفی</th>
                                <th scope="col" class="text-center">زمان ایجاد</th>
                                <th scope="col" class="text-center">ویرایش</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($advertisements as $advertisement)
                                 <tr>
                                     <td ><img  src='{{asset('images/advertisement/'.$advertisement->image)}}'  id="image" ></td>
                                    <td class="text-center">{{$advertisement->title}}</td>
                                    <td class="text-center">{{$advertisement->category}}</td>
                                    <td class="text-center">{{$advertisement->client}}</td>
                                    <td class="text-center">{{$advertisement->video}}</td>
                                    <td class="text-center">{{Verta::instance($advertisement->created_at)->formatDifference()}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('advertisement.edit', $advertisement->id)}}">ویرایش</a>
                                    </td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('advertisement.destroy', $advertisement->id)}}">
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
