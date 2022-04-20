<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Producer;
use App\Models\Heading;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.pages.ourProduct.course.index' , compact('courses'));
    }
    public function heading($id)
    {
        $course=Course::find($id);
        $headings=Heading::where('course_id' , $id)->get();
        return view('admin.pages.ourProduct.course.heading' , compact(['headings' , 'course']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::where('related' , 'دوره')->orWhere('related' , 'آنلاین')->get();
        $producers = Producer::where('course' , 1)->get();
        $rel='create';
        return view('admin.pages.ourProduct.course.createOrUpdate' , compact(['rel' , 'categories' , 'producers']));
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
            'title'=> "required|max:250",
            'time'=> "required",
            'type'=> "required|max:250",
            'link'=> "max:2500",
            'producer'=> "required",
            'category'=> "required",
            'subCate'=> "required",
            'hardship'=> "required",
            'price'=> "required|numeric",
            'off'=> "required|numeric",
            'small_description'=> "required",
            'long_description'=> "required",
            'image'=> "required|max:1000",
            'video'=> "required|max:2000",
        ]);

        $course = new Course();
        $course->title = $request->title;
        $course->course_time = $request->time;
        $course->producer_id = $request->producer;
        $course->category = $request->category;
        $course->sub_category = $request->subCate;
        $course->level = $request->hardship;
        $course->price = $request->price;
        $course->off = $request->off;
        $course->desc = $request->small_description;
        $course->long_desc = $request->long_description;
        $course->video_num = 0;

        $course->type = $request->type;
        $course->link = $request->link;

        $image=$request->file('image');
        {
            $path='images/courses';
            $extension ='.'.$image->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='course-cover-'. time() . $extension;
            $image->move($path, $name);
            $course->image=$name;
        }

        $video=$request->file('video');
        {
            $path='videos/courses';
            $extension ='.'.$video->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='course-demo-'. time() . $extension;
            $video->move($path, $name);
            $course->demo=$name;
        }

        $course->save();

        session()->flash('add','دوره با موفقیت معرفی شد');
        return redirect()->route('course.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */



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

        $categories=Category::where('related' , 'دوره')->get();
        $producers = Producer::where('course' , 1)->get();
        $course = Course::find($id);
        $rel='update';
        return view('admin.pages.ourProduct.course.createOrUpdate' , compact(['rel' , 'categories' , 'producers' , 'course']));


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
            'title'=> "required|max:250",
            'time'=> "required",
            'producer'=> "required",
            'category'=> "required",
            'subCate'=> "required",
            'hardship'=> "required",
            'price'=> "required|numeric",
            'off'=> "required|numeric",
            'small_description'=> "required",
            'long_description'=> "required",
            'image'=> "max:1000",
            'video'=> "max:2000",
            'type'=> "required|max:250",
            'link'=> "max:2500",
        ]);

        $course = Course::find($id);
        $course->title = $request->title;
        $course->course_time = $request->time;
        $course->producer_id = $request->producer;
        $course->category = $request->category;
        $course->sub_category = $request->subCate;
        $course->level = $request->hardship;
        $course->price = $request->price;
        $course->off = $request->off;
        $course->desc = $request->small_description;
        $course->long_desc = $request->long_description;
        $course->type = $request->type;
        $course->link = $request->link;

        if($image=$request->file('image'))
        {
            $rm="images/courses/$course->image";
            File::delete($rm);

            $path='images/courses';
            $extension ='.'.$image->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='course-cover-'. time() . $extension;
            $image->move($path, $name);
            $course->image=$name;
        }

        if($video=$request->file('video'))
        {
            $rm="videos/courses/$course->video";
            File::delete($rm);
            $path='videos/courses';
            $extension ='.'.$video->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='course-demo-'. time() . $extension;
            $video->move($path, $name);
            $course->demo=$name;
        }

        $course->save();

        session()->flash('add','دوره با موفقیت ویرایش شد');
        return redirect()->route('course.index');
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

        $rm="images/courses/$course->image";
        File::delete($rm);
        
        $rm="videos/courses/$course->demo";
        File::delete($rm);

        foreach ($course->course_videos as $key => $video) {
            
            $rm="videos/courses/$id/$video->file";
            File::delete($rm);
            $video->delete();
        }

        $course->delete();

        session()->flash('delete','دوره با موفقیت حذف شد');
        return redirect()->back();
    }


    public function subCateGET(Request $request)
    {

        return SubCategory::where('category_id' , $request->cate)->get();
    }
}
