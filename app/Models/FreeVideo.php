<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeVideo extends Model
{
    use HasFactory;

    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function files()
    {
        return $this->hasMany(FreevideoFile::class , 'freevideo_id');
    }
}
