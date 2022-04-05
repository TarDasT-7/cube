@extends('layouts/admin')

@section('title', 'نمایش درباره ما')

@section('more_styles')
    @include('admin.partials.datatable_css');

    <style>
        #image{
            width: 50px;
            height: 50px;
        }
       #add{
           color: white;
       }

    </style>
@endsection

@section('content')



    {{--index page--}}

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
                    <h4 class="card-title text-center">مدیریت محصولات</h4>
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
                                                <button type="button" class="btn btn-success mr-1 mb-1" ><a id="add" href="{{route('product.create')}}"> معرفی محصول جدید</a></button>
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
                            <tr >
                                <th scope="col" class="text-center">تصویر</th>
                                <th scope="col" class="text-center">نام محصول</th>
                                <th scope="col" class="text-center">دسته</th>
                                <th scope="col" class="text-center">زیر دسته</th>
                                <th scope="col" class="text-center">سطح محصول</th>
                                <th scope="col" class="text-center">کد کالا</th>
                                <th scope="col" class="text-center">زمان ایجاد</th>
                                <th scope="col" class="text-center">نام استاد</th>
                                <th scope="col" class="text-center">ویژگی محصول</th>
                                <th scope="col" class="text-center">قیمت</th>
                                <th scope="col" class="text-center">قیمت تخفیف خورده</th>
                                <th scope="col" class="text-center">ویرایش</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $product)
                                 <tr>
                                     <td class="text-center"><img  src='{{asset("images/".$product->image)}}'  id="image" ></td>
                                    <td class="text-center">{{$product->name}}</td>
                                     <td class="text-center">{{$product->product_sub_category->product_category->name}}<br></td>
                                     <td class="text-center">{{$product->product_sub_category->name}}<br></td>
                                     <td class="text-center">{{$product->level}}</td>
                                     <td class="text-center">{{$product->good_id}}</td>
                                    <td class="text-center">{{Verta::instance($product->created_at)->formatDifference()}}</td>
                                    <td class="text-center">{{$product->product_teacher->name}}</td>
                                    <td class="text-center">{{$product->properties}}</td>
                                    <td class="text-center">{{$product->price}}</td>
                                    <td class="text-center">{{$product->off_price}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{route('product.edit', $product->id)}}">ویرایش</a>
                                    </td>
                                    <td class="text-center">
                                        <form method="post" action="{{route('product.destroy', $product->id)}}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger ">حذف</button>
                                        </form>
                                    </td>
                                </tr>
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
    @include('admin.partials.datatable_js')
    <script>
			$(document).ready( function () {
				$('#example').DataTable();
			} );
    </script>
@endsection
