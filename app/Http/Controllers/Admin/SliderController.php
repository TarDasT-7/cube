<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::all();
        return view('admin.pages.slider.indexslider')->with('sliders',$sliders);
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
            'title'=> "required|max:255",
            'desc'=> "required",
            'category'=> "required",
            'image'=> "required| dimensions:max_width=1650,max_height=550,min_width=1550,min_height=450",
        ]);


        $slider=new Slider();
        $slider->title=$request->input('title');
        $slider->desc=$request->input('desc');
        $slider->category=$request->input('category');
        if($file=$request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $slider->image = $name;
        }
        $slider->save();
        $sliders=Slider::all();
        session()->flash('add','اسلاید با موفقیت ایجاد شد');
        return redirect('admin/slider')->with('sliders',$sliders);

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
        $slider=Slider::find($id);
        return view('admin.pages.slider.editslider')->with('slider',$slider);
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
            'desc'=> "required",
            'category'=> "required",
        ]);

        $slider=Slider::find($id);
        $slider->title=$request->input('title');
        $slider->desc=$request->input('desc');
        if($request->input('category')) {
            $slider->category = $request->input('category');
        }
        if($file=$request->file('image')) {
            $request->validate([
                'image'=> " dimensions:max_width=1650,max_height=550,min_width=1550,min_height=450",
            ]);
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $slider->image = $name;
        }
        $slider->save();
        $sliders=Slider::all();
        session()->flash('update','اسلاید با موفقیت به روز رسانی شد');
        return redirect('admin/slider')->with('sliders',$sliders);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider=Slider::find($id);
        $slider->delete();
        $sliders=Slider::all();
        session()->flash('delete','اسلاید با موفقیت حذف شد');
        return redirect('admin/slider')->with('sliders',$sliders);
    }
}
