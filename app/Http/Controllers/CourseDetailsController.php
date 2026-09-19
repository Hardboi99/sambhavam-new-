<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseDetailsController extends Controller
{
    public function coursedetails()
    {
        $slug = request()->query('course', '');

        $course = Course::with('category')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->first();

        return view('course-details', compact('course', 'slug'));
    }
}
