@extends('layouts/admin')

@section('title', 'ویرایش درباره ما')
@section('content')
    <section id="basic-datatable">
        <div class="row">
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
                        <h4 style="text-align: center" class="card-title"> ویرایش درباره ما</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <p class="card-text"></p>
                            <form action="{{route('aboutUs.update', $about->id)}}" method="post" enctype="multipart/form-data">
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
                                                        <label><h3>قسمت اول</h3></label>
                                                        <textarea class="form-control" id="summary-ckeditor1" name="description1">{{$about->description1}}</textarea>
                                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                        <script>
                                                                        CKEDITOR.replace( 'summary-ckeditor1', {
                                                                            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                                            filebrowserUploadMethod: 'form'
                                                                        });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <label><h3>قسمت دوم</h3> </label>
                                                        <textarea class="form-control" id="summary-ckeditor2" name="description2">{{$about->description2}}</textarea>
                                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                        <script>
                                                            CKEDITOR.replace( 'summary-ckeditor2', {
                                                                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                                filebrowserUploadMethod: 'form'
                                                            });
                                                        </script>
                                                        <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
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

