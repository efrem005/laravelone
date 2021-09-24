<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function profile()
    {
        return view('account.profile')
            ->with('category', Category::all());
    }

    public function messages()
    {
        return view('account.messages')
            ->with('category', Category::all());
    }

    public function settings()
    {
        return view('account.settings')
            ->with('category', Category::all());
    }
}
