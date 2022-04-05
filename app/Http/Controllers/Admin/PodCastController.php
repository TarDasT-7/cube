<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use App\Models\PodCategory;
use App\Models\Speaker;
use Illuminate\Http\Request;

class PodCastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasts = Podcast::all();
        return view('admin.pages.podcast.indexpodcast')->with('podcasts', $podcasts);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> "required|max:255",
            'description'=> "required",
            'category'=> "required",
            'speaker'=> "required|numeric",
            'image'=> "required| dimensions:max_width=700,max_height=700,min_width=600,min_height=600",
        ]);
        $podcast = new Podcast();
        $podcast->title = $request->input('title');
        $podcast->speaker_id = $request->input('speaker');
        if($file=$request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $podcast->image = $name;
        }
        $podcast->desc = $request->input('description');
        $podcast->save();
        $podcast->pod_categories()->attach($request->input('category'));
        $podcasts = Podcast::all();
        session()->flash('add','پادکست با موفقیت معرفی شد');
        return redirect('admin/podcast')->with('podcasts', $podcasts);

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
        $podcast = Podcast::find($id);
        $categories = PodCategory::all();
        $speakers = Speaker::all();
        return view('admin.pages.podcast.editpodcast')->with('categories', $categories)->with('podcast', $podcast)->with('speakers', $speakers);
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
            'description'=> "required",
            'category'=> "required",
            'speaker'=> "required|numeric",
        ]);
        $podcast = Podcast::find($id);
        $podcast->title = $request->input('title');
        if ($request->input('speaker')) {
            $podcast->speaker_id = $request->input('speaker');
        }
        if($file=$request->file('image')) {
            $request->validate([
                'image'=> "required| dimensions:max_width=700,max_height=700,min_width=600,min_height=600",
            ]);
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $podcast->image = $name;
        }
        $podcast->desc = $request->input('description');
        $podcast->save();
        if ($request->input('category')) {
            $podcast->pod_categories()->sync($request->input('category'));
        }
        $podcasts = Podcast::all();
        session()->flash('update','پادکست با موفقیت به روزرسانی شد');
        return redirect('admin/podcast')->with('podcasts', $podcasts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $podcast = Podcast::find($id);
        $podcast->pod_categories()->detach();
        $podcast->delete();
        $courses = Podcast::all();
        session()->flash('delete','پادکست با موفقیت حذف شد');
        return redirect('admin/podcast')->with('courses', $courses);
    }
}
