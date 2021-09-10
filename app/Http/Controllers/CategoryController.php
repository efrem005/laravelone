<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategorySrh(string $item)
    {
        return view('news.index')->with('news', $this->getCategorySearch($item))->with('category', $this->getCategory());
    }
}
