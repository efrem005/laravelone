<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}', function (string $name) {
    return "Добро пожаловать ${name}";
});

Route::get('/news', function () {
    return 'Новости';
});

Route::get('/news/{post}', function (string $post) {
   return "Новость дня ${post}";
});

Route::get('/about', function () {
    return 'О нас';
});
