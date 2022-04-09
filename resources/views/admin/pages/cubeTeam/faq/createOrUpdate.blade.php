@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css')
    <style>
        #submit{
            margin-top: 15px;
        }
        #update{
            margin-top: 15px;
            margin-right: 15px;
        }
        #html{
            background-color: white;
        }
    </style>
@endsection

@section('content')
        @csrf
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

                    @if($rel == 'create')
                    <form method='POST' action="{{route('question.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ایجاد سوال جدید</h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-3 mb-2">
                                            <label>دسته بندی</label>
                                            <select class="select2-bg form-control" name="category"  id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($categories as $category)                                        
                                                    <option value="{{$category->id}}">{{$category->title}}</option>                                
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-3 mb-2">
                                            <label>موقعیت</label>
                                            <select class="select2-bg form-control " name="position"  id="position" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option value="pro">محصولات</option>                                
                                                <option value="cou">دوره ها</option>                                
                                                <option value="fre">ویدئو رایگان</option>                                
                                                <option value="faq">سوالات متداول</option>                                
                                            </select>
                                        </div>

                                        <div class="col-3 mb-2" id="divItem" style="display: none">
                                            <label>ایتم های موجود</label>
                                            <select class="select2-bg form-control " name="items[]" multiple  id="items" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                         
                                            </select>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-12 mb-2">
                                            <label>سوال</label>
                                            <input type="text" name="title" class="form-control" placeholder="سوال خود را وارد کنید">        
                                        </div>
                                        <div class="col-12">
                                            <label>جواب</label>
                                            <textarea class="form-control" id="summary-ckeditor3" name="description"></textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor3', {
                                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form'
                                                });
                                            </script>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <hr>


                                

                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
                    
                    @elseif($rel == 'update')
                    <form method='post' action="{{route('question.update' , $question->id)}}"  enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ویرایش درباره ما </h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-2 mb-2">
                                            <label>دسته بندی</label>
                                            <select class="select2-bg form-control" name="category"  id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($categories as $category)                                        
                                                    <option @if($category->id == $question->categiry_id) selected @endif value="{{$category->id}}">{{$category->title}}</option>                                
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-10 mb-2">
                                            <label>سوال</label>
                                            <input type="text" name="title" value="{{$question->title}}" class="form-control" placeholder="سوال خود را وارد کنید">        
                                        </div>
                                        <div class="col-12">
                                            <label>جواب</label>
                                            <textarea class="form-control" id="summary-ckeditor3" name="description">{{$question->text}}</textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor3', {
                                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form'
                                                });
                                            </script>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <hr>


                                

                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success pull-left">ویرایش</button>
                    @endif
                    {{-- <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <label><h2>قسمت دوم</h2></label>
                                
                                @if(isset($about->id))
                                        <a class="btn btn-warning" id="update" href="{{route('aboutUs.edit', $about->id)}}">ویرایش</a>
                                @endif
                                <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </form>

@endsection
@section('more_scripts')
    <script>

        $('#position').change(function () {
            $('#items').html(' ');
            var position = $(this).val();
            $('#divItem').hide(200);

            $.ajax({
                type: "GET",
                url: "{{route('question_position')}}",
                data: {position:position},

                success: function (response) {
                    
                    if(response.length > 0)
                    {
                        $('#divItem').show(250 , function () {
                            
                            for (var i = 0; i < response.length;i++) {
    
                                $('#items').append('<option value="'+response[i].id+'">'+response[i].title+'</option>');
                            }

                        });

                    }
                }
            });


        });



    </script>
    @include('admin.partials.datatable_js')
@endsection
