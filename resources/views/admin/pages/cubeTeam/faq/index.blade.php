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
                        <h4 class="card-title">سوالات و جواب ها</h4>
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
                                                    <a class="btn btn-success " href="{{route('question.create')}}"> ایجاد سوال و جواب</a>

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
                                    <th scope="col" class="text-center">سوال</th>
                                    <th scope="col" style="width: 100px;" class="text-center">جواب</th>
                                    <th scope="col" class="text-center">دسته بندی</th>
                                    <th scope="col" class="text-center">عملیات</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($questions as $question)
                                    <tr>
                                        <td class="text-center">{{$question->title}}</td>
                                        <td class="text-center" style="width: 100px;">{!! $question->text!!}</td>
                                        <td class="text-center">{{$question->category->title}}</td>

                                        <td class="text-center">
                                            <a class="btn btn-warning mb-2" href="{{route('question.edit', $question->id)}}">ویرایش</a>
                                            <form method="post" action="{{route('question.destroy', $question->id)}}">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger ">حذف</button>
                                            </form>
                                        </td>
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

    <script>
			$(document).ready( function () {
				$('#example').DataTable();
			} );
    </script>


    @include('admin.partials.datatable_js')
@endsection
