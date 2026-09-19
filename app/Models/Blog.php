<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'image', 'content', 'published_date',
        'meta_title', 'meta_description', 'meta_keywords', 'is_active',
    ];
}