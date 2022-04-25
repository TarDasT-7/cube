<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class , 'comment_courses');
    }

    public function podcasts()
    {
        return $this->belongsToMany(PodAudio::class , 'comment_podcasts' ,'comment_id');
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class , 'comment_blogs');
    }

}
