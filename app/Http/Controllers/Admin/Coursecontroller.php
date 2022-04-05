<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Teacher;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class Coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course=Course::find(1);

        $courses = Course::all();
        $teachers = Teacher::all();
        return view('admin.pages.course.indexcourse')->with('courses', $courses)->with('teacher', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CourseCategory::all();
        $teachers = Teacher::all();

        return view('admin.pages.course.craetecourse')->with('categories', $categories)->with('teachers', $teachers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=> "required|max:255",
            'price'=> "required|numeric",
            'good_id'=> "required|numeric",
            'off_price'=> "required|numeric",
            'course_time'=> "required",
            'video_num'=> "required|numeric",
            'level'=> "required",
            'teacher'=> "required",
            'condition'=> "required",
            'description'=> "required",
            'image'=> "required| dimensions:max_width=1250,max_height=770,min_width=1150,min_height=670",
        ]);
        $course = new Course();
        $course->title = $request->input('title');
        $course->good_id = $request->input('good_id');
        $course->price = $request->input('price');
        $course->off_price = $request->input('off_price');
        $course->course_time = $request->input('course_time');
        $course->video_num = $request->input('video_num');
        $off=round(($course->price-$course->off_price)/$course->price*100);
        $course->off=$off;
        $course->level = $request->input('level');
        $course->teacher_id = $request->input('teacher');
        $course->course_sub_category_id=$request->input('sub_category');
        if($file=$request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $course->image = $name;
        }
        $course->desc = $request->input('description');
        $course->condition = $request->input('condition');
        $course->save();

        $courses = Course::all();
        session()->flash('add','دوره با موفقیت معرفی شد');
        return redirect('admin/course')->with('courses', $courses);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request)
    {
        $cat=$request->data;
        $category=CourseCategory::find($cat);
        return json_encode($category->course_sub_categories);
    }


    public function teacher(Request $request)
    {
        $cat=$request->data;
        $category=CourseCategory::find($cat);
        return json_encode($category->teachers);
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $categories = CourseCategory::all();
        $teachers = Teacher::all();
        return view('admin.pages.course.editcourse')->with('categories', $categories)->with('course', $course)->with('teachers', $teachers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=> "required|max:255",
            'good_id'=> "required|numeric",
            'price'=> "required|numeric",
            'off_price'=> "required|numeric",
            'course_time'=> "required",
            'video_num'=> "required|numeric",
            'level'=> "required",
            'teacher'=> "required",
            'condition'=> "required",
            'description'=> "required",
        ]);
        $course = Course::find($id);
        $course->title = $request->input('title');
                $course->good_id = $request->input('good_id');
        $course->price = $request->input('price');
        $course->off_price = $request->input('off_price');
        $course->course_time = $request->input('course_time');
        $course->video_num = $request->input('video_num');
        $off = round(($course->price - $course->off_price) / $course->price * 100);
        $course->off = $off;
        if ($request->input('level')) {
            $course->level = $request->input('level');
        }
        if ($request->input('teacher')) {
            $course->teacher_id = $request->input('teacher');
        }
        if ($file = $request->file('image')) {
            $request->validate([
                'image'=> "required| dimensions:max_width=1250,max_height=770,min_width=1150,min_height=670",
            ]);
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $course->image = $name;
        }
        if ($request->input('category')) {
            $course->course_sub_category_id=$request->input('sub_category');
        }
        $course->desc = $request->input('description');
        $course->save();

        $courses = Course::all();
        session()->flash('update','دوره با موفقیت به روزرسانی شد');
        return redirect('admin/course')->with('courses', $courses);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        $courses = Course::all();
        session()->flash('delete','دوره با موفقیت حذف شد');
        return redirect('admin/course')->with('courses', $courses);
    }
}
