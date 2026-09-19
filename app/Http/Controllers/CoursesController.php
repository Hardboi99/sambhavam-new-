<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $categorySlug = request()->query('category', '');

        $categories = Category::where('is_active', true)->orderBy('sort_order')->get();

        $coursesQuery = Course::with('category')->where('is_active', true);

        

        $activeCategory = null;

        if ($categorySlug) {
            $activeCategory = Category::where('slug', $categorySlug)->first();

            if ($activeCategory) {
                $coursesQuery->where('category_id', $activeCategory->id);
            }
        }

        $courses = $coursesQuery->orderBy('category_id')->orderBy('sort_order')->paginate(9);

        return view('courses', compact('courses', 'categories', 'activeCategory'));
    }
}