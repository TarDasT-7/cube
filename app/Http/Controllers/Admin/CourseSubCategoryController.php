<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CourseSubCategory;
use Illuminate\Http\Request;

class CourseSubCategoryController extends Controller
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

        $category = new CourseSubCategory();
        $category->name = $request->input('name');
        $category->course_category_id = $request->input('category');
        $category->save();


        session()->flash('add','زیر دسته با موفقیت ایجاد شد');
        return redirect('admin/course_category');
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
        $categories=CourseCategory::all();
        $sub_category=CourseSubCategory::find($id);
        return view('admin.pages.course_category.editcourse_sub_category')->with('categories',$categories)->with('sub_category',$sub_category);
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

        $category=CourseSubCategory::find($id);
        $category->name = $request->input('name');
        if ($request->input('category')) {
            $category->course_category_id = $request->input('category');
        }
        $category->save();

        session()->flash('update','زیر دسته با موفقیت به روزرسانی شد');
        return redirect('admin/course_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=CourseSubCategory::find($id);
        $category->delete();

        session()->flash('delete','زیر دسته با موفقیت حذف شد');
        return redirect('admin/course_category');
    }
}
