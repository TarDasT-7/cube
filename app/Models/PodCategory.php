<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodCategory extends Model
{
    use HasFactory;
    public function podcasts(){
        return $this->belongsToMany(Podcast::class);
    }
}
