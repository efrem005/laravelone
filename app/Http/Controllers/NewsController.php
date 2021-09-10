<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index')
            ->with('news', $this->getNews())
            ->with('category', $this->getCategory());
    }

    public function getNew(int $id)
    {
        return view('news.show')
            ->with('new', $this->getNewOne($id))
            ->with('category', $this->getCategory())
            ->with('news', $this->getNews());
    }

}
