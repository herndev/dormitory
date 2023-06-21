<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryzController extends Controller
{
    public function indexz()
    {
        $categories = auth()->users()->Category;
        return view('categories.indexs', compact('categoriess'));
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }
}
