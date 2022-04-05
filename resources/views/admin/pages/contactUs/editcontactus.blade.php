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
                        <h4 style="text-align: center" class="card-title"> ویرایش ارتباط با ما</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <p class="card-text"></p>
                            <form action="{{route('contactUs.update', $contact->id)}}" method="post" enctype="multipart/form-data">
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
                                                        <label class="mt-3"><h2>جانمایی</h2></label>
                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <input type="text" name="location" class="form-control" VALUE="{{$contact->location}}" >
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <input type="text" name="title" class="form-control" VALUE="{{$contact->title}}"  >
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <input type="text" name="phone" class="form-control" VALUE="{{$contact->phone}}" >
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <input type="text" name="address" class="form-control" VALUE="{{$contact->address}}" >
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <input type="text" name="email" class="form-control" VALUE="{{$contact->email}}" >
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <input type="text" name="facebook" class="form-control" VALUE="{{$contact->facebook}}" >
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <input type="text" name="linkedin" class="form-control" VALUE="{{$contact->linkedin}}" >
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <input type="text" name="instagram" class="form-control" VALUE="{{$contact->instagram}}" >
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <input type="text" name="telegram" class="form-control" VALUE="{{$contact->telegram}}" >
                                                            </fieldset>
                                                        </div>

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

