<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('sort_order')->paginate(15);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $nextSortOrder = (int) Category::max('sort_order') + 1;

        return view('admin.categories.create', compact('nextSortOrder'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'sort_order' => 'nullable|integer|min:1',
        ]);

        $data['slug'] = Str::slug($data['name']);

        if (empty($data['sort_order'])) {
            $data['sort_order'] = (int) Category::max('sort_order') + 1;
        } else {
            // Make room: push everything at or after this position up by one
            Category::where('sort_order', '>=', $data['sort_order'])
                ->increment('sort_order');
        }

        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'short_description' => 'nullable|string',
            'sort_order' => 'nullable|integer|min:1',
            'is_active' => 'nullable|boolean',
        ]);

        $data['slug'] = Str::slug($data['name']);
        $data['is_active'] = $request->has('is_active');

        if (!empty($data['sort_order']) && $data['sort_order'] != $category->sort_order) {
            // Make room at the new position, but don't touch this category itself
            Category::where('sort_order', '>=', $data['sort_order'])
                ->where('id', '!=', $category->id)
                ->increment('sort_order');
        }

        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}