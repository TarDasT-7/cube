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
                    <h3 class="box-title pull-right">ویرایش قیمت ارسال: {{$price->id}}</h3>
                </div>
                <section id="relief-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" id="button">
                                <div class="card-content">
                                    <div class="card-body" id="button">
                                        <div class="row col-md-10">

                                            <form class="col-md-6" method="post" action="{{route('send_price.update', $price->id)}}">
                                                @csrf
                                                @method('PATCH')

                                                <div class="form-group">
                                                    <label for="name">مبلغ</label>
                                                    <input type="text" name="price" class="form-control" value="{{$price->price}}" >
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
