<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function course_sub_category()
    {
        return $this->belongsTo(CourseSubCategory::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function course_videos()
    {
        return $this->hasMany(CourseVideo::class);
    }
    public function course_views()
    {
        return $this->hasMany(CourseView::class);
    }

}
