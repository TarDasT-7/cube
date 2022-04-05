<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\AdvertisementImage;
use Illuminate\Http\Request;

class AdvertisementImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=AdvertisementImage::all();
        $advertisements=Advertisement::all();
        return view('admin.pages.advertisement_image.indexadvertisement_image')->with('advertisements',$advertisements)->with('images',$images);
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


            'advertisement'=> "required|numeric",
            'show_id'=> "required|numeric",
            'image'=> "required| dimensions:max_width=1050,max_height=1450,min_width=950,min_height=1350",
        ]);
        $image=new AdvertisementImage();
        $image->advertisement_id=$request->input('advertisement');
        $image->show_id=$request->input('show_id');
        if($file=$request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images/advertisement', $name);
            $image->image = $name;
        }
        $image->save();
        $images=AdvertisementImage::all();
        $advertisements=Advertisement::all();
        session()->flash('add','فایل با موفقیت اضافه شد');
        return redirect('admin/advertisement_image')->with('advertisements',$advertisements)->with('images',$images);


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
        $file=AdvertisementImage::find($id);
        $advertisements=Advertisement::all();
        return view('admin.pages.advertisement_image.editadvertisement_image')->with('advertisements',$advertisements)->with('file',$file);

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
            'advertisement'=> "required|numeric",
            'show_id'=> "required|numeric",
        ]);
        $image=AdvertisementImage::find($id);
        $image->advertisement_id=$request->input('advertisement');
        $image->show_id=$request->input('show_id');
        if($file=$request->file('image')) {
            $request->validate([
                'image'=> "required| dimensions:max_width=1050,max_height=1450,min_width=950,min_height=1350",
            ]);
            $name = time() . $file->getClientOriginalName();
            $file->move('images/advertisement', $name);
            $image->image = $name;
        }
        $image->save();
        $images=AdvertisementImage::all();
        $advertisements=Advertisement::all();
        session()->flash('update','فایل با موفقیت به روزرسانی شد');
        return redirect('admin/advertisement_image')->with('advertisements',$advertisements)->with('images',$images);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image=AdvertisementImage::find($id);
        $image->delete();
        $images=AdvertisementImage::all();
        $advertisements=Advertisement::all();
        session()->flash('delete','فایل با موفقیت حذف شد');
        return redirect('admin/advertisement_image')->with('advertisements',$advertisements)->with('images',$images);
    }
}
