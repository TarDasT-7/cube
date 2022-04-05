
@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css');

    <style>
        #image{
            width: 150px;
            height: 50px;
        }
        #button {
            margin-bottom: 0px;
            padding-bottom: 0px;
        }
    </style>
@endsection

@section('content')

    {{--modal page--}}
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ایجاد کاربر جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action='{{route('user.store')}}' enctype="multipart/form-data">
                   @csrf
                    <div class="modal-body">
                        
                        <div class="col-md-12 ">
                            <fieldset class="form-group">
                                <label >تصویر </label>

                                <input type="file" name="image" accept="images/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                            </fieldset>
                        </div>
                        
                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >نام</label>
                                <input type="text" name="first_name" class="form-control" placeholder="نام خود را وارد کنید">
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >نام خانوادگی</label>

                                <input type="text" name="last_name" class="form-control" placeholder="نام خانوادگی خود را وارد کنید">
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >کدملی</label>
                                <input type="number" min="0" name="national_code" class="form-control" placeholder="کدملی خود را وارد کنید">
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >تلفن</label>
                                <input type="number" min="0" name="phone" class="form-control" placeholder="شماره تلفن خود را وارد کنید">
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >تاریخ تولد</label>
                                <input type="text" name="birthday" class="form-control" placeholder="تاریخ تولد خود را وارد کنید">
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >جنسیت</label>
                                <select class="select2-bg form-control" name="gender" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                    <option value="مذکر">مذکر</option>
                                    <option value="مونث">مونث</option>
                                    <option value="غیره">غیره</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >ایمیل</label>

                                <input type="email" name="email" class="form-control" placeholder="ایمیل خود را وارد کنید">
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >رمزعبور</label>

                                <input type="text" name="password" class="form-control" placeholder="رمز عبور خود را وارد کنید">
                            </fieldset>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">ذخیره </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>

                    </div>
                </form>
            </div>

        </div>
    </div>

    

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
                    <div class="card-header">
                        <h4 class="card-title">لیست کاربران</h4>
                    </div>
                    <section id="relief-buttons">
                        <div class="row">
                            <div class="col-12">
                                <div class="card" id="button">
                                    <div class="card-content">
                                        <div class="card-body" id="button">
                                            <div class="row">
                                                <div class="col-10">
                                                </div>
                                                <div class="col-2">
                                                    <button type="button" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#Modal">
                                                        ایجاد کاربر جدید
                                                    </button>
                                                </div>
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
                                <table id="example" class="table table-striped ">
                                    <thead>
                                    <tr id="add">
                                        <th scope="col" class="text-center">تصویر</th>
                                        <th scope="col" class="text-center">نام</th>
                                        <th scope="col" class="text-center">تلفن</th>
                                        <th scope="col" class="text-center">کدملی</th>
                                        <th scope="col" class="text-center">ایمیل</th>
                                        <th scope="col" class="text-center">سمت</th>
                                        <th scope="col" class="text-center">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key=>$user)
                                        <tr>
                                            <td class="text-center"><img  src='{{asset("images/users/".$user->profile_photo_path)}}'  width="100px" ></td>
                                            <td class="text-center">{{$user->first_name}} {{$user->last_name}}</td>
                                            <td class="text-center">{{$user->phone}}</td>
                                            <td class="text-center">{{$user->national_code}}</td>
                                            <td class="text-center">{{$user->email}}</td>
                                            <td class="text-center">
                                                @if(count($user->roles) == 0)
                                                    <a class="btn btn-secondary mb-1 text-white">کاربر عادی</a> <br>
                                                @else
                                                    @foreach ($user->roles as $n=>$role)
                                                    @if($n == 0)
                                                        <a class="btn btn-primary mb-1 text-white">{{$role->title}}</a> <br>
                                                    @elseif($n == 1)
                                                        <a class="btn btn-info mb-1 text-white">{{$role->title}}</a> <br>
                                                    @elseif($n == 2)
                                                        <a class="btn btn-success mb-1 text-white">{{$role->title}}</a> <br>
                                                    @elseif($n == 3)
                                                        <a class="btn btn-danger mb-1 text-white">{{$role->title}}</a> <br>
                                                    @else
                                                        <a class="btn btn-warning mb-1 text-white">{{$role->title}}</a> <br>
                                                    @endif
                                                    @endforeach
                                                @endif
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-success mb-1 text-white"  data-toggle="modal" data-target="#role-{{$key}}">سمت ها</a><br>
                                                <a class="btn btn-warning mb-1 text-white"  data-toggle="modal" data-target="#update-{{$key}}">ویرایش</a>
                                                <form  method="post" action="{{route('user.destroy', $user->id)}}">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger ">حذف</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="update-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">ویرایش</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action='{{route('user.update' , $user->id)}}' enctype="multipart/form-data">
                                                       @csrf
                                                       @method('patch')
                                                       <div class="modal-body">
                        
                                                            <div class="col-md-12 ">
                                                                <fieldset class="form-group">
                                                                    <label >تصویر </label>
                                    
                                                                    <input type="file" name="image" accept="images/*" class="form-control" placeholder="تصویر معرفی را از درون رایانه خود انتخاب کنید...">
                                                                    <p class="font-size-sm" >ابعاد عکس باید 1600 در 500 پیکسل مربع باشد</p>
                                                                </fieldset>
                                                            </div>
                                                            
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >نام</label>
                                                                    <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}" placeholder="نام خود را وارد کنید">
                                                                </fieldset>
                                                            </div>
                                    
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >نام خانوادگی</label>
                                    
                                                                    <input type="text" name="last_name" class="form-control" value="{{$user->last_name}}" placeholder="نام خانوادگی خود را وارد کنید">
                                                                </fieldset>
                                                            </div>
                                    
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >کدملی</label>
                                                                    <input type="number" min="0" name="national_code" class="form-control" value="{{$user->national_code}}" placeholder="کدملی خود را وارد کنید">
                                                                </fieldset>
                                                            </div>
                                    
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >تلفن</label>
                                                                    <input type="number" min="0" name="phone" class="form-control" value="{{$user->phone}}" placeholder="شماره تلفن خود را وارد کنید">
                                                                </fieldset>
                                                            </div>
                                    
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >تاریخ تولد</label>
                                                                    <input type="text" name="birthday" class="form-control" value="{{$user->birthday}}" placeholder="تاریخ تولد خود را وارد کنید">
                                                                </fieldset>
                                                            </div>
                                    
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >جنسیت</label>
                                                                    <select class="select2-bg form-control" name="gender" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                        <option @if($user->gender == 'مذکر') selected @endif value="مذکر">مذکر</option>
                                                                        <option @if($user->gender == 'مونث') selected @endif value="مونث">مونث</option>
                                                                        <option @if($user->gender == 'غیره') selected @endif value="غیره">غیره</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                    
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >ایمیل</label>
                                    
                                                                    <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="ایمیل خود را وارد کنید">
                                                                </fieldset>
                                                            </div>
                                    
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">ذخیره </button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                    
                                                        </div>
                                                    </form>
                                                </div>
                                    
                                            </div>
                                        </div>

                                        <div class="modal fade" id="role-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">سمت ها</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action='{{route('user_role' , $user->id)}}' enctype="multipart/form-data">
                                                       @csrf
                                                       @method('patch')
                                                       <div class="modal-body">
                                    
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >سمت ها</label>
                                                                    <select class="select2-bg form-control" multiple name="roles[]" id="bg-select" data-bgcolor="success" data-bgcolor-variation="lighten-3" data-text-color="white">
                                                                        <option value="0">کاربر عادی</option>
                                                                        @foreach ($roles as $role)                                                                        
                                                                            <option @foreach ($user->roles as $ur) @if($ur->id == $role->id) selected @endif @endforeach  value="{{$role->id}}">{{$role->title}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                    
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">ذخیره </button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                    
                                                        </div>
                                                    </form>
                                                </div>
                                    
                                            </div>
                                        </div>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







@endsection

@section('more_scripts')

    <script>
			$(document).ready( function () {
				$('#example').DataTable();
			} );
    </script>


    @include('admin.partials.datatable_js')
@endsection
