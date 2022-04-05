<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=Teacher::all();
        $categories=CourseCategory::all();
        return view('admin.pages.teacher.indexteacher')->with('teachers',$teachers)->with('categories',$categories);
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
            'about'=> "required",

        ]);
        $teacher = new Teacher();
        $teacher->name = $request->input('name');
        $teacher->desc=$request->input('about');
        $teacher->course_category_id=$request->input('category');
        $teacher->save();

        $teachers=Teacher::all();
        $categories=CourseCategory::all();
        session()->flash('add','استاد با موفقیت معرفی شد');
        return redirect('admin/teacher')->with('teachers',$teachers)->with('categories',$categories);

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
        $teacher=Teacher::find($id);
        $categories=CourseCategory::all();
        return view('admin.pages.teacher.editteacher')->with('teacher',$teacher)->with('categories',$categories);
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
            'about'=> "required",
        ]);
        $teacher=Teacher::find($id);
        $teacher->name=$request->input('name');
        $teacher->desc=$request->input('about');
        if ($request->input('category')) {
            $teacher->course_category_id=$request->input('category');
        }
        $teacher->save();

        $teachers=Teacher::all();
        $categories=CourseCategory::all();
        session()->flash('update','مشخصات استاد با موفقیت به روزرسانی شد');
        return redirect('admin/teacher')->with('teachers',$teachers)->with('categories',$categories);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher=Teacher::find($id);
        $teacher->delete();

        $teachers=Teacher::all();
        $categories=CourseCategory::all();
        session()->flash('delete','استاد با موفقیت حذف شد');
        return redirect('admin/teacher')->with('teachers',$teachers)->with('categories',$categories);
    }
}
