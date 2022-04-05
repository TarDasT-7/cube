<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseVideo;
use App\Models\Footer;
use App\Models\Podcast;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Slider;


class IndexPagesController extends Controller
{
    public function home()
    {
        $user=null;
        if(Auth::check()){
            $user=Auth::user();
        }
        $sliders=Slider::all();
        // $podcasts=Podcast::all();
        // $product_categories=ProductCategory::all();
        // $blogs=Blog::orderBy('created_at')->latest()->get();
        // $products=Product::orderBy('created_at')->latest()->get();

        // $pers=Course::orderBy('created_at')->latest()->get();
        // $count=Count($pers);
        // $courses=[];
        // $i=0;
        // for ($i ;$i<$count; $i++){
        //     if ($i>2){
        //         break;
        //     }else
        //         $courses[$i]=$pers[$i];
        // }
        // $videos=[];
        // $i=0;
        // foreach ( $courses as $course){
        //     foreach ($course->course_videos as $video){
        //         if ($video->show_id==0){
        //             $videos[$i]=$video;
        //         }
        //         $i++;
        //     }
        // }
        return view('site.pages.index.index' , compact(['user','sliders']));

    }


    
}
