<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Producer;
use App\Models\FreeVideo;
use App\Models\FreevideoFile;
use App\Models\Category;


class FreeVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=FreeVideo::all();
        return view('admin.pages.ourProduct.freeVideo.index' , compact(['videos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producers=Producer::where('product' , 1)->orWhere('course',1)->get();
        $categories = Category::where('related' , 'دوره')->orWhere('related','محصولات')->get();
        $rel='create';

        return view('admin.pages.ourProduct.freeVideo.createOrUpdate' , compact(['categories','producers' , 'rel']));
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
            'time'=>'required|max:250',
            'producer'=>'required|',
            'hardship'=>'required|',
            'category'=>'required|',
            'small_description'=>'required|max:700',
            'long_description'=>'required|max:5000',
            'video'=>'required|max:15000',
            'image'=>'required|max:1500',
        ]);
        $video = new FreeVideo();
        $video->title = $request->title;
        $video->time = $request->time;
        $video->producer_id = $request->producer;
        $video->hardship = $request->hardship;
        $video->category_id = $request->category;
        $video->small_description = $request->small_description;
        $video->long_description = $request->long_description;

        $image = $request->file('image');
        $path='images/free';
        $extension ='.'.$image->extension();
        if(!file_exists($path))
        {
            File::makeDirectory($path , 0775 , true);
        }
        $name ='fv-cover-'. time() . $extension;
        $image->move($path, $name);
        $video->cover=$name;

        $demo = $request->file('video');
        $path='videos/free';
        $extension ='.'.$demo->extension();
        if(!file_exists($path))
        {
            File::makeDirectory($path , 0775 , true);
        }
        $name ='fv-demo-'. time() . $extension;
        $demo->move($path, $name);
        $video->demo=$name;

        $video->save();

        session()->flash('add','ویدئو با موفقیت ایجاد شد');
        return redirect()->route('free-video.index');
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
        $video = FreeVideo::find($id);
        $producers=Producer::where('product' , 1)->orWhere('course',1)->get();
        $categories = Category::where('related' , 'دوره')->orWhere('related','محصولات')->get();
        $rel='update';

        return view('admin.pages.ourProduct.freeVideo.createOrUpdate' , compact(['categories','producers' , 'rel' , 'video']));
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
            'time'=>'required|max:250',
            'producer'=>'required|',
            'hardship'=>'required|',
            'category'=>'required|',
            'small_description'=>'required|max:700',
            'long_description'=>'required|max:5000',
            'video'=>'max:15000',
            'image'=>'max:1500',
        ]);
        $video =FreeVideo::find($id);
        $video->title = $request->title;
        $video->time = $request->time;
        $video->producer_id = $request->producer;
        $video->hardship = $request->hardship;
        $video->category_id = $request->category;
        $video->small_description = $request->small_description;
        $video->long_description = $request->long_description;

        if($image = $request->file('image'))
        {
            $rm="images/free/$video->cover";
            File::delete($rm);
            $path='images/free';
            $extension ='.'.$image->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='fv-cover-'. time() . $extension;
            $image->move($path, $name);
            $video->cover=$name;
        }

        if($demo = $request->file('video'))
        {
            $rm="videos/free/$video->demo";
            File::delete($rm);
            $path='videos/free';
            $extension ='.'.$demo->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='fv-demo-'. time() . $extension;
            $demo->move($path, $name);
            $video->demo=$name;
        }

        $video->save();

        session()->flash('add','ویدئو با موفقیت ویرایش شد');
        return redirect()->route('free-video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video =FreeVideo::find($id);
        $rm='images/free/'.$video->cover;
        File::delete($rm);
        $rm='videos/free/'.$video->demo;
        File::delete($rm);
        foreach($video->files as $file)
        {
            $rm='videos/free/'.$id.'/'.$file->file;
            File::delete($rm);
        }
    }
}
