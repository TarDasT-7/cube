<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Upload;
use App\Models\CourseVideo;
use App\Models\Heading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function items($id)
    {
        $course=Course::find($id);
        $headings=$course->headings;
        $files=CourseVideo::where('course_id' , $id)->get();
        return view('admin.pages.ourProduct.course.files' , compact('files' , 'course' , 'headings'));
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
            'title'=> "required|max:250",
            'subHead'=> "|max:250",
            'id'=> "required|numeric",
            'size'=> "required|max:250",
            'file'=> "required|max:300000",
        ]);

        $course=Course::find($request->id);
        $course->video_num=$course->video_num + 1;
        $course->save();
        $video=new CourseVideo();
        $video->title=$request->input('title');
        $video->heading_id=$request->input('subHead');
        $video->course_id=$request->input('id');
        $video->size=$request->input('size');
        
        $file=$request->file('file');
        {
            $path="videos/courses/$request->id/";
            $extension ='.'.$file->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ="course-$request->id-$video->size-CUBE-". time() . $extension;
            $file->move($path, $name);
            $video->file=$name;
        }


        $video->save();

        session()->flash('add','فایل با موفقیت اضافه شد');
        return redirect()->back();
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
            'title'=> "required|max:250",
            'subHead'=> "|max:250",
            'size'=> "required|max:250",
            'file'=> "max:300000",
        ]);
        $video=CourseVideo::find($id);
        $video->title=$request->input('title');
        $video->heading_id=$request->input('subHead');
        $video->size=$request->input('size');

        if($demo = $request->file('file'))
        {
            $rm="videos/courses/$video->course_id/$video->file";
            File::delete($rm);
            $path="videos/courses/$video->course_id";
            $extension ='.'.$demo->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ="course-$video->course_id-$video->size-CUBE-". time() . $extension;
            $demo->move($path, $name);
            $video->file=$name;
        }

        $video->save();
        session()->flash('update','فایل با موفقیت به روزرسانی شد');
        return redirect()->back();
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
        $course=Course::find($video->course_id);
        $course->video_num=$course->video_num - 1;
        $course->save();
        $rm="videos/courses/$video->course_id/$video->file";
        File::delete($rm);

        $video->delete();

        session()->flash('delete','فایل با موفقیت حذف شد');
        return redirect()->back();
    }


    public function subHeadingAjaax(Request $request)
    {
        $heading=Heading::find($request->id);
        $subs=$heading->items;
        return $subs;
    }
}
