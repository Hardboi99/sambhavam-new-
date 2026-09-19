<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::orderBy('sort_order')->paginate(15);

        return view('admin.modules.index', compact('modules'));
    }

    public function create()
    {
        $nextSortOrder = (int) Module::max('sort_order') + 1;

        return view('admin.modules.create', compact('nextSortOrder'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:500',
            'description' => 'nullable|string|max:500',
            'sort_order' => 'nullable|integer|min:1',
        ]);

        if (empty($data['sort_order'])) {
            $data['sort_order'] = (int) Module::max('sort_order') + 1;
        } else {
            Module::where('sort_order', '>=', $data['sort_order'])->increment('sort_order');
        }

        Module::create($data);

        return redirect()->route('admin.modules.index')->with('success', 'Module link added successfully.');
    }

    public function edit(Module $module)
    {
        return view('admin.modules.edit', compact('module'));
    }

    public function update(Request $request, Module $module)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:500',
            'description' => 'nullable|string|max:500',
            'sort_order' => 'nullable|integer|min:1',
            'is_active' => 'nullable|boolean',
        ]);

        $data['is_active'] = $request->has('is_active');

        if (!empty($data['sort_order']) && $data['sort_order'] != $module->sort_order) {
            Module::where('sort_order', '>=', $data['sort_order'])
                ->where('id', '!=', $module->id)
                ->increment('sort_order');
        }

        $module->update($data);

        return redirect()->route('admin.modules.index')->with('success', 'Module link updated successfully.');
    }

    public function destroy(Module $module)
    {
        $module->delete();

        return redirect()->route('admin.modules.index')->with('success', 'Module link deleted successfully.');
    }
}