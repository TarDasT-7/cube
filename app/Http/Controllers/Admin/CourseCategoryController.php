<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CourseSubCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=CourseCategory::all();

        $sub_categories=CourseSubCategory::all();
        return view('admin.pages.course_category.indexcourse_category')->with('categories',$categories)->with('sub_categories',$sub_categories);
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
            'svg'=> "required",
        ]);

        $category = new CourseCategory();
        $category->name = $request->input('name');
        $category->svg = $request->input('svg');
        $category->save();

        session()->flash('add','دسته بندی با موفقیت ایجاد شد');
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
        $category=CourseCategory::find($id);
        return view('admin.pages.course_category.editcourse_category')->with('category',$category);

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
            'svg'=> "required",
        ]);
        $category=CourseCategory::find($id);
        $category->name = $request->input('name');
        if ($request->input('svg')){
            $category->svg = $request->input('svg');
        }
        $category->save();

        session()->flash('update','دسته بندی با موفقیت بروز رسانی شد');
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
        $category=ProductCategory::find($id);
        $category->delete();

        session()->flash('delete','دسته بندی با موفقیت حذف شد');
        return redirect('admin/course_category');
     }
}
