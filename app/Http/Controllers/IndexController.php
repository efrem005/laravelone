<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index')->with('category', $this->getCategory())->with('news', $this->getNews());
    }

    public function inAuth()
    {
        return view('login')->with('category', $this->getCategory());
    }

    //admin
    public function admin()
    {
        return view('admin.index');
    }
}
