<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Upload;
use App\Models\CourseVideo;
use Illuminate\Http\Request;

class CourseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=CourseVideo::all();
        $courses=Course::all();
       return view('admin.pages.coursevideo.indexcoursevideo')->with('files',$files)->with('courses',$courses);
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
            'title'=> "required|max:255",
            'show_id'=> "required|numeric",
            'course'=> "required|numeric",
            'course_time'=> "required",
            'file'=> "required| size:100000",
        ]);
        $video=new CourseVideo();
        $video->title=$request->input('title');
        $video->show_id=$request->input('show_id');
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() .$file->getClientOriginalName();
            $file->move('files', $filename);
            $video->file=$filename;
        }
        $video->course_time = $request->input('course_time');
        $video->course_id=$request->input('course');
        $video->save();
        $files=CourseVideo::all();
        $courses=Course::all();
        session()->flash('add','فایل با موفقیت اضافه شد');
        return redirect('admin/coursevideo')->with('files',$files)->with('courses',$courses);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $file=CourseVideo::find($id);
        $courses=Course::all();
        return view('admin.pages.coursevideo.editcoursevideo')->with('file',$file)->with('courses',$courses);
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
            'title'=> "required|max:255",
            'show_id'=> "required|numeric",
            'course'=> "required|numeric",
            'course_time'=> "required",
        ]);
        $video=CourseVideo::find($id);
        $video->title=$request->input('title');
        $video->show_id=$request->input('show_id');
        if($request->input('course')) {
            $video->course_id = $request->input('course');
        }
        $video->course_time = $request->input('course_time');
        $video->save();
        $files=CourseVideo::all();
        $courses=Course::all();
        session()->flash('update','فایل با موفقیت به روزرسانی شد');
        return redirect('admin/coursevideo')->with('files',$files)->with('courses',$courses);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video=CourseVideo::find($id);
        $video->delete();
        $files=CourseVideo::all();
        $courses=Course::all();
        session()->flash('delete','فایل با موفقیت حذف شد');
        return redirect('admin/coursevideo')->with('files',$files)->with('courses',$courses);
    }
}
