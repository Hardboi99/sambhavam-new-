<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    use HasFactory;

    protected $fillable = [
    'category_id', 'title', 'slug', 'description', 'curriculum', 'key_features',
    'eligibility_fees', 'duration', 'mode', 'image', 'sort_order', 'price', 'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}