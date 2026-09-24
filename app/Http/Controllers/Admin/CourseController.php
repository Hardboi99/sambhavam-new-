<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('category')->orderBy('category_id')->orderBy('sort_order')->paginate(15);

        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $categories = Category::orderBy('sort_order')->get();

        return view('admin.courses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255|unique:courses,title',
            'description' => 'nullable|string',
            'curriculum' => 'nullable|string',
            'key_features' => 'nullable|string',
            'eligibility_fees' => 'nullable|string',
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'nullable|string',
            'faqs.*.answer' => 'nullable|string',
            'duration' => 'nullable|string|max:100',
            'mode' => 'required|in:offline,online',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|max:2048',
            'sort_order' => 'nullable|integer|min:1',
        ], [
            'title.unique' => 'A course with this title already exists. Please try a different title.',
        ]);

        $data['slug'] = Str::slug($data['title']);

        if (isset($data['faqs']) && is_array($data['faqs'])) {
            $filteredFaqs = [];
            foreach ($data['faqs'] as $faq) {
                if (!empty(trim($faq['question'] ?? '')) || !empty(trim($faq['answer'] ?? ''))) {
                    $filteredFaqs[] = [
                        'question' => trim($faq['question'] ?? ''),
                        'answer' => trim($faq['answer'] ?? ''),
                    ];
                }
            }
            $data['faqs'] = !empty($filteredFaqs) ? $filteredFaqs : null;
        } else {
            $data['faqs'] = null;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('courses', 'public');
        }

        if (empty($data['sort_order'])) {
            $data['sort_order'] = (int) Course::where('category_id', $data['category_id'])->max('sort_order') + 1;
        } else {
            // Shift other courses in the SAME category to make room
            Course::where('category_id', $data['category_id'])
                ->where('sort_order', '>=', $data['sort_order'])
                ->increment('sort_order');
        }

        Course::create($data);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $categories = Category::orderBy('sort_order')->get();

        return view('admin.courses.edit', compact('course', 'categories'));
    }

    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255|unique:courses,title,' . $course->id,
            'description' => 'nullable|string',
            'curriculum' => 'nullable|string',
            'key_features' => 'nullable|string',
            'eligibility_fees' => 'nullable|string',
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'nullable|string',
            'faqs.*.answer' => 'nullable|string',
            'duration' => 'nullable|string|max:100',
            'mode' => 'required|in:offline,online',
            'price' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|max:2048',
            'sort_order' => 'nullable|integer|min:1',
            'is_active' => 'nullable|boolean',
        ], [
            'title.unique' => 'A course with this title already exists. Please try a different title.',
        ]);

        $data['slug'] = Str::slug($data['title']);
        $data['is_active'] = $request->has('is_active');

        if (isset($data['faqs']) && is_array($data['faqs'])) {
            $filteredFaqs = [];
            foreach ($data['faqs'] as $faq) {
                if (!empty(trim($faq['question'] ?? '')) || !empty(trim($faq['answer'] ?? ''))) {
                    $filteredFaqs[] = [
                        'question' => trim($faq['question'] ?? ''),
                        'answer' => trim($faq['answer'] ?? ''),
                    ];
                }
            }
            $data['faqs'] = !empty($filteredFaqs) ? $filteredFaqs : null;
        } else {
            $data['faqs'] = null;
        }

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('courses', 'public');
        }

        $oldSortOrder = $course->sort_order;
        $newSortOrder = $data['sort_order'] ?? $oldSortOrder;

        // Category changed: sort_order is scoped per-category, so treat it like
        // leaving the old category (close its gap) and entering the new one
        // (make room), rather than trying to "move" within one list.
        if ((int) $data['category_id'] !== (int) $course->category_id) {
            Course::where('category_id', $course->category_id)
                ->where('id', '!=', $course->id)
                ->where('sort_order', '>', $oldSortOrder)
                ->decrement('sort_order');

            if (empty($data['sort_order'])) {
                $newSortOrder = (int) Course::where('category_id', $data['category_id'])->max('sort_order') + 1;
            } else {
                Course::where('category_id', $data['category_id'])
                    ->where('sort_order', '>=', $newSortOrder)
                    ->increment('sort_order');
            }
        } elseif ($newSortOrder != $oldSortOrder) {
            if ($newSortOrder > $oldSortOrder) {
                // Moving later in the list: pull the in-between courses back by 1
                Course::where('category_id', $data['category_id'])
                    ->where('id', '!=', $course->id)
                    ->whereBetween('sort_order', [$oldSortOrder + 1, $newSortOrder])
                    ->decrement('sort_order');
            } else {
                // Moving earlier in the list: push the in-between courses forward by 1
                Course::where('category_id', $data['category_id'])
                    ->where('id', '!=', $course->id)
                    ->whereBetween('sort_order', [$newSortOrder, $oldSortOrder - 1])
                    ->increment('sort_order');
            }
        }

        $data['sort_order'] = $newSortOrder;

        $course->update($data);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}