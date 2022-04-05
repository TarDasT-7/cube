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

    <form method='post' action="{{route('footer.store')}}">
        @csrf
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ایجاد توضیحات مربوط پاورقی</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                <script>
                                    CKEDITOR.replace( 'summary-ckeditor', {
                                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                        filebrowserUploadMethod: 'form'
                                    });
                                </script>
                                @if(isset($footer->id))
                                        <a class="btn btn-warning mt-1 ml-1"  href="{{route('footer.edit', $footer->id)}}">ویرایش</a>
                                @endif
                                <button type="submit"  class="btn btn-success pull-left mt-1">ذخیره</button>
                            </div>
                        </div>
                    </div>
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
