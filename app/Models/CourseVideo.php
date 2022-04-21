<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseVideo extends Model
{
    use HasFactory;
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function sub()
    {
        return $this->belongsTo(SubHeading::class , 'heading_id');
    }

}
