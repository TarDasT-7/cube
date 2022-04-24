<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseQuestion extends Model
{
    use HasFactory;

    public function faq()
    {
        return $this->belongsTo(Faq::class , 'faq_id');
    }
}
