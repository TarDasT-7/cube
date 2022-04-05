<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionCategory;
use Illuminate\Http\Request;

class QuestionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=QuestionCategory::all();
        return view('admin.pages.questioncategory.indexcategory')->with('categories',$categories);
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
        $category = new QuestionCategory();
        $category->name = $request->input('name');
        $category->save();


        $categories=QuestionCategory::all();
        session()->flash('add','دسته بندی با موفقیت ایجاد شد');
        return redirect('admin/questioncategory')->with('categories',$categories);

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
        $category=QuestionCategory::find($id);
        return view('admin.pages.questioncategory.editcategory')->with('category',$category);
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
        $category=QuestionCategory::find($id);
        $category->name=$request->input('name');
        $category->save();
        $categories=QuestionCategory::all();
        session()->flash('update','دسته بندی با موفقیت به روز رسانی شد');
        return redirect('admin/questioncategory')->with('categories',$categories);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=QuestionCategory::find($id);
        $category->delete();

        $categories=QuestionCategory::all();
        session()->flash('delete','دسته بندی با موفقیت حذف شد');
        return redirect('admin/questioncategory')->with('categories',$categories);
    }
}
