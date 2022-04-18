<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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
            'desc'=> "required|max:5000",
            'image'=> "required|max:1500",
        ]);

        $slider=new Slider();
        $slider->desc=$request->input('desc');

        if($file=$request->file('image')) {

            $extension ='.'.$file->extension();
            $path='images/wallpapers';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='wallpaper-'. time() . $extension;
            $file->move($path, $name);
            $slider->image = $name;

        }

        $slider->save();
        session()->flash('add','اسلاید با موفقیت ایجاد شد');
        return redirect()->route('slider.index');

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
            'desc'=> "required|max:5000",
            // 'image'=> "required| dimensions:max_width=1650,max_height=550,min_width=1550,min_height=450",
            'image'=> "max:1500",
        ]);

        $slider=Slider::find($id);
        $slider->desc=$request->input('desc');

        if($file=$request->file('image')) {

            $rm='images/wallpapers/'.$slider->image;
            File::delete($rm);

            $extension ='.'.$file->extension();
            $path='images/wallpapers';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='wallpaper-'. time() . $extension;
            $file->move($path, $name);
            $slider->image = $name;

        }

        $slider->save();
        session()->flash('update','اسلاید با موفقیت ویرایش شد');
        return redirect()->route('slider.index');
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
        $rm='images/wallpapers/'.$slider->image;
        File::delete($rm);
        $slider->delete();
        session()->flash('update','اسلاید با موفقیت حذف شد');
        return redirect()->route('slider.index');
    }
}
