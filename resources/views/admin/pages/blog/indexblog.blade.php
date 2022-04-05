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
                    <h4 class="card-title text-center">مدیریت بلاگ</h4>
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
                                                <button type="button" class="btn btn-success mr-1 mb-1" ><a id="add" href="{{route('blog.create')}}"> ایجاد مقاله جدید</a></button>
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
                                <th scope="col" class="text-center">نام مقاله</th>
                                <th scope="col" class="text-center">دسته</th>
                                <th scope="col" class="text-center">نام نویسنده</th>
                                <th scope="col" class="text-center">زمان ایجاد</th>
                                <th scope="col" class="text-center">ویرایش</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($blogs as $blog)
                                 <tr>
                                    <td class="text-center"><img  src="{{asset('images/'.$blog->image)}}" class="img" id="image" ></td>
                                    <td class="text-center">{{$blog->title}}</td>
                                     <td class="text-center">
                                         @foreach($blog->blog_categories as $category)
                                             {{$category->name}}<br>
                                         @endforeach
                                     </td>
                                    <td class="text-center">{{$blog->author_id}}</td>
                                    <td class="text-center">{{Verta::instance($blog->created_at)->formatDifference()}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('blog.edit', $blog->id)}}">ویرایش</a>
                                    </td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('blog.destroy', $blog->id)}}">
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
