<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Question;
use Illuminate\Http\Request;

class SiteBlogController extends Controller
{
    public function index()
    {
        $blogs=Blog::all();
        function limitWord($string, $limit){
            $words = explode(" ",$string);
            $output = implode(" ",array_splice($words,0,$limit));
            return $output;
        }

        return view('site.pages.blog.blog')->with('blogs',$blogs);
    }



    public function show($id)
    {

        $blog=Blog::find($id);
        $comments=Comment::all()->where('sub_category', $id)->where('category', 'blog');
        return view('site.pages.blog.blog-det')->with('blog',$blog)->with('comments',$comments);
    }
}
