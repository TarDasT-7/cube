<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PodAudio;
use App\Models\Blog;
use App\Models\FreeVideo;
use App\Models\FreevideoQuestion;

class ShowController extends Controller
{
    
    public function podPlay($id)
    {
        $part=PodAudio::find($id);
        $similars=$part->podcast->files->where('id' , '!=' , $part->id);
        return view('site.pages.podcast.show' , compact(['part' , 'similars']));
    }

    public function blogShow($id)
    {
        $blog=Blog::find($id);
        return view('site.pages.blog.show' , compact(['blog']));
    }

    public function fvShow($id)
    {
        $video=FreeVideo::find($id);
        $similars=FreeVideo::where('category_id' , $video->category_id)->where('id' ,'!=', $video->id)->orderBy('id' , 'DESC')->get();
        $questions=FreevideoQuestion::where('video_id' , $id)->get();
        return view('site.pages.freeVideo.show' , compact(['video','similars','questions']));

    }

}
