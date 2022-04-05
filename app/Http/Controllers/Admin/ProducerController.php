<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Producer;


class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producers=Producer::all();
        return view('admin.pages.userManagement.producers.index' , compact(['producers']));

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
            'first_name'=>'required|max:250',
            'last_name'=>'required|max:250',
            'profession'=>'required|max:250',
            'desciption'=>'required|max:2500',
            'image'=>'max:1500',
        ]);
        $producer = new Producer();
        $producer->first_name = $request->first_name;
        $producer->last_name = $request->last_name;
        $producer->profession = $request->profession;
        $producer->description = $request->desciption;

        if($request->pro){
            $producer->product = 1;
        }
        if($request->cou){
            $producer->course = 1;
        }
        if($request->pod){
            $producer->podcast = 1;
        }
        if($request->blog){
            $producer->blog = 1;
        }

        if($file=$request->file('image')) {

            $extension ='.'.$file->extension();
            $path='images/producers';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='producr-'. time() . $extension;
            $file->move($path, $name);
            $producer->image = $name;
        }
        $producer->save();

        session()->flash('add','تولید کننده با موفقیت ایجاد شد');
        return redirect()->route('producer.index');
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
            'first_name'=>'required|max:250',
            'last_name'=>'required|max:250',
            'profession'=>'required|max:250',
            'desciption'=>'required|max:2500',
            'image'=>'max:1500',
        ]);
        $producer = Producer::find($id);
        $producer->first_name = $request->first_name;
        $producer->last_name = $request->last_name;
        $producer->profession = $request->profession;
        $producer->description = $request->desciption;

        if($request->pro){
            $producer->product = 1;
        }else
        {
            $producer->product = 0;
        }
        if($request->cou){
            $producer->course = 1;
        }else
        {
            $producer->course = 0;
        }
        if($request->pod){
            $producer->podcast = 1;
        }else
        {
            $producer->podcast = 0;
        }
        if($request->blog){
            $producer->blog = 1;
        }else
        {
            $producer->blog = 0;
        }

        if($file=$request->file('image')) {

            $extension ='.'.$file->extension();
            $rm='images/producers/'.$producer->image;
            File::delete($rm);
            $path='images/producers';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='producr-'. time() . $extension;
            $file->move($path, $name);
            $producer->image = $name;
        }
        $producer->save();

        session()->flash('add','تولید کننده با موفقیت ویرایش شد');
        return redirect()->route('producer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
