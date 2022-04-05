<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::where('related' , 'محصولات')->orWhere('related' , 'دوره')->get();
        $subCategories=SubCategory::all();
        return view('admin.pages.category.subCate' , compact(['subCategories','categories']));
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

            'title'=>'required|max:250',
            'category'=>'required',
        ]);

        $category = new SubCategory();
        $category->title = $request->title;
        $category->category_id = $request->category;
        $category->save();

        session()->flash('add','زیر دسته با موفقیت ایجاد شد');
        return redirect()->route('sub.index');
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
        //
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

            'title'=>'required|max:250',
            'category'=>'required',
        ]);

        $category =SubCategory::find($id);
        $category->title = $request->title;
        $category->category_id = $request->category;
        $category->save();

        session()->flash('add','زیر دسته با موفقیت ویرایش شد');
        return redirect()->route('sub.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =SubCategory::find($id)->delete();
        session()->flash('add','زیر دسته با موفقیت حذف شد');
        return redirect()->route('sub.index');
    }
}
