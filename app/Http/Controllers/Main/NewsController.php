<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index')
            ->with('news', News::all())
            ->with('category', Category::all());
    }

    public function getNew(News $new)
    {
        return view('news.show')
            ->with('new', $new)
            ->with('category', Category::query()->withCount('news')->get())
            ->with('news', News::query()->limit(4)->get());
    }

}
