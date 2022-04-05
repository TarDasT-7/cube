
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

        .rowPermissionUserActivity{
            
            border: 1px solid #bfbfbf;
            padding: 5px 0;
            margin: 5px 0;
        }
        .rowPermissionUserActivity label{
            margin-top: 5px;
            font-size: 1rem;
        }

        .checkPermissions{
            width: 20px;
            height: 20px;
            margin-top: 5px;
        }

    </style>
@endsection

@section('content')

    {{--modal page--}}
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ایجاد تولید کننده جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action='{{route('producer.store')}}' enctype="multipart/form-data">
                   @csrf
                    <div class="modal-body">
                        
                        <div class="col-md-12 ">
                            <fieldset class="form-group" style="margin-bottom: 0">
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
                                <label >حرفه</label>

                                <input type="text" name="profession" class="form-control" placeholder="حرفه خود را وارد کنید">
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >توضیحات</label>
                                <textarea class="form-control" name="desciption" rows="2"></textarea>
                            </fieldset>
                        </div>

                        <div class="col-md-12  mb-1">
                            <fieldset class="form-group">
                                <label >اجازه فعالیت در</label>

                                <div class="row rowPermissionUserActivity">

                                    <div class="col-md-10">
                                        <label >محصولات</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input class="checkPermissions" type="checkbox" name="pro" value="1" id="">
                                    </div>

                                </div>

                                <div class="row rowPermissionUserActivity">

                                    <div class="col-md-10">
                                        <label >دوره ها</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input class="checkPermissions" type="checkbox" name="cou" value="1" id="">
                                    </div>

                                </div>


                                <div class="row rowPermissionUserActivity">

                                    <div class="col-md-10">
                                        <label >پادکست ها</label>
                                    </div>

                                    <div class="col-md-2">
                                        <input class="checkPermissions" type="checkbox" name="pod" value="1" id="">
                                    </div>

                                </div>


                                <div class="row rowPermissionUserActivity">

                                    <div class="col-md-10">
                                        <label >وبلاگ نویسی </label>
                                    </div>

                                    <div class="col-md-2">
                                        <input class="checkPermissions" type="checkbox" name="blog" value="1" id="">
                                    </div>

                                </div>

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
                        <h4 class="card-title">لیست تولید کنندگان</h4>
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
                                                        ایجاد مورد جدید
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
                                        <th scope="col" class="text-center">حرفه</th>
                                        <th scope="col" class="text-center">فعالیت در</th>
                                       <th scope="col" class="text-center">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($producers as $key=>$user)
                                        <tr>
                                            <td class="text-center"><img  src='{{asset("images/producers/".$user->image)}}'  width="100px" ></td>
                                            <td class="text-center">{{$user->first_name}} {{$user->last_name}}</td>
                                            <td class="text-center">{{$user->profession}}</td>
                                            <td class="text-center">
                                                @if($user->blog == 1)
                                                    <a class="btn btn-success mb-1 text-white">وبلاگ نویسی</a><br>
                                                @endif
                                                @if($user->podcast == 1)
                                                    <a class="btn btn-info mb-1 text-white">تهییه پادکست</a><br>
                                                @endif
                                                @if($user->product == 1)
                                                    <a class="btn btn-primary mb-1 text-white">تهییه محصول</a><br>
                                                @endif
                                                @if($user->course == 1)
                                                    <a class="btn btn-warning mb-1 text-white">تهییه دوره ها</a><br>
                                                @endif

                                                @if($user->blog == 0 && $user->podcast == 0 && $user->course == 0 && $user->product == 0)
                                                    <a class="btn btn-secondary mb-1 text-dark">موردی ثبت نشده</a><br>
                                                @endif
                                            </td>
                                            

                                            <td class="text-center">
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
                                                    <form method="post" action='{{route('producer.update' , $user->id)}}' enctype="multipart/form-data">
                                                       @csrf
                                                       @method('patch')
                                                        <div class="modal-body">
                            
                                                            <div class="col-md-12 ">
                                                                <fieldset class="form-group" style="margin-bottom: 0">
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
                                                                    <label >حرفه</label>
                                    
                                                                    <input type="text" name="profession" class="form-control" value="{{$user->profession}}" placeholder="حرفه خود را وارد کنید">
                                                                </fieldset>
                                                            </div>
                                    
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >توضیحات</label>
                                                                    <textarea class="form-control" name="desciption" rows="2">{{$user->description}}</textarea>
                                                                </fieldset>
                                                            </div>
                                    
                                                            <div class="col-md-12  mb-1">
                                                                <fieldset class="form-group">
                                                                    <label >اجازه فعالیت در</label>
                                    
                                                                    <div class="row rowPermissionUserActivity">
                                    
                                                                        <div class="col-md-10">
                                                                            <label >محصولات</label>
                                                                        </div>
                                    
                                                                        <div class="col-md-2">
                                                                            <input @if($user->product) checked @endif class="checkPermissions" type="checkbox" name="pro" value="1" id="">
                                                                        </div>
                                    
                                                                    </div>
                                    
                                                                    <div class="row rowPermissionUserActivity">
                                    
                                                                        <div class="col-md-10">
                                                                            <label >دوره ها</label>
                                                                        </div>
                                    
                                                                        <div class="col-md-2">
                                                                            <input @if($user->course) checked @endif class="checkPermissions" type="checkbox" name="cou" value="1" id="">
                                                                        </div>
                                    
                                                                    </div>
                                    
                                    
                                                                    <div class="row rowPermissionUserActivity">
                                    
                                                                        <div class="col-md-10">
                                                                            <label >پادکست ها</label>
                                                                        </div>
                                    
                                                                        <div class="col-md-2">
                                                                            <input @if($user->podcast) checked @endif class="checkPermissions" type="checkbox" name="pod" value="1" id="">
                                                                        </div>
                                    
                                                                    </div>
                                    
                                    
                                                                    <div class="row rowPermissionUserActivity">
                                    
                                                                        <div class="col-md-10">
                                                                            <label >وبلاگ نویسی </label>
                                                                        </div>
                                    
                                                                        <div class="col-md-2">
                                                                            <input @if($user->blog) checked @endif class="checkPermissions" type="checkbox" name="blog" value="1" id="">
                                                                        </div>
                                    
                                                                    </div>
                                    
                                                                </fieldset>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">ویرایش </button>
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
