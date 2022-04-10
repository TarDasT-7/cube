<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PodAudio;

class ShowController extends Controller
{
    
    public function podPlay($id)
    {
        $part=PodAudio::find($id);
        $similars=$part->podcast->files->where('id' , '!=' , $part->id);
        return view('site.pages.podcast.show' , compact(['part' , 'similars']));
    }

}
