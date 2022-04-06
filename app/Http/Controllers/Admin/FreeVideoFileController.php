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

class FreeVideoFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function findVideo($id)
    {
        $video=FreeVideo::find($id);
        $files=$video->files;
        return view('admin.pages.ourProduct.freeVideo.files' , compact(['video' , 'files']));
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
            'size'=>'required|max:250',
            'video'=>'required',
            'file'=>'required|max:15000',
        ]);

        $file=new FreevideoFile();
        $file->title = $request->title;
        $file->size = $request->size;
        $file->freevideo_id = $request->video;
        
        $video = $request->file('file');

        $path="videos/free/$request->video";
        $extension ='.'.$video->extension();
        if(!file_exists($path))
        {
            File::makeDirectory($path , 0775 , true);
        }
        $name ='fv-file-'. time() . $extension;
        $video->move($path, $name);
        $file->file=$name;

        $file->save();

        session()->flash('add','ویدئو با موفقیت اضاف شد');
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
            'size'=>'required|max:250',
            'file'=>'max:15000',
        ]);

        $file=FreevideoFile::find($id);
        $file->title = $request->title;
        $file->size = $request->size;
        
        if($video = $request->file('file'))
        {
            $rm="videos/free/$file->freevideo_id/$file->file";
            File::delete($rm);
            // dd(0);
            $path="videos/free/$file->freevideo_id";
            $extension ='.'.$video->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='fv-file-'. time() . $extension;
            $video->move($path, $name);
            $file->file=$name;
        }
        
        $file->save();

        session()->flash('add','ویدئو با موفقیت ویرایش شد');
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
        $file=FreevideoFile::find($id);
        $rm="videos/free/$file->freevideo_id/$file->file";
        File::delete($rm);
        $file->delete();

        session()->flash('add','ویدئو با موفقیت حذف شد');
        return redirect()->back();
    }
}
