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
                    <h3 class="box-title pull-right">ویرایش پکیج: {{$plan->id}}</h3>
                </div>
                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row col-md-12">
                                            <form class="col-md-12" method="post" action="{{route('plan.update', $plan->id)}}">
                                                @method('PATCH')
                                                {{csrf_field()}}
                                                <section id="basic-input">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">

                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="name">عنوان پکیج</label>
                                                                                <input type="text" name="title" class="form-control" value="{{$plan->title}}">
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="name">قیمت </label>
                                                                                <input type="text" name="price" class="form-control" value="{{$plan->price}}">
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="name">قیمت تخفیف خورده</label>
                                                                                <input type="text" name="off_price" class="form-control" value="{{$plan->off_price}}">
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="name">کد پکیج</label>
                                                                                <input type="text" name="good_id" class="form-control" value="{{$plan->good_id}}">
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                            <fieldset class="form-group">
                                                                                <label for="img">مدت اعتبار</label>
                                                                                <select class="select2-bg form-control" name="category"  id="category"  data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                                    @foreach($categories as $category)
                                                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <div class="row" id="table-striped">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">توضیحات دوره</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <div class="table-responsive">
                                                                        <textarea class="form-control" id="summary-ckeditor" name="detail" >{{$plan->detail}}</textarea>
                                                                        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                                                        <script>
                                                                            CKEDITOR.replace( 'summary-ckeditor', {
                                                                                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                                                filebrowserUploadMethod: 'form'
                                                                            });
                                                                        </script>

                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-success pull-left ml-1">به روز رسانی</button>
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

@endsection
