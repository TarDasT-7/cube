<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function product_sub_category()
    {
        return $this->belongsTo(ProductSubCategory::class);
    }
    public function product_teacher()
    {
        return $this->belongsTo(ProductTeacher::class);
    }
    public function Product_videos()
    {
        return $this->hasMany(ProductVideo::class);
    }
    public function product_views()
    {
        return $this->hasMany(ProductView::class);
    }

}
