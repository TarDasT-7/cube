<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseVideo;
use App\Models\Footer;
use App\Models\Podcast;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Slider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(){

        $user=null;
        if(Auth::check()){
            $user=Auth::user();
        }
        $sliders=Slider::all();
        $podcasts=Podcast::all();
        $product_categories=ProductCategory::all();
        $blogs=Blog::orderBy('created_at')->latest()->get();
        $products=Product::orderBy('created_at')->latest()->get();

        $pers=Course::orderBy('created_at')->latest()->get();
        $count=Count($pers);
        $courses=[];
        $i=0;
        for ($i ;$i<$count; $i++){
            if ($i>2){
                break;
            }else
                $courses[$i]=$pers[$i];
        }
        $videos=[];
        $i=0;
        foreach ( $courses as $course){
            foreach ($course->course_videos as $video){
                if ($video->show_id==0){
                    $videos[$i]=$video;
                }
                $i++;
            }
        }
        return view('site.pages.index.index')->with('videos',$videos)->with('courses',$courses)->with('products',$products)->with('product_categories',$product_categories)->with("blogs",$blogs)->with('user',$user)->with('sliders',$sliders)->with('podcasts',$podcasts);
    }

    public function enter()
    {
        return view('auth.register');
    }
}
