<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategorySrh($item)
    {
        $category = Category::with('news')->find($item);

        return view('news.index')
            ->with('news', $category->news()->paginate(6))
            ->with('title', $category->title)
            ->with('category', Category::withCount('news')->get());
    }
}
