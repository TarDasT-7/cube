<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseFilterController extends Controller
{
    public function filter(Request $request )
    {
        $i = 0;
        $courses = [];

        /* Checking price*/
        if ($request->min_price) {
            $min_price = $request->min_price;
        } else {
            $min_price = 0;
        }

        if ($request->max_price) {
            $max_price = $request->max_price;
        } else {
            $max_price = 10000000;
        }


        /* Checking category*/
        if ($request->category) {
            $category = CourseCategory::find($request->category);

            foreach ($category->courses as $course) {
                if ($course->off_price>=$min_price && $course->off_price<=$max_price) {
                    $courses[$i] = $course;
                    $i++;
                }
            }
        }

        /* Checking level*/
        if ($request->level) {
            foreach ($request->level as $level) {
                $levels = Course::all()->where('level', $level)->whereBetween('off_price', [$min_price,$max_price]);
                foreach ($levels as $course) {
                    $courses[$i] = $course;
                    $i++;
                }
            }
        }

        /* Checking title*/
        if ($request->title) {
            $count=count($courses)-1;
            $courses=array_splice($courses,0,$count);
            $courses=Course::all()->where('title', $request->title);
        }

        /*freshin courses*/
        $count=count($courses);
        $x=0; $y=0;
        foreach($courses as $first_course) {
            if ($first_course){
                foreach ($courses as $sec_course) {
                    if ($sec_course){
                        if ($y != $x && $first_course->id == $sec_course->id) {
                             $courses[$y] = null;

                        }
                    }
                    $y++;

                }
            }
            $x++;
        }
        $m=0;
        foreach ($courses as$course){
            if (!$course){
                unset($courses[$m]);
            }
            $m++;
        }
        $categories=CourseCategory::all();
        return view('site.pages.course.course')->with('courses',$courses)->with('categories',$categories);
    }


}
