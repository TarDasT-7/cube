<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Producer;
use App\Models\Blog;
use App\Models\Category;
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
        $producers=Producer::where('blog' , 1)->get();
        $categories=Category::where('related' , 'بلاگ')->get();
        return view('admin.pages.ourProduct.blog.index', compact(['blogs','categories' , 'producers']));
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
            'title'=> "required|max:250",
            'related'=> "required|max:250",
            'category'=> "required",
            'producer'=> "required|numeric",
            'description'=> "required",
            // 'image'=> "required| dimensions:max_width=680,max_height=470,min_width=580,min_height=370",
            'image'=> "required|max:1000",
        ]);

        $blog=new Blog();
        $blog->title=$request->input('title');
        $blog->related=$request->input('related');
        $blog->producer_id=$request->input('producer');
        $blog->category_id=$request->input('category');
        $blog->desc=$request->input('description');


        if($file=$request->file('image')) {

            $extension ='.'.$file->extension();
            $path='images/blogs';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='blog-'. time() . $extension;
            $file->move($path, $name);
            $blog->image = $name;
        }

        $blog->save();
        session()->flash('add','مقاله با موفقیت معرفی شد');
        return redirect()->back();

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
            'title'=> "required|max:250",
            'related'=> "required|max:250",
            'category'=> "required",
            'producer'=> "required|numeric",
            'description'=> "required",
            // 'image'=> "required| dimensions:max_width=680,max_height=470,min_width=580,min_height=370",
            'image'=> "max:1000",
        ]);

        $blog=Blog::find($id);
        $blog->title=$request->input('title');
        $blog->related=$request->input('related');
        $blog->producer_id=$request->input('producer');
        $blog->category_id=$request->input('category');
        $blog->desc=$request->input('description');


        if($file=$request->file('image')) {

            $rm="images/blogs/$blog->image";
            File::delete($rm);

            $extension ='.'.$file->extension();
            $path='images/blogs';
            
            if(!file_exists($path))
            {
                File::makeDirectory($path , 0775 , true);
            }

            $name ='blog-'. time() . $extension;
            $file->move($path, $name);
            $blog->image = $name;
        }

        $blog->save();
        session()->flash('add','مقاله با موفقیت ویرایش شد');
        return redirect()->back();
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
        
        $rm="images/blogs/$blog->image";
        File::delete($rm);

        foreach($blog->articles as $article)
        {
            $rm="images/blogs/$blog->id/$blog->image";
            File::delete($rm);
            $article->delete();
        
        }

        $blog->delete();
        session()->flash('delete','مقاله با موفقیت حذف شد');
        return redirect()->back();
    }
}
