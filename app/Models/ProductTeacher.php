<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTeacher extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
