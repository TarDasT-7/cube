<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Heading;
use App\Models\SubHeading;

class HeadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function subIndex($id)
    {
        // $heading=Heading::find();

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
            'id'=>'required|',
            'title'=>'required|max:250',
        ]);

        $heading=new Heading();
        $heading->course_id= $request->id;
        $heading->title= $request->title;
        $heading->save();

        session()->flash('add','عنوان سر فصل اضاف شد');
        return redirect()->back();
    }

    public function subStore(Request $request)
    {
        $request->validate([
            'id'=>'required|',
            'title'=>'required|max:250',
        ]);
        $sub = new SubHeading ();
        $sub->heading_id = $request->id;
        $sub->title = $request->title;
        $sub->save();
        session()->flash('add','عنوان زیر سر فصل اضاف شد');
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

        ]);
        $heading=Heading::find($id);
        $heading->title= $request->title;
        $heading->save();

        session()->flash('add','عنوان سر فصل ویرایش شد');
        return redirect()->back();
    }

    public function subUpdate(Request $request)
    {
        $sub = SubHeading::find($request->id);
        $sub->title = $request->title;
        if($sub->save())
        {
            return 0;

        }else
        {
            return 1;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $heading=Heading::find($id);
        foreach($heading->items as $item)
        {
            $item->delete();
        }
        $heading->delete();
        
        session()->flash('add','عنوان سر فصل حذف شد');
        return redirect()->back();

    }

    public function subDestroy(Request $request)
    {
        $sub = SubHeading::find($request->id);
        if($sub->delete())
        {
            return 0;

        }else
        {
            return 1;
        }
    }
}
