<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubHeading extends Model
{
    use HasFactory;

    public function heading()
    {
        return $this->belongsTo(Heading::class);
    }

    public function video()
    {
        return $this->hasOne(CourseVideo::class , 'video_id');
    }

}
