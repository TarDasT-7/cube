<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVideo;
use Illuminate\Http\Request;

class ProductVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=ProductVideo::all();
        $products=Product::all();
        return view('admin.pages.product_video.indexproduct_video')->with('files',$files)->with('products',$products);
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
            'show_id'=> "required|numeric",
            'product'=> "required",
            'file'=> "required| size:100000",
        ]);
        $video=new ProductVideo();
        $video->title=$request->input('title');
        $video->show_id=$request->input('show_id');
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() .$file->getClientOriginalName();
            $file->move('files', $filename);
            $video->file=$filename;
        }
        $video->product_id=$request->input('product');
        $video->save();
        $files=ProductVideo::all();
        $products=Product::all();
        session()->flash('add','فایل با موفقیت اضافه شد');
        return redirect('admin/product_video')->with('files',$files)->with('products',$products);
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
        $file=ProductVideo::find($id);
        $products=Product::all();
        return view('admin.pages.product_video.editproduct_video')->with('file',$file)->with('products',$products);
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
            'product'=> "required",
        ]);
        $video=ProductVideo::find($id);
        $video->title=$request->input('title');
        $video->show_id=$request->input('show_id');
        if ($request->file('file')) {
            $request->validate([
                'file'=> "required| size:100000",
            ]);
            $file = $request->file('file');
            $filename = time() .$file->getClientOriginalName();
            $file->move('files', $filename);
            $video->file=$filename;
        }
        if ($request->input('product')) {
            $video->product_id = $request->input('product');
        }
        $video->save();
        $files=ProductVideo::all();
        $products=Product::all();
        session()->flash('delete','فایل با موفقیت به روزرسانی شد');
        return redirect('admin/product_video')->with('files',$files)->with('products',$products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video=ProductVideo::find($id);
        $video->delete();
        $files=ProductVideo::all();
        $products=Product::all();
        session()->flash('delete','فایل با موفقیت حذف شد');
        return redirect('admin/product_video')->with('files',$files)->with('products',$products);
    }
}
