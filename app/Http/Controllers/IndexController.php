<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index')->with('category', $this->getCategory());
    }

    public function inAuth()
    {
        return view('login')->with('category', $this->getCategory());
    }
}
