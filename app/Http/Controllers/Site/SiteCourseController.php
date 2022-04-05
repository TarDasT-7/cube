<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Accounting;
use App\Models\Comment;
use App\Models\Course;
use App\Models\CourseView;
use App\Models\CourseCategory;
use App\Models\CourseVideo;
use App\Models\Plan;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        $categories=CourseCategory::all();
        return view('site.pages.course.course')->with('courses',$courses)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $course=Course::find($id);
        $i=0;
        $videos=[];
        foreach ($course->course_videos as $video){
            if ($video->show_id==0){
                $videos[$i]=$video;
            }
            $i++;
        }
        $questions=Question::all();
        $files=CourseVideo::all()->where('course_id', $id)->sortBy('show_id');
        $courses=Course::all();
        $comments=Comment::all()->where('sub_category', $id)->where('category', 'course');
        $score=0;
        foreach ($comments as $x) {
            $score =+$x->score;
        }


      /*checking page views */

        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];

        $i=0;
        $views=$course->course_views;
        foreach ($views as $view){
            if ($view->Ip==$ip){
             $i++;
            }
        }
        if ($i==0){
            $record=new CourseView();
            $record->course_Id=$id;
            $record->ip=$ip;
            $record->save();
        }
        /*end of checking page views*/

        $i=0;
        if (Auth::check()) {
            $accounts = Accounting::all()->where('user_id', Auth::id())->where('category', 'پکیج')->where('condition', 1);
            foreach ($accounts as $acc) {
                $date_f = date_timestamp_get($acc->updated_at);
                $date_l = date_timestamp_get(now());
                $pack = Plan::all()->where('good_id', $acc->good_id)->last();
                $credit = ($pack->plan_category_id) * 3600 * 24;
                $time = $date_l - $date_f;
                if ($credit > $time) {
                    $i++;
                }
            }


            $account = Accounting::all()->where('user_id', Auth::id())->where('good_id', $course->good_id)->last();
            if ($account){
                if ($account->condition == 1) {
                    $i++;
                }
            }

        }
        return view('site.pages.course.course-det')->with('i',$i)->with('videos',$videos)->with('questions',$questions)->with('files',$files)->with('courses',$courses)->with('course',$course)->with('score',$score)->with('comments',$comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
