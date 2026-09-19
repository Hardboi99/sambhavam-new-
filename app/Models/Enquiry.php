<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'course_title', 'course_id', 'message', 'status', 'notes',
    ];
}