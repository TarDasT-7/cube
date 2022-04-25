<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PodAudio;
use App\Models\Blog;
use App\Models\FreeVideo;
use App\Models\FreevideoQuestion;
use App\Models\CourseQuestion;
use App\Models\Course;
use App\Models\Podcast;
use Hekmatinasser\Verta\Verta;

class ShowController extends Controller
{
    
    public function podPlay($id)
    {
        $part=PodAudio::find($id);
        $tags=explode('&&&',$part->tags);
        $similars=$part->podcast->files->where('id' , '!=' , $part->id);
        return view('site.pages.podcast.show' , compact(['part' , 'similars' , 'tags']));
    }

    public function blogShow($id)
    {
        $blog=Blog::find($id);
        $tags=explode('&&&',$blog->tags);
        return view('site.pages.blog.show' , compact(['blog' , 'tags']));
    }

    public function fvShow($id)
    {
        $video=FreeVideo::find($id);
        $similars=FreeVideo::where('category_id' , $video->category_id)->where('id' ,'!=', $video->id)->orderBy('id' , 'DESC')->get();
        $questions=FreevideoQuestion::where('video_id' , $id)->get();
        return view('site.pages.freeVideo.show' , compact(['video','similars','questions']));

    }

    public function courseShow($id)
    {
        $course=Course::find($id);
        $questions=CourseQuestion::where('course_id' , $id)->get();
        $similars=Course::where('category' , $course->category)->where('id' , '!=' , $id)->take(7)->get();
        return view('site.pages.course.show' , compact(['course' , 'questions' , 'similars']));

    }


    public function filtering(Request $request , $location)
    {
        // dd($location , $request->all());
        if($category = $request->category);
        if($id=$request->id);
        else
        $id=null;
        $popular = $request->popular;

        if(!is_null($request->search))
        $search = $request->search;
        else
        $search = null;

        function filtring($location ,$category ,$popular ,$search ,$id)
        {
            $index=0;
            $items=array();
            $date=array();
            function showDate($date){$date=Verta::instance($date)->format('Y/m/d');$exDate=explode('/',$date);switch ((int)$exDate[1]){case 1:$exDate[1] = 'فروردین';break;case 2:$exDate[1] = 'اردیبهشت';break;case 3:$exDate[1] = 'خرداد';break;case 4:$exDate[1] = 'تیر';break;case 5:$exDate[1] = 'مرداد';break;case 6:$exDate[1] = 'شهریور';break;case 7:$exDate[1] = 'مهر';break;case 8:$exDate[1] = 'ابان';break;case 9:$exDate[1] = 'آذر';break;case 10:$exDate[1] = 'دی';break;case 11:$exDate[1] = 'بهمن';break;case 12:$exDate[1] = 'اسفند';break;}return $exDate;}

            switch ($location) {
                case 'podList':
    
                    if($category == 'all' && $popular == 'all' && $search != null)
                    {
                        $items=Podcast::where('title' , 'LIKE' , '%' . $search . '%')->get();

                    }else
                    {
                        if($category != 'all' && $popular == 'all' && $search != null)
                        {
                            $items=Podcast::where('title' , 'LIKE' , '%' . $search . '%');
                            $items=$items->where('category_id' , $category)->get();
                        }
                        elseif($category != 'all' && $popular == 'all' && $search == null)
                        {
                            $items=Podcast::where('category_id' , $category)->get();
                        }
                        elseif($category == 'all' && $popular == 'all' && $search == null)
                        {
                            $items=Podcast::all();
                        }
                    }

                    return $items;
                    break;


                case 'podCol':
                    if($popular == 'all' && $search != null)
                    {
                        $itemsww=PodAudio::where('title' , 'LIKE' , '%' . $search . '%')->orWhere('name' , 'LIKE' , '%' . $search . '%')->get();
                        foreach ($itemsww as $key=>$item) {
                            if($item->podcast_id == $id)
                            {
                                $items[$index]['item']=$item;
                                $items[$index]['date']=showDate($item->created_at);
                                $index++;
                            }
                        }
                        return $items;

                    }else
                    {
                        if($popular == 'all' && $search == null)
                        {
                            $itemsww=PodAudio::where('podcast_id' , $id)->get();

                            foreach ($itemsww as $key=>$item) {

                                $items[$index]['item']=$item;
                                $items[$index]['date']=showDate($item->created_at);
                                $index++;
                                
                            }
                            
                        }
                        return $items;
                    }
                    break;
                
                case 'blog':

                    if($category == 'all' && $popular == 'all' && $search != null)
                    {
                        $itemsww=Blog::where('title' , 'LIKE' , '%' . $search . '%')->orWhere('desc' , 'LIKE' , '%' . $search . '%')->get();
                        foreach ($itemsww as $key=>$item) {

                            $items[$index]['item']=$item->load('category');
                            $items[$index]['date']=showDate($item->created_at);
                            $index++;
                            
                        }

                    }else
                    {
                        if($category != 'all' && $popular == 'all' && $search != null)
                        {
                            $itemsww=Blog::where('title' , 'LIKE' , '%' . $search . '%')->orWhere('desc' , 'LIKE' , '%' . $search . '%');
                            $itemsww=$items->where('category_id' , $category)->get();

                            foreach ($itemsww as $key=>$item) {

                                $items[$index]['item']=$item->load('category');
                                $items[$index]['date']=showDate($item->created_at);
                                $index++;
                                
                            }
                        }
                        elseif($category != 'all' && $popular == 'all' && $search == null)
                        {
                            $itemsww=Blog::where('category_id' , $category)->get();

                            foreach ($itemsww as $key=>$item) {

                                $items[$index]['item']=$item->load('category');
                                $items[$index]['date']=showDate($item->created_at);
                                $index++;
                                
                            }
                        }
                        elseif($category == 'all' && $popular == 'all' && $search == null)
                        {
                            $itemsww=Blog::all();

                            foreach ($itemsww as $key=>$item) {

                                $items[$index]['item']=$item->load('category');
                                $items[$index]['date']=showDate($item->created_at);
                                $index++;
                                
                            }
                        }
                    }

                    return $items;
                    break;
    

                default:
                    # code...
                    break;
            }

            

        }

        
        $items = filtring($location ,$category ,$popular ,$search , $id);
        return $items;

    }


}
