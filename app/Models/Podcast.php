<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    public function pod_categories(){
        return $this->belongsToMany(PodCategory::class);
    }
    public function pod_audio(){
        return $this->hasMany(PodAudio::class);
    }
    public function speaker(){
        return $this->belongsTo(Speaker::class);
    }
    public function podcast_views()
    {
        return $this->hasMany(PodcastView::class);
    }
}
