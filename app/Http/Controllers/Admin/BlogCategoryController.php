<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=BlogCategory::all();
        return view('admin.pages.blogcategory.indexblogcategory')->with('categories',$categories);
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
        $category = new BlogCategory();
        $category->name = $request->input('name');
        $category->save();
        $categories=BlogCategory::all();
        session()->flash('add','دسته بندی با موفقیت ایجاد شد');
        return redirect('admin/blogcategory')->with('categories',$categories);

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
        $category=BlogCategory::find($id);
        return view('admin.pages.blogcategory.editblogcategory')->with('category',$category);
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
        $category=BlogCategory::find($id);
        $category->name=$request->input('name');
        $category->save();
        $categories=BlogCategory::all();
        session()->flash('update','دسته بندی با موفقیت بروزرسانی شد');
        return redirect('admin/blogcategory')->with('categories',$categories);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=BlogCategory::find($id);
        $category->delete();

        $categories=BlogCategory::all();
        session()->flash('delete','دسته بندی با موفقیت حذف شد');
        return redirect('admin/blogcategory')->with('categories',$categories);
    }
}
