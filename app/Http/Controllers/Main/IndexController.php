<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index')
            ->with('category', Category::withCount('news')->get())
            ->with('news', News::with('category')->paginate(6));
    }
}
