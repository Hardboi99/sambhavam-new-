<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class blogsController extends Controller
{
    public function blogs()
    {
        $blogs = Blog::where('is_active', true)
            ->orderBy('published_date', 'desc')
            ->paginate(9);

        return view('blogs', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $recentBlogs = Blog::where('is_active', true)
            ->where('id', '!=', $blog->id)
            ->orderBy('published_date', 'desc')
            ->take(3)
            ->get();

        return view('blog-details', compact('blog', 'recentBlogs'));
    }
}