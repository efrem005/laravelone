<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news')->with('news', $this->getNews())->with('category', $this->getCategory());
    }

    public function getNew(int $id)
    {
        return view('new')->with('new', $this->getNewOne($id))->with('category', $this->getCategory());
    }

}
