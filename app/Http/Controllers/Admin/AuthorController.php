<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
{
    $authors=Author::all();

    return view('admin.pages.author.indexauthor')->with('authors',$authors);
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
        'specialty'=> "required|max:255",
    ]);
    $author = new Author();
    $author->name = $request->input('name');
    $author->specialty = $request->input('specialty');
    $author->save();
    $authors=Author::all();
    session()->flash('add','نویسنده با موفقیت معرفی شد');
    return redirect('admin/author')->with('authors',$authors);

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
    $author=Author::find($id);
    return view('admin.pages.author.editauthor')->with('author',$author);
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
        'specialty'=> "required|max:255",
    ]);
    $author=Author::find($id);
    $author->name=$request->input('name');
    $author->specialty = $request->input('specialty');
    $author->save();
    $authors=Author::all();
    session()->flash('update','مشخصات نویسنده با موفقیت به روزرسانی شد');
    return redirect('admin/author')->with('authors',$authors);
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $author=Author::find($id);
    $author->delete();
    $authors=Author::all();
    session()->flash('update','نویسنده با موفقیت حذف شد');
    return redirect('admin/author')->with('authors',$authors);
}
}
