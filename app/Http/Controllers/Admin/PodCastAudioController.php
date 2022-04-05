<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PodAudio;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodCastAudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=PodAudio::all();
        $podcasts=Podcast::all();
        return view('admin.pages.podAudio.indexpodaudio')->with('files',$files)->with('podcasts',$podcasts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $podcasts=Podcast::all();
        return view('admin.pages.podAudio.createpodaudio')->with('podcasts',$podcasts);
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
            'podcast'=> "required|numeric",
            'podcast_time'=> "required",
            'desc'=> "required",
            'file'=> "required| size:100000",
        ]);
        $podcast=new PodAudio();
        $podcast->title=$request->input('title');
        $podcast->show_id=$request->input('show_id');
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() .$file->getClientOriginalName();
            $file->move('files', $filename);
            $podcast->file=$filename;
        }
        $podcast->podcast_time = $request->input('podcast_time');
        $podcast->desc = $request->input('desc');
        $podcast->podcast_id=$request->input('podcast');
        $podcast->save();
        $files=PodAudio::all();
        $podcasts=Podcast::all();
        session()->flash('add','فایل با موفقیت اضافه شد');
        return redirect('admin/podaudio')->with('files',$files)->with('podcasts',$podcasts);
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
        $file=PodAudio::find($id);
        $podcasts=Podcast::all();
        return view('admin.pages.podAudio.editpodaudio')->with('file',$file)->with('podcasts',$podcasts);
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
            'podcast'=> "required|numeric",
            'podcast_time'=> "required",
            'desc'=> "required",
        ]);
        $podcast=PodAudio::find($id);
        $podcast->title=$request->input('title');
        $podcast->show_id=$request->input('show_id');
        $podcast->desc = $request->input('desc');
        $podcast->podcast_time = $request->input('podcast_time');
        if ($request->input('podcast')) {
            $podcast->podcast_id = $request->input('podcast');
        }
        $podcast->save();
        $files=PodAudio::all();
        $podcasts=Podcast::all();
        session()->flash('update','فایل با موفقیت به روز رسانی شد ');
        return redirect('admin/podaudio')->with('files',$files)->with('podcasts',$podcasts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $podcast=PodAudio::find($id);
        $podcast->delete();
        $files=PodAudio::all();
        $podcasts=Podcast::all();
        session()->flash('delete','فایل با موفقیت حذف شد');
        return redirect('admin/podaudio')->with('files',$files)->with('podcasts',$podcasts);
    }
}
