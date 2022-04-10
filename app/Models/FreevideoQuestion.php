<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreevideoQuestion extends Model
{
    use HasFactory;

    public function faq()
    {
        return $this->belongsTo(Faq::class , 'question_id');
    }
}
