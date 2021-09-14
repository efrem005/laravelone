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
        $news = new News();
        $category = new Category();

        return view('news.index')
            ->with('news', $news->getNews())
            ->with('category', $category->getCategory());
    }

    public function getNew(int $id)
    {
        $news = new News();
        $category = new Category();

        return view('news.show')
            ->with('new', $news->getNewOne($id))
            ->with('category', $category->getCategory())
            ->with('news', $news->getNews());
    }

}
