<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(int $page = 0)
    {
        $news = new News();
        $category = new Category();

        return view('index')
            ->with('category', $category->getCategory())
            ->with('page', $news->getNews())
            ->with('news', $news->getNewsLimit($page));
    }

    public function inAuth()
    {
        $news = new News();
        $category = new Category();

        return view('auth.login')
            ->with('category', $category->getCategory())
            ->with('news', $news->getNews());
    }

    //admin
    public function admin()
    {
        $news = new News();
        $category = new Category();

        return view('admin.index')
            ->with('newsCount', $news->countNews())
            ->with('categoryCount', $category->countCategory());
    }
}
