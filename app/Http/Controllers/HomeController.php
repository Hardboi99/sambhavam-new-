<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;


class HomeController extends Controller
{
    public function index() 
    { 
        $categories = Category::with(['courses' => function ($query) {
            $query->where('is_active', true)->orderBy('sort_order');
        }])
        ->where('is_active', true)
        ->orderBy('sort_order')
        ->get();

        return view('home', compact('categories'));
    }
}
