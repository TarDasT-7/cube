<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

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
        return view('admin.pages.footer.indexfooter')->with('footer',$footer);
    }

    public function create(){

    }

    public function store(Request $request)
    {
        $footer=new Footer();
        $footer->description=$request->input('description');
        $footer->save();
        return redirect('admin/footer');

    }

    public function edit($id)
    {
        $footer=Footer::find($id);
        return view('admin.pages.footer.editfooter')->with('footer',$footer);

    }

    public function update(Request $request,$id)
    {
        $footer=Footer::find($id);
        $footer->description=$request->input('description');
        $footer->save();
        return redirect('admin/footer');
    }

    public function destroy($id){

    }

}
