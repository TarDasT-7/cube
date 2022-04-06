<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\PodAudio;
use App\Models\Podcast;
use App\Models\Category;




class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasts = Podcast::all();
        $categories = Category::where('related' , 'پادکست')->get();
        return view('admin.pages.ourProduct.podcast.index', compact(['podcasts','categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PodCategory::all();
        $speakers = Speaker::all();
        return view('admin.pages.podcast.craetepodcast')->with('categories', $categories)->with('speakers', $speakers);

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
            'category'=> "required",
            // 'image'=> "required| dimensions:max_width=700,max_height=700,min_width=600,min_height=600",
            'image'=> "required|max:1000",
        ]);

        $podcast = new Podcast();
        $podcast->title = $request->input('title');
        $podcast->category_id = $request->category;
        
        if($file=$request->file('image')) {

            $extension ='.'.$file->extension();
            $path='images/podcasts';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='podcast-'. time() . $extension;
            $file->move($path, $name);
            $podcast->image = $name;

        }

        $podcast->save();
        session()->flash('add','پادکست با موفقیت معرفی شد');
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
        $podcast = Podcast::find($id);
        $categories = PodCategory::all();
        $speakers = Speaker::all();
        return view('admin.pages.podcast.editpodcast')->with('categories', $categories)->with('podcast', $podcast)->with('speakers', $speakers);
  
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
            'category'=> "required",
            'image'=> "max:1000",
        ]);

        $podcast = Podcast::find($id);
        $podcast->title = $request->input('title');
        $podcast->category_id = $request->category;
        
        if($file=$request->file('image')) {

            $rm="images/podcasts/$podcast->image";
            File::delete($rm);

            $extension ='.'.$file->extension();
            $path='images/podcasts';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='podcast-'. time() . $extension;
            $file->move($path, $name);
            $podcast->image = $name;

        }

        $podcast->save();
        session()->flash('add','پادکست با موفقیت ویرایش شد');
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
        $podcast = Podcast::find($id);

        $rm="images/podcasts/$podcast->image";
        File::delete($rm);

        foreach($podcast->files as $file)
        {
            $rm="images/podcasts/$podcast->id/$file->image";
            File::delete($rm);
            $rm="sounds/podcasts/$podcast->id/$podcast->sound";
            File::delete($rm);
            $file->delete();
        }

        $podcast->delete();

        session()->flash('add','پادکست با موفقیت حذف شد');
        return redirect()->back();
    }
}
