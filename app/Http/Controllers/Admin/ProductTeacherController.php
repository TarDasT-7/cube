<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ProductTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ProductTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=ProductTeacher::all();
        $categories=ProductCategory::all();
        return view('admin.pages.product_teacher.indexproduct_teacher')->with('teachers',$teachers)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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

        $teacher = new ProductTeacher();
        $teacher->name=$request->input('name');
        $teacher->product_category_id=$request->input('category');
        $teacher->save();
        $teachers=ProductTeacher::all();
        $categories=ProductCategory::all();
        session()->flash('add','استاد با موفقیت معرفی شد');
        return redirect('admin/product_teacher')->with('teachers',$teachers)->with('categories',$categories);

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
        $teacher=ProductTeacher::find($id);
        $categories=ProductCategory::all();
        return view('admin.pages.product_teacher.editproduct_teacher')->with('teacher',$teacher)->with('categories',$categories);
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
            'category'=> "required",
        ]);

        $teacher=ProductTeacher::find($id);
        $teacher->name=$request->input('name');
        if ($request->input('category')) {
            $teacher->product_category_id=$request->input('category');
        }
        $teacher->save();
        $teachers=ProductTeacher::all();
        $categories=ProductCategory::all();
        session()->flash('update','مشخصات استاد با موفقیت تغییر یافت');
        return redirect('admin/product_teacher')->with('teachers',$teachers)->with('categories',$categories);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=ProductTeacher::find($id);
        $teacher->delete();
        $teachers=ProductTeacher::all();
        $categories=ProductCategory::all();
        session()->flash('delete','استاد با موفقیت حذف شد');
        return redirect('admin/product_teacher')->with('teachers',$teachers)->with('categories',$categories);
    }
}

