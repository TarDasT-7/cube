<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::all()->last();
        if(!is_null($footer))
        {
            $rel = 'update';

        }else
        {
            $rel = 'create';
        }

        return view('admin.pages.cubeTeam.footer.index' , compact(['rel' , 'footer']));
    }

    public function create(){

    }

    public function store(Request $request)
    {
        $request->validate([
            'description'=>'required|max:5000',
            'file'=>'required|max:2000',
        ]);

        $footer=new Footer();
        $footer->description=$request->input('description');

        if($file=$request->file('file')) {

            $extension ='.'.$file->extension();
            $path='images/footer';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='cube-'. time() . $extension;
            $file->move($path, $name);
            $footer->image = $name;
        }

        $footer->save();

        session()->flash('add','عملیات با موفقیت انجام شد');
        return redirect()->back();

    }

    public function edit($id)
    {
        $footer=Footer::find($id);
        return view('admin.pages.footer.editfooter')->with('footer',$footer);

    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'description'=>'required|max:5000',
            'file'=>'max:2000',
        ]);
        
        $footer=Footer::find($id);
        $footer->description=$request->input('description');
        
        if($file=$request->file('file')) {

            $rm="images/footer/$footer->image";
            File::delete($rm);

            $extension ='.'.$file->extension();
            $path='images/footer';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='cube-'. time() . $extension;
            $file->move($path, $name);
            $footer->image = $name;
        }

        $footer->save();

        session()->flash('add','عملیات با موفقیت انجام شد');
        return redirect()->back();
    }

    public function destroy($id){

    }

}
