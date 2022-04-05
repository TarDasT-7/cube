<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\PodAudio;
use App\Models\Podcast;
use App\Models\PodcastView;
use Illuminate\Http\Request;

class SitePodCastController extends Controller
{
        public function index()
    {
        $podcasts=Podcast::all();
        return view('site.pages.podcast.podcast')->with('podcasts',$podcasts);
    }
    public function show($id)
    {
        $podcast=Podcast::find($id);

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
        $views=$podcast->podcast_views;
        foreach ($views as $view){
            if ($view->Ip==$ip){
                $i++;
            }
        }
        if ($i==0){
            $record=new PodcastView();
            $record->podcast_Id=$id;
            $record->ip=$ip;
            $record->save();
        }
        /*end of checking page views*/

        return view('site.pages.podcast.podcast_det')->with('podcast',$podcast);
    }

    public function audio($id)
    {
        $audio=PodAudio::find($id);
        $podcast=$audio->poscast;
        $comments=Comment::all()->where('sub_category', $id)->where('category', 'podcast');
        return view('site.pages.podcast.audio_det')->with('audio',$audio)->with('podcast',$podcast)->with('comments',$comments);
    }
}
