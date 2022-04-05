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
                    <h3 class="box-title pull-right">ویرایش دسته بندی: {{$member->id}}</h3>
                </div>
                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row col-md-10">

                                            <form class="col-md-6" method="post" action="{{route('member.update', $member->id)}}">
                                                @csrf
                                                @method('PATCH')

                                                <div class="col-md-12  mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">نام و نام خانوادگی</label>
                                                        <input type="text" name="name" class="form-control" id="basicInput" value="{{$member->name}}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12  mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">تخصص</label>
                                                        <input type="text" name="specialty" class="form-control" id="basicInput" value="{{$member->specialty}}">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12  mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput">سمت</label>
                                                        <input type="text" name="position" class="form-control" id="basicInput" value="{{$member->position}}">
                                                    </fieldset>
                                                </div>
                                                <button type="submit" class="btn btn-success pull-left">به روز رسانی</button>
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
