<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function blog_categories()
    {
        return $this->belongsToMany(BlogCategory::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function blog_views()
    {
        return $this->hasMany(BlogView::class);
    }
}
