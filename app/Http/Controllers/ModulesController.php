<?php

namespace App\Http\Controllers;

use App\Models\Module;

class ModulesController extends Controller
{
    public function index()
    {
        $modules = Module::where('is_active', true)->orderBy('sort_order')->get();

        return view('modules', compact('modules'));
    }
}