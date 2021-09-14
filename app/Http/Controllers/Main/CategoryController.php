<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategorySrh(string $item)
    {
        $category = new Category();

        return view('news.index')
            ->with('news', $category->getCategorySearch($item))
            ->with('category', $category->getCategory());
    }
}
