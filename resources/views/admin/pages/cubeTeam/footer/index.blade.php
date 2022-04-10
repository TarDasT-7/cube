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

</div>

@section('content')
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


    @if(!is_null($footer))
    <form method='post' action="{{route('footer.update' , $footer->id)}}"  enctype="multipart/form-data">
        @method('patch')
    @else
    <form method='post' action="{{route('footer.store')}}"  enctype="multipart/form-data">
    @endif
        @csrf
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header mb-3">
                        <h4 class="card-title">پاورقی</h4>
                    </div>

                    <div class="row">

                        <div class="col-9">

                            <div class="card-content">
                                <label class="mx-2">متن</label>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        @if($footer->description)
                                            <textarea class="form-control" id="summary-ckeditor" name="description">{{$footer->description}}</textarea>
                                        @else
                                        <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                                        @endif
                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                        <script>
                                            CKEDITOR.replace( 'summary-ckeditor', {
                                                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                filebrowserUploadMethod: 'form'
                                            });
                                        </script>
                                       
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-3">

                            <div class="card-content">
                                <label>تصویر</label>
                                {{-- <div class="card-body"> --}}
                                    <div class="table-responsive">

                                        @if($footer->image)
                                            <img src="{{'/images/footer/'.$footer->image}}" width="300px" height="300px" alt="">
                                        @else
                                            <img src="{{'/img/default1.jpg'}}" width="300px" height="300px" alt="">
                                        @endif

                                        <input type="file" name="file" accept="image/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
            
                                        <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                                       
                                    </div>
                                {{-- </div> --}}
                            </div>


                        </div>

                    </div>
                    @if(!is_null($footer))
                        <button type="submit"  class="btn btn-warning pull-left mt-1">ویرایش</button>
                    @else
                        <button type="submit"  class="btn btn-success pull-left mt-1">ذخیره</button>
                    @endif
                </div>
            </div>
        </div>
    </form>


@endsection
@section('more_scripts')
    <script>

    </script>
    @include('admin.partials.datatable_js')
@endsection
