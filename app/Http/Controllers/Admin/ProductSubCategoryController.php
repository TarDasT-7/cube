<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use Illuminate\Http\Request;

class ProductSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'category'=> "required",
        ]);

        $category = new ProductSubCategory();
        $category->name = $request->input('name');
        $category->product_category_id = $request->input('category');
        $category->save();


        $categories=ProductCategory::all();
        $sub_categories=ProductSubCategory::all();
        session()->flash('add','زیر دسته با موفقیت ایجاد شد');
        return redirect('admin/product_category')->with('categories',$categories)->with('sub_categories',$sub_categories);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=ProductCategory::all();
        $sub_category=ProductSubCategory::find($id);
        return view('admin.pages.product_category.editproduct_sub_category')->with('categories',$categories)->with('sub_category',$sub_category);
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
        ]);

        $category=ProductSubCategory::find($id);
        $category->name = $request->input('name');
        if ($request->input('category')) {
            $category->product_category_id = $request->input('category');
        }
        $category->save();
        $categories=ProductCategory::all();
        $sub_categories=ProductSubCategory::all();
        session()->flash('update','زیر دسته با موفقیت به روزرسانی شد');
        return redirect('admin/product_category')->with('categories',$categories)->with('sub_categories',$sub_categories);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=ProductSubCategory::find($id);
        $category->delete();
        $categories=ProductCategory::all();
        $sub_categories=ProductSubCategory::all();
        session()->flash('delete','زیر دسته با موفقیت حذف شد');
        return redirect('admin/product_category')->with('categories',$categories)->with('sub_categories',$sub_categories);
    }
}

