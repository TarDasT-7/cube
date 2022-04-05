<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact_Us;
use App\Models\Course;
use App\Models\CourseVideo;
use App\Models\PodAudio;
use App\Models\Podcast;
use App\Models\Product;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request )
    {
       
        $comment = new Comment();
        $comment->score = $request->input('whatever1');
        $comment->email = $request->input('email');
        if (Auth::check()) {
            $comment->user_id = Auth::id();
            $comment->name = Auth::user()->name;
        } else{
            $comment->name = $request->input('name');
        }
        $comment->desc = $request->input('desc');
        if ($request->input('course')) {
            $comment->category = 'course';
            $comment->sub_category = $request->input('course');
        }
        if ($request->input('product')) {
            $comment->category = 'product';
            $comment->sub_category = $request->input('product');
        }
        if ($request->input('podcast')) {
            $comment->category = 'podcast';
            $comment->sub_category = $request->input('podcast');
        }
        if ($request->input('contact')) {
            $comment->category = 'contact';
        }
        if ($request->input('blog')) {
            $comment->category = 'blog';
            $comment->sub_category = $request->input('blog');
        }
        $comment->save();
        if ( $request->input('course')) {
            $course=Course::find( $request->input('course'));
            $questions=Question::all();
            $files=CourseVideo::all()->where('course_id',  $request->input('course'))->sortBy('show_id');
            $courses=Course::all();
            $comments=Comment::all()->where('sub_category',  $request->input('course'))->where('category', 'course');
            $score=0;
            foreach ($comments as $x) {
                $score =+$x->score;
            }
            return view('site.pages.course.course-det')->with('questions',$questions)->with('files',$files)->with('courses',$courses)->with('course',$course)->with('score',$score)->with('comments',$comments);

        }
        if ( $request->input('product')) {
            $product=Product::find($request->input('product'));
            $products=Product::all()->where('product_sub_category',$product->product_sub_category);
            $comments=Comment::all()->where('category','product')->where('sub_category', $request->input('product'));
            $score=0;
            foreach ($comments as $x) {
                $score = +$x->score;
            }
            $videos=$product->product_videos->where('show_id',0);
            return view('site.pages.product.product-det')->with('products',$products)->with('score',$score)->with('product',$product)->with('videos',$videos)->with('comments',$comments);
        }
        if ( $request->input('podcast')) {
            $audio=PodAudio::find($request->input('podcast'));
            $podcast=$audio->poscast;
            $comments=Comment::all()->where('sub_category', $request->input('podcast'))->where('category', 'podcast');
            return view('site.pages.podcast.audio_det')->with('audio',$audio)->with('podcast',$podcast)->with('comments',$comments);
        }
        if ($request->input('contact')) {
            $contact = Contact_Us::all()->last();
            return redirect('contact_us')->with('contact', $contact);
        }
        if ($request->input('blog')) {
            $blog=Blog::find($request->input('blog'));
            $comments=Comment::all()->where('sub_category', $request->input('blog'))->where('category', 'blog');
            return view('site.pages.blog.blog-det')->with('blog',$blog)->with('comments',$comments);
        }



    }
}
