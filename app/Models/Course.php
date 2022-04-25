<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function categoryC()
    {
        return $this->belongsTo(Category::class , 'category');
    }
    public function subcate()
    {
        return $this->belongsTo(SubCategory::class , 'sub_category');
    }

    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }
    public function course_videos()
    {
        return $this->hasMany(CourseVideo::class);
    }
    public function course_views()
    {
        return $this->hasMany(CourseView::class);
    }

    public function headings()
    {
        return $this->hasMany(Heading::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Faq::class , 'course_questions' , 'faq_id');
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class , 'comment_courses');
    }
}
