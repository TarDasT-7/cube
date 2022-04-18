<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\FreeVideo;
use App\Models\Course;
use App\Models\Category;
use App\Models\Podcast;
use App\Models\Product;
use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\Contact_Us;
use App\Models\User;
use App\Models\Faq;


class IndexPagesController extends Controller
{
    public function home()
    {
        $user=null;
        if(Auth::check()){
            $user=Auth::user();
        }
        $sliders=Slider::all();
        $podcasts=Podcast::orderBy('id' , 'DESC')->take(8)->get();
        $blogs=Blog::orderBy('id' , 'DESC')->take(2)->get();

        return view('site.pages.index.index' , compact(['user','sliders','podcasts','blogs']));
    }

    public function podList()
    {
        $podcasts=Podcast::all()->sortByDesc('id');
        $categories = Category::where('related' , 'پادکست')->get();

        return view('site.pages.podcast.list' , compact(['podcasts' , 'categories']));
    }

    public function podCol($id)
    {
        $podcast=Podcast::find($id);

        return view('site.pages.podcast.collection' , compact(['podcast']));
    }

    public function blogList($href)
    {
        if($href == 'blog')
        {
            $blogs=Blog::all();
            $categories = Category::where('related' , 'بلاگ')->orWhere('related' , 'روانشناسی')->get();
            
        }elseif($href == 'psychology')
        {
            $blogs=Blog::where('related' , 'روانشناسی')->get();
            $categories = Category::where('related' , 'روانشناسی')->get();
        }

        return view('site.pages.blog.list' , compact(['blogs' , 'categories' , 'href']));
    }

    public function fvList()
    {
        $videos=FreeVideo::all()->sortByDesc('id');
        $categories = Category::where('related' , 'محصولات')->orWhere('related' , 'دوره')->get();

        return view('site.pages.freeVideo.list' , compact(['videos' , 'categories']));

    }

    public function about()
    {
        $abouts=AboutUs::all();
        $users=User::where('team' , 1)->get();
        return view('site.pages.about_us.index' , compact(['abouts' , 'users']));
    }

    public function contact()
    {
        $contact=Contact_Us::all()->first();
        return view('site.pages.contact_us.index' , compact(['contact']));

    }

    public function faq()
    {
        $questions=Faq::where('position' , 'faq')->get();
        return view('site.pages.question.question' , compact(['questions']));

    }
    
}
