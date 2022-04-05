<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::all();
        $authors=Author::all();
        return view('admin.pages.blog.indexblog')->with('blogs',$blogs)->with('authors',$authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=BlogCategory::all();
        $authors=Author::all();
        return view('admin.pages.blog.craeteblog')->with('categories',$categories)->with('authors',$authors);
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
            'author'=> "required|numeric",
            'description'=> "required",
            'category'=> "required",
            'image'=> "required| dimensions:max_width=680,max_height=470,min_width=580,min_height=370",
        ]);
        $blog=new Blog();
        $blog->title=$request->input('title');
        $blog->author_id=$request->input('author');
        if($file=$request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $blog->image = $name;
        }
        $blog->desc=$request->input('description');
        $blog->save();
        $blog->blog_categories()->attach($request->input('category'));
        $blogs=Blog::all();
        session()->flash('add','مقاله با موفقیت معرفی شد');
        return redirect('admin/blog')->with('blogs',$blogs);

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
        $blog=Blog::find($id);
        $categories=BlogCategory::all();
        $authors=Author::all();
        return view('admin.pages.blog.editblog')->with('categories',$categories)->with('blog',$blog)->with('authors',$authors);
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
            'author'=> "required|numeric",
            'description'=> "required",
            'category'=> "required",
        ]);
        $blog=Blog::find($id);
        $blog->title = $request->input('title');
        $request->validate([
            'image'=> "required| dimensions:max_width=680,max_height=470,min_width=580,min_height=370",
        ]);
        if($request->input('author')) {
            $blog->author_id = $request->input('author');
        }
        if($file=$request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $blog->image = $name;
        }
        if($request->input('description')) {
            $blog->desc = $request->input('description');
        }
        $blog->save();
        if ($request->input('category')) {
            $blog->blog_categories()->sync($request->input('category'));
        }
        $blogs=Blog::all();
        session()->flash('update','مقاله با موفقیت به روزرسانی شد');
        return redirect('admin/blog')->with('blogs',$blogs);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::find($id);
        $blog->blog_categories()->detach();
        $blog->delete();
        $blogs=Blog::all();
        session()->flash('delete','مقاله با موفقیت حذف شد');
        return redirect('admin/blog')->with('blogs',$blogs);
    }
}
