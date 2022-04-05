@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css')
@endsection

@section('content')

    <div class="row" id="table-striped">
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
                    <h3 class="box-title pull-right">ویرایش دسته بندی: {{$category->id}}</h3>
                </div>
                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row col-md-10">

                                            <form method='post' action="{{route('contactUs.update',$contact->id)}}">
                                                @csrf
                                                @method('PATCH')
                                                <div class="row" id="table-striped">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">,ویرایش توضیحات صفحه ارتباط با ما</h4>
                                                            </div>

                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <div class="col-md-12  mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="basicInput">جانمایی</label>
                                                                                <input type="text" name="location" class="form-control" id="basicInput" value="{{$contact->location}}">
                                                                            </fieldset>
                                                                        </div>
                                                                        <label><h2>توضیحات</h2></label>
                                                                        <textarea class="form-control" id="summary-ckeditor1" name="description">{{$contact->desc}}</textarea>
                                                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                                        <script>
                                                                                    CKEDITOR.replace( 'summary-ckeditor1', {
                                                                                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                                                        filebrowserUploadMethod: 'form'
                                                                                    });
                                                                        </script>
                                                                        <button type="submit" id="submit" class="btn btn-success pull-left">به روز رسانی</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>


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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('more_scripts')
    @include('admin.partials.datatable_js')
@endsection
