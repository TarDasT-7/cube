<?php

namespace App\Http\Controllers\Admin;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    public function index()
    {
        $abouts = AboutUs::all();
        return view('admin.pages.cubeTeam.aboutUs.index')->with('abouts',$abouts);
    }

    public function create(){
        $rel='create';
        return view('admin.pages.cubeTeam.aboutUs.createOrUpdate')->with('rel',$rel);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file'=> "required|max:1500",
            'title'=> "max:250",
            'description'=> "required|max:8000",
        ]);
        $about=new AboutUs();
        $about->title = $request->title;
        $about->description=$request->input('description');

        if($file=$request->file('file')) {

            $extension ='.'.$file->extension();
            $path='images/abouts';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='cube-'. time() . $extension;
            $file->move($path, $name);
            $about->image = $name;
        }

        $about->save();
        session()->flash('add',' در باره ما با موفقیت معرفی شد');
        return redirect()->route('aboutUs.index');

    }

    public function edit($id)
    {
        $about=AboutUs::find($id);
        $rel='update';
        return view('admin.pages.cubeTeam.aboutUs.createOrUpdate',compact(['about' , 'rel']));

    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'file'=> "max:1500",
            'title'=> "max:250",
            'description'=> "required|max:8000",
        ]);

        $about=AboutUs::find($id);
        $about->title = $request->title;
        $about->description=$request->input('description');

        if($file=$request->file('file')) {

            $rm = 'images/abouts/'.$about->image;
            File::delete($rm);

            $extension ='.'.$file->extension();
            $path='images/abouts';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='cube-'. time() . $extension;
            $file->move($path, $name);
            $about->image = $name;
        }

        $about->save();
        session()->flash('update',' در باره ما با موفقیت به روزرسانی شد');
        return redirect()->route('aboutUs.index');
    }

    public function destroy($id){

        $about=AboutUs::find($id);
        $rm = 'images/abouts/'.$about->image;
        File::delete($rm);
        $about->delete();
        session()->flash('update',' در باره ما با موفقیت به حذف شد');
        return redirect()->route('aboutUs.index');
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
