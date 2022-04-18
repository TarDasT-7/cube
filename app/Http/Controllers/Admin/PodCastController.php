<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\PodAudio;
use App\Models\Producer;
use App\Models\Podcast;
use App\Models\Category;
use App\Models\Tag;




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

    public function items($id)
    {
        $podcast = Podcast::find($id);
        $parts=$podcast->files;
        $categories = Category::where('related' , 'پادکست')->get();
        return view('admin.pages.ourProduct.podcast.parts', compact(['podcast' , 'categories' , 'parts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createItem(Request $request)
    {
        $podcast = Podcast::find($request->id);
        $producers=Producer::where('podcast',1)->get();
        $tags=Tag::all();
        $rel ='create';
        return view('admin.pages.ourProduct.podcast.createOrUpdatePart' , compact(['podcast','producers','rel','tags']));
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

    public function storeItem(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title'=> "required|max:250",
            'name'=> "required|max:250",
            'producer'=> "required",
            'number'=> "required",
            'tags.*'=> "max:250",
            'id'=> "required",
            'long_description'=> "required|max:5000",
            'sound'=> "required|max:10000",
            'image'=> "required|max:1000",
        ]);

        $part=new PodAudio();
        $part->title = $request->title;
        $part->name = $request->name;
        $part->producer_id = $request->producer;
        $part->number = $request->number;
        $part->podcast_id = $request->id;
        $part->description = $request->long_description;

        if($image = $request->file('image'))
        {

            $path="images/podcasts/$request->id";
            $extension ='.'.$image->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='pod-cover-'. time() . $extension;
            $image->move($path, $name);
            $part->image=$name;
        }

        if($demo = $request->file('sound'))
        {

            $path="sounds/podcasts/$request->id";
            $extension ='.'.$demo->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='pod-cast-'. time() . $extension;
            $demo->move($path, $name);
            $part->sound=$name;
        }


        if($request->tags)
        {
            if(in_array('null' , $request->tags))
            {
                $part->tags=null;
            }else
            {
                $tags='';
                foreach ($request->tags as $key => $tag) {
                    $tags .= $tag.'&&&';
                }
                $part->tags=$tags;
            }
        }

        $part->save();

        session()->flash('add','پادکست با موفقیت معرفی شد');
        return redirect()->route('podcast_part',$request->id);
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

    public function editItem($id)
    {
        $item=PodAudio::find($id);
        $allTag=Tag::all();
        $tags=explode('&&&',$item->tags);
        $producers=Producer::where('podcast',1)->get();
        $rel ='update';
        return view('admin.pages.ourProduct.podcast.createOrUpdatePart' , compact(['item','producers','rel','tags' , 'allTag']));
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

    public function updateItem(Request $request, $id)
    {
        $request->validate([
            'title'=> "required|max:250",
            'name'=> "required|max:250",
            'producer'=> "required",
            'number'=> "required",
            'long_description'=> "required|max:5000",
            'sound'=> "|max:10000",
            'image'=> "|max:1000",
            'tags.*'=> "max:250",
        ]);

        $part=PodAudio::find($id);
        $part->title = $request->title;
        $part->name = $request->name;
        $part->producer_id = $request->producer;
        $part->number = $request->number;
        $part->description = $request->long_description;
        $id=$part->podcast_id;
        if($image = $request->file('image'))
        {
            $rm="images/podcasts/$id/$part->image";
            File::delete($rm);

            $path="images/podcasts/$id";
            $extension ='.'.$image->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='pod-cover-'. time() . $extension;
            $image->move($path, $name);
            $part->image=$name;
        }

        if($demo = $request->file('sound'))
        {
            $rm="sounds/podcasts/$id/$part->sound";
            File::delete($rm);

            $path="sounds/podcasts/$id";
            $extension ='.'.$demo->extension();
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }
            $name ='pod-cast-'. time() . $extension;
            $demo->move($path, $name);
            $part->sound=$name;
        }

        if($request->tags)
        {
            $part->tags=null;
            
            if(in_array('null' , $request->tags))
            {
                $part->tags=null;
            }else
            {
                $tags='';
                foreach ($request->tags as $key => $tag) {
                    $tags .= $tag.'&&&';
                }
                $part->tags=$tags;
            }
        }

        $part->save();

        session()->flash('add','پادکست با موفقیت معرفی شد');
        return redirect()->route('podcast_part',$id);
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

    public function destroyItem($id)
    {
        $part=PodAudio::find($id);
        $pid=$part->podcast_id;
        $rm="images/podcasts/$pid/$part->image";
        File::delete($rm);
        $rm="sounds/podcasts/$pid/$part->sound";
        File::delete($rm);
        
        $part->delete();

        session()->flash('add','پادکست با موفقیت حذف شد');
        return redirect()->back();
    }
}
