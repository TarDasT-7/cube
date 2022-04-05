<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PodCategory;
use Illuminate\Http\Request;

class PodCastCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=PodCategory::all();
        return view('admin.pages.podcategory.indexpodcategory')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'name'=> "required|max:255",
        ]);
        $category = new PodCategory();
        $category->name = $request->input('name');
        $category->save();


        $categories=PodCategory::all();
        session()->flash('add','دسته بندی با موفقیت اضافه شد');
        return redirect('admin/podcategory')->with('categories',$categories);

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
        $category=PodCategory::find($id);
        return view('admin.pages.podcategory.editpodcategory')->with('category',$category);
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
            'name'=> "required|max:255",
        ]);
        $category=PodCategory::find($id);
        $category->name=$request->input('name');
        $category->save();
        $categories=PodCategory::all();
        session()->flash('update','دسته بندی با موفقیت به روزرسانی شد');
        return redirect('admin/podcategory')->with('categories',$categories);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=PodCategory::find($id);
        $category->delete();

        $categories=PodCategory::all();
        session()->flash('delete','دسته بندی با موفقیت حذف شد');
        return redirect('admin/podcategory')->with('categories',$categories);
    }
}
