<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    public function course_sub_categories()
    {
        return $this->hasMany(CourseSubCategory::class);
    }

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
}
