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
                    <form method='POST' action="{{route('store_podItem' , ['id'=>$podcast->id])}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">افزودن مورد جدید</h4>
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
                                            <label>نام</label>
                                            <input type="text" name="name" class="form-control" placeholder="نام این قسمت را وارد کنید">        
                                        </div>
                                        <div class="col-4">
                                            <label>تولید کننده</label>
                                            <select class="select2-bg form-control" name="producer" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($producers as $producer)
                                                    <option value="{{$producer->id}}">{{$producer->first_name}} {{$producer->last_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="card-body">
                                    <div class="row">
  
                                        <div class="col-4">
                                            <label>کاور</label>
                                            <input type="file" name="image" accept="image/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                            <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
            
                                        </div>
                                        <div class="col-4">
                                            <label>موزیک</label>
                                            <input type="file" name="sound" accept="audio/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                            <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                                        </div>
                                        <div class="col-4">
                                            <label>شماره قسمت</label>
                                            <select class="select2-bg form-control" name="number" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="34">34</option>
                                                <option value="35">35</option>
                                                <option value="36">36</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <label>توضیحات کامل</label>
                                            <textarea class="form-control" id="summary-ckeditor3" name="long_description"></textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor3', {
                                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form',

                                                });
                                            </script>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-success pull-left">ذخیره</button>
                    
                    @elseif($rel == 'update')
                    <form method='post' action="{{route('update_podItem' , $item->id)}}"  enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">ویرایش  : {{$item->title}} </h4>
                        </div>


                        <div id="submit" class="card-content">
                            <div class="card-content">
                            
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <label>عنوان</label>
                                            <input type="text" name="title" class="form-control" value="{{$item->title}}" placeholder="عنوان خود را وارد کنید">        
                                        </div>
                                        <div class="col-4">
                                            <label>نام</label>
                                            <input type="text" name="name" class="form-control" value="{{$item->name}}" placeholder="نام این قسمت را وارد کنید">        
                                        </div>
                                        <div class="col-4">
                                            <label>تولید کننده</label>
                                            <select class="select2-bg form-control" name="producer" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                @foreach ($producers as $producer)
                                                    <option @if($producer->id == $item->producer_id) selected @endif value="{{$producer->id}}">{{$producer->first_name}} {{$producer->last_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="card-body">
                                    <div class="row">
  
                                        <div class="col-4">
                                            <label>کاور</label>
                                            <input type="file" name="image" accept="image/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                            <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
            
                                        </div>
                                        <div class="col-4">
                                            <label>موزیک</label>
                                            <input type="file" name="sound" accept="audio/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                            <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                                        </div>
                                        <div class="col-4">
                                            <label>شماره قسمت</label>
                                            <select class="select2-bg form-control" name="number" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                <option @if($item->number == 1) selected @endif value="1">1</option>
                                                <option @if($item->number == 2) selected @endif value="2">2</option>
                                                <option @if($item->number == 3) selected @endif value="3">3</option>
                                                <option @if($item->number == 4) selected @endif value="4">4</option>
                                                <option @if($item->number == 5) selected @endif value="5">5</option>
                                                <option @if($item->number == 6) selected @endif value="6">6</option>
                                                <option @if($item->number == 7) selected @endif value="7">7</option>
                                                <option @if($item->number == 8) selected @endif value="8">8</option>
                                                <option @if($item->number == 9) selected @endif value="9">9</option>
                                                <option @if($item->number == 10) selected @endif value="10">10</option>
                                                <option @if($item->number == 11) selected @endif value="11">11</option>
                                                <option @if($item->number == 12) selected @endif value="12">12</option>
                                                <option @if($item->number == 13) selected @endif value="13">13</option>
                                                <option @if($item->number == 14) selected @endif value="14">14</option>
                                                <option @if($item->number == 15) selected @endif value="15">15</option>
                                                <option @if($item->number == 16) selected @endif value="16">16</option>
                                                <option @if($item->number == 17) selected @endif value="17">17</option>
                                                <option @if($item->number == 18) selected @endif value="18">18</option>
                                                <option @if($item->number == 19) selected @endif value="19">19</option>
                                                <option @if($item->number == 20) selected @endif value="20">20</option>
                                                <option @if($item->number == 21) selected @endif value="21">21</option>
                                                <option @if($item->number == 22) selected @endif value="22">22</option>
                                                <option @if($item->number == 23) selected @endif value="23">23</option>
                                                <option @if($item->number == 24) selected @endif value="24">24</option>
                                                <option @if($item->number == 25) selected @endif value="25">25</option>
                                                <option @if($item->number == 26) selected @endif value="26">26</option>
                                                <option @if($item->number == 27) selected @endif value="27">27</option>
                                                <option @if($item->number == 28) selected @endif value="28">28</option>
                                                <option @if($item->number == 29) selected @endif value="29">29</option>
                                                <option @if($item->number == 30) selected @endif value="30">30</option>
                                                <option @if($item->number == 31) selected @endif value="31">31</option>
                                                <option @if($item->number == 32) selected @endif value="32">32</option>
                                                <option @if($item->number == 33) selected @endif value="33">33</option>
                                                <option @if($item->number == 34) selected @endif value="34">34</option>
                                                <option @if($item->number == 35) selected @endif value="35">35</option>
                                                <option @if($item->number == 36) selected @endif value="36">36</option>
                                                <option @if($item->number == 37) selected @endif value="37">37</option>
                                                <option @if($item->number == 38) selected @endif value="38">38</option>
                                                <option @if($item->number == 39) selected @endif value="39">39</option>
                                                <option @if($item->number == 40) selected @endif value="40">40</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <label>توضیحات کامل</label>
                                            <textarea class="form-control" id="summary-ckeditor3" name="long_description">{{$item->description}}</textarea>
                                            <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                            <script>
                                                CKEDITOR.replace( 'summary-ckeditor3', {
                                                    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form',

                                                });
                                            </script>
                                        </div>
                                    </div>
                                    
                                </div>

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
