<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function question_category()
    {
        return $this->belongsTo(QuestionCategory::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class , 'course_questions' , 'course_id');
    }
}
