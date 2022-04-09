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
        @csrf
        <div class="row" id="table-striped">
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
            </div>
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

                    @if($rel == 'create')
                    <form method='POST' action="{{route('contactUs.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ایجاد درباره ما</h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-4">
                                            <label>عنوان</label>
                                            <input type="text" name="title" class="form-control" placeholder="عنوان خود را وارد کنید">        
                                        </div>

                                        <div class="col-4">
                                            <label>تلفن</label>
                                            <input type="number" min="0" name="phone" class="form-control" placeholder="تلفن خود را وارد کنید">        
                                        </div>

                                        <div class="col-4">
                                            <label>ایمیل</label>
                                            <input type="email" name="email" class="form-control" placeholder="ایمیل خود را وارد کنید">        
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="card-body">
                                    
                                    <div class="row">

                                        <div class="col-4">
                                            <label>ادرس</label>
                                            <textarea class="form-control" id="" name="address" placeholder="آدرس خود را وارد کنید"></textarea>
                                        </div>

                                        <div class="col-8">
                                            <label>لوکیشن</label>
                                            <textarea class="form-control" id="" name="location" placeholder="لوکیشن خود را از گوگل مپ پیدا و وارد کنید"></textarea>
                                        </div>

                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="card-body">
                                    
                                    <div class="row">

                                        <div class="col-3">
                                            <label>فیسبوک</label>
                                            <input type="text" name="facebook" class="form-control" placeholder="لینک خود را وارد کنید">        
                                        </div>

                                        <div class="col-3">
                                            <label>اینستاگرام</label>
                                            <input type="text" name="instagram" class="form-control" placeholder="لینک خود را وارد کنید">        
                                        </div>

                                        <div class="col-3">
                                            <label>لینکدین</label>
                                            <input type="text" name="linkedin" class="form-control" placeholder="لینک خود را وارد کنید">        
                                        </div>

                                        <div class="col-3">
                                            <label>تلگرام</label>
                                            <input type="text" name="telegram" class="form-control" placeholder="لینک خود را وارد کنید">        
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <hr>

                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
                    
                    @elseif($rel == 'update')
                    <form method='post' action="{{route('contactUs.update' , $contact->id)}}"  enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ویرایش ارتباط با ما </h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-4">
                                            <label>عنوان</label>
                                            <input type="text" name="title" class="form-control" value="{{$contact->title}}" placeholder="عنوان خود را وارد کنید">        
                                        </div>

                                        <div class="col-4">
                                            <label>تلفن</label>
                                            <input type="number" min="0" name="phone" class="form-control" value="{{$contact->phone}}" placeholder="تلفن خود را وارد کنید">        
                                        </div>

                                        <div class="col-4">
                                            <label>ایمیل</label>
                                            <input type="email" name="email" class="form-control" value="{{$contact->email}}" placeholder="ایمیل خود را وارد کنید">        
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="card-body">
                                    
                                    <div class="row">

                                        <div class="col-4">
                                            <label>ادرس</label>
                                            <textarea class="form-control" id="" name="address" placeholder="آدرس خود را وارد کنید">value="{{$contact->address}}"</textarea>
                                        </div>

                                        <div class="col-8">
                                            <label>لوکیشن</label>
                                            <textarea class="form-control" id="" name="location" placeholder="لوکیشن خود را از گوگل مپ پیدا و وارد کنید">value="{{$contact->location}}"</textarea>
                                        </div>

                                    </div>
                                    
                                </div>

                                <hr>

                                <div class="card-body">
                                    
                                    <div class="row">

                                        <div class="col-3">
                                            <label>فیسبوک</label>
                                            <input type="text" name="facebook" class="form-control"  value="{{$contact->facebook}}" placeholder="لینک خود را وارد کنید">        
                                        </div>

                                        <div class="col-3">
                                            <label>اینستاگرام</label>
                                            <input type="text" name="instagram" class="form-control" value="{{$contact->instagram}}" placeholder="لینک خود را وارد کنید">        
                                        </div>

                                        <div class="col-3">
                                            <label>لینکدین</label>
                                            <input type="text" name="linkedin" class="form-control" value="{{$contact->linkedin}}" placeholder="لینک خود را وارد کنید">        
                                        </div>

                                        <div class="col-3">
                                            <label>تلگرام</label>
                                            <input type="text" name="telegram" class="form-control" value="{{$contact->telegram}}" placeholder="لینک خود را وارد کنید">        
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <hr>

                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success pull-left">ویرایش</button>
                    @endif
                    {{-- <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <label><h2>قسمت دوم</h2></label>
                                
                                @if(isset($about->id))
                                        <a class="btn btn-warning" id="update" href="{{route('aboutUs.edit', $about->id)}}">ویرایش</a>
                                @endif
                                <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
                            </div>
                        </div>
                    </div> --}}

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
