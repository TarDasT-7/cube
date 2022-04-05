@extends('layouts/admin')

@section('title', 'ویرایش درباره ما')
@section('content')
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="text-align: center" class="card-title"> ویرایش پاورقی</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <p class="card-text"></p>
                            <form action="{{route('footer.update', $footer->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row" id="table-striped">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <label><h3>توضیحات</h3> </label>
                                                        <textarea class="form-control" id="summary-ckeditor" name="description">{{$footer->description}}</textarea>
                                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                        <script>
                                                            CKEDITOR.replace( 'summary-ckeditor', {
                                                                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                                filebrowserUploadMethod: 'form'
                                                            });
                                                        </script>
                                                        <button type="submit"  class="btn btn-success pull-left mt-1">ذخیره</button>
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
    </section>
@endsection

