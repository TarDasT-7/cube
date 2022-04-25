<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodAudio extends Model
{
    use HasFactory;

    public function podcast(){
    
        return $this->belongsTo(Podcast::class);
    }

    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class , 'comment_podcasts' , 'part_id');
    }

}


