@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css')

@endsection

@section('content')

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
                <form method='POST' action="{{route('store_blogItem', ['id'=>$blog->id])}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4 class="card-title">افزودن مورد جدید</h4>
                    </div>


                    <div id="submit" class="card-content">
                        <div class="card-content">
                        
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-12">
                                        <label>توضیحات</label>
                                        
                                    </div>

                                    <div class="col-12">
                                        <label>توضیحات</label>
                                        <textarea class="form-control" id="summary-ckeditor3" style="height: 800px !important" name="description"></textarea>
                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                        <script>
                                            CKEDITOR.replace( 'summary-ckeditor3', {
                                                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                filebrowserUploadMethod: 'form',
                                                language: 'fa',
                                            });
                                        </script>
                                    </div>

                                </div>
                            </div>                                

                        </div>
                    </div>
                    <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
                </form>
            @elseif($rel == 'update')

                <form method='POST' action="{{route('update_blogItem' , $item->id)}}"  enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-header">
                        <h4 class="card-title">افزودن مورد جدید</h4>
                    </div>


                    <div id="submit" class="card-content">
                        <div class="card-content">
                        
                            <div class="card-body">
                                <div class="row">
                                    
                                    <div class="col-12">
                                        <label>توضیحات</label>
                                        
                                    </div>

                                    <div class="col-12">
                                        <label>توضیحات</label>
                                        <textarea class="form-control" id="summary-ckeditor3" style="height: 800px !important" name="description">{{$item->desc}}</textarea>
                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                        <script>
                                            CKEDITOR.replace( 'summary-ckeditor3', {
                                                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                filebrowserUploadMethod: 'form',
                                                language: 'fa',
                                            });
                                        </script>
                                    </div>

                                </div>
                            </div>                                

                        </div>
                    </div>
                    <button type="submit" id="submit" class="btn btn-success pull-left">ویرایش</button>
                </form>
                
            @endif
        </div>
    </div>
</div>

@endsection
@section('more_scripts')
    <script>

    </script>
    @include('admin.partials.datatable_js')
@endsection
