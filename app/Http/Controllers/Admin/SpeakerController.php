<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers=Speaker::all();

        return view('admin.pages.speaker.indexspeaker')->with('speakers',$speakers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'name'=> "required|max:255",
            'specialty'=> "required|max:255",
        ]);
        $speaker = new Speaker();
        $speaker->name = $request->input('name');
        $speaker->specialty = $request->input('specialty');
        $speaker->save();
        $speakers=Speaker::all();
        session()->flash('add','گوینده با موفقیت معرفی شد');
        return redirect('admin/speaker')->with('speakers',$speakers);

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
        $speaker=Speaker::find($id);
        return view('admin.pages.speaker.editspeaker')->with('speaker',$speaker);
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
            'name'=> "required|max:255",
            'specialty'=> "required|max:255",
        ]);
        $speaker=Speaker::find($id);
        $speaker->name=$request->input('name');
        $speaker->specialty = $request->input('specialty');
        $speaker->save();
        $speakers=Speaker::all();
        session()->flash('update','مشخصات گوینده با موفقیت به روزرسانی شد');
        return redirect('admin/speaker')->with('speakers',$speakers);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speaker=Speaker::find($id);
        $speaker->delete();
        $speakers=Speaker::all();
        session()->flash('delete','گوینده با موفقیت حذف شد');
        return redirect('admin/speaker')->with('speakers',$speakers);
    }
}
