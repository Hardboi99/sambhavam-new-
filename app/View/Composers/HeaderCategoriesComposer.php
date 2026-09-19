<?php

namespace App\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class HeaderCategoriesComposer
{
    public function compose(View $view)
    {
        $view->with('headerCategories', Category::with(['courses' => function ($query) {
            $query->where('is_active', true);
        }])
        ->where('is_active', true)
        ->orderBy('sort_order')
        ->get());
    }
}