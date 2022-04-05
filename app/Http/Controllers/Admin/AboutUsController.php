<?php

namespace App\Http\Controllers\Admin;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $about = AboutUs::all()->last();
        return view('admin.pages.aboutUs.index')->with('about',$about);
    }

    public function create(){

    }

    public function store(Request $request)
    {
        $request->validate([
            'description1'=> "required",
            'description2'=> "required",
        ]);
        $about=new AboutUs();
        $about->description1=$request->input('description1');
        $about->description2=$request->input('description2');
        $about->save();
        session()->flash('add','توضیحات در باره ما با موفقیت معرفی شد');
        return redirect('admin/aboutUs');

    }

    public function edit($id)
    {
        $about=AboutUs::find($id);
        return view('admin.pages.aboutUs.edit')->with('about',$about);

    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'description1'=> "required",
            'description2'=> "required",
        ]);
        $about=AboutUs::find($id);
        $about->description1=$request->input('description1');
        $about->description2=$request->input('description2');
        $about->save();
        session()->flash('update','توضیحات در باره ما با موفقیت به روزرسانی شد');
        return redirect('admin/aboutUs');
    }

    public function destroy($id){

    }



    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'تصویر با موفقیت بارگذاری شد.';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
