<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'tagline', 'short_description', 'icon', 'sort_order', 'is_active'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
