<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Models\ProductTeacher;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.pages.product.indexproduct')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories=ProductCategory::all();
        return view('admin.pages.product.createproduct')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> "required|max:255",
            'content'=> "required",
            'price'=> "required|numeric",
            'off_price'=> "required|numeric",
            'good_id'=> "required|numeric",
            'video_num'=> "required|numeric",
            'language'=> "required",
            'level'=> "required",
            'category'=> "required",
            'teacher'=> "required",
            'review'=> "required",
            'properties'=> "required",
            'image'=> "required| dimensions:max_width=760,max_height=920,min_width=660,min_height=820",
        ]);
        $product=new Product();
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->off_price=$request->input('off_price');
        $off=round(($product->price-$product->off_price)/$product->price*100);
        $product->off=$off;
        $product->good_id=$request->input('good_id');
        $product->level = $request->input('level');
        $product->video_num=$request->input('video_num');
        $product->language=$request->input('language');
        $product->review=$request->input('review');
        $product->content=$request->input('content');
        $product->properties=$request->input('properties');
        $product->product_teacher_id=$request->input('teacher');
        $product->product_sub_category_id=$request->input('sub_category');
        if($file=$request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $product->image = $name;
        }
        $product->save();
        $products=Product::all();
        session()->flash('add','محصول با موفقیت معرفی شد');
        return redirect('admin/product')->with('products',$products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function select(Request $request)
    {
        $cat=$request->data;
        $category=ProductCategory::find($cat);
        return json_encode($category->product_sub_categories);
    }


    public function teacher(Request $request)
    {
        $cat=$request->data;
        $category=ProductCategory::find($cat);
        return json_encode($category->product_teachers);
    }


    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);

        $categories=ProductCategory::all();
        return view('admin.pages.product.editproduct')->with('product',$product)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> "required|max:255",
            'content'=> "required",
            'price'=> "required|numeric",
            'off_price'=> "required|numeric",
            'good_id'=> "required|numeric",
            'video_num'=> "required|numeric",
            'language'=> "required",
            'level'=> "required",
            'category'=> "required",
            'teacher'=> "required",
            'review'=> "required",
            'properties'=> "required",
        ]);
        $product=Product::find($id);
        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->off_price=$request->input('off_price');
        $off=round(($product->price-$product->off_price)/$product->price*100);
        $product->off=$off;
        $product->good_id=$request->input('good_id');
        $product->video_num=$request->input('video_num');
        $product->language=$request->input('language');
        $product->review=$request->input('review');
        $product->content=$request->input('content');
        $product->properties=$request->input('properties');
        if ($request->input('level')) {
            $product->level = $request->input('level');
        }
        if($request->input('teacher')) {
            $product->product_teacher_id = $request->input('teacher');
        }
        if($request->input('sub_category')){
            $product->product_sub_category_id = $request->input('sub_category');
        }
        if($file=$request->file('image')) {
            $request->validate([
                'image'=> "required| dimensions:max_width=760,max_height=920,min_width=660,min_height=820",
            ]);
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $product->image = $name;
        }
        $product->save();
        $products=Product::all();
        session()->flash('update','محصول با موفقیت به روز رسانی شد');
        return redirect('admin/product')->with('products',$products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        $products=Product::all();
        session()->flash('delete','محصول با موفقیت حذف شد');
        return redirect('admin/product')->with('products',$products);
    }
}
