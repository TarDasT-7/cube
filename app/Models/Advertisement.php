<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    public function advertisement_images()
    {
        return $this->hasMany(AdvertisementImage::class);
    }
    public function advertisement_views()
    {
        return $this->hasMany(AdvertisementView::class);
    }
}
