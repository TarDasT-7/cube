<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Producer;
use App\Models\Blog;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
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
        $tags=Tag::all();
        $categories=Category::where('related' , 'بلاگ')->orWhere('related' , 'روانشناسی')->get();
        return view('admin.pages.ourProduct.blog.index', compact(['blogs','categories' , 'producers','tags']));
    }

    public function article($id)
    {
        // $blog=Blog::find($id);
        // $articles=$blog->articles;
        // return view('admin.pages.ourProduct.blog.parts', compact(['blog' , 'articles']));

        $rel ='create';
        $blog = Blog::find($id);
        $producers=Producer::where('blog',1)->get();

        return view('admin.pages.ourProduct.blog.crtorupd' , compact(['blog','producers','rel']));

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

    public function createItem(Request $request)
    {
        $blog = Blog::find($request->id);
        $producers=Producer::where('blog',1)->get();
        $rel ='create';
        return view('admin.pages.ourProduct.blog.createOrUpdatePart' , compact(['blog','producers','rel']));
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
            'image'=> "required|max:1500",
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

        if($request->tags)
        {
            if(in_array('null' , $request->tags))
            {
                $blog->tags=null;
            }else
            {
                $tags='';
                foreach ($request->tags as $key => $tag) {
                    $tags .= $tag.'&&&';
                }
                $blog->tags=$tags;
            }
        }

        $blog->save();
        session()->flash('add','مقاله با موفقیت معرفی شد');
        return redirect()->back();
    }

    public function storeItem(Request $request)
    {
        $request->validate([
            'description'=> "required|max:55000",
            'id'=> "required",
        ]);

        $part=new Article();
        $part->blog_id = $request->id;
        $part->desc = $request->description;
        $part->save();

        session()->flash('add','مقاله با موفقیت معرفی شد');
        return redirect()->route('blog.index');
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

    public function editItem($id)
    {
        $item=Article::find($id);
        $rel ='update';

        return view('admin.pages.ourProduct.blog.crtorupd' , compact(['item','rel']));
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
            'image'=> "max:1500",
            'tags.*'=> "max:250",
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

        if($request->tags)
        {
            $blog->tags=null;
            
            if(in_array('null' , $request->tags))
            {
                $blog->tags=null;
            }else
            {
                $tags='';
                foreach ($request->tags as $key => $tag) {
                    $tags .= $tag.'&&&';
                }
                $blog->tags=$tags;
            }
        }

        $blog->save();
        session()->flash('add','مقاله با موفقیت ویرایش شد');
        return redirect()->back();
    }


    public function updateItem(Request $request, $id)
    {
        $request->validate([
            'description'=> "required|max:55000",
        ]);

        $part=Article::find($id);

        $part->desc = $request->description;

        $part->save();

        session()->flash('add','مقاله با موفقیت ویرایش شد');
        return redirect()->route('blog.index');
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

    public function destroyItem($id)
    {
        $part=Article::find($id);
        $pid=$part->blog_id;
        $rm="images/blogs/$pid/$part->image";
        File::delete($rm);
        
        $part->delete();

        session()->flash('add','مقاله با موفقیت حذف شد');
        return redirect()->back();
    }
}
