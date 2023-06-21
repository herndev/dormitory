<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UCategoryController extends Controller
{
    public function index()
    {
        $categories = auth()->user()->Category;
        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }
}
