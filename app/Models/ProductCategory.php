<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    public function product_sub_categories()
    {
        return $this->hasMany(ProductSubCategory::class);
    }
    public function product_teachers()
    {
        return $this->hasMany(ProductTeacher::class);
    }
}
