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
                    <h3 class="box-title pull-right">ویرایش عکس: {{$file->id}}</h3>
                </div>
                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row col-md-12">

                                            <form class="col-md-12" method="post" action="{{route('advertisement_image.update', $file->id)}}">
                                                @method('PATCH')
                                                {{csrf_field()}}
                                                <section id="basic-input">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">

                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-6  mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="basicInput">شماره عکس</label>
                                                                                    <input type="text" name="show_id" class="form-control" id="basicInput" value="{{$file->show_id}}">
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">ذخیره عکس</label>
                                                                                    <input type="file" name="image" class="form-control" placeholder="ذخیره فایل دوره شامل فایل ویدیو ...">
                                                                                    <p class="font-size-sm" >ابعاد عکس باید 1000 در 1400 پیکسل مربع باشد</p>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                                                <fieldset class="form-group">
                                                                                    <label for="img">نام پروژه</label>
                                                                                    <select class="select2-bg form-control" name="advertisement" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                                        @foreach($advertisements as $advertisement)
                                                                                            <option value="{{$advertisement->id}}">{{$advertisement->title}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-success pull-left">به روز رسانی</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

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
