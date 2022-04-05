<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodcastView extends Model
{
    use HasFactory;

    public function podcast()
    {
        return $this->belongsTo(Podcast::class);
    }
}
