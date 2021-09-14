<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\NewsController;
use App\Http\Controllers\Main\CategoryController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\CategoryController as CategoryAdmin;
use App\Http\Controllers\Admin\NewsController as NewsAdmin;

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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/page={id}', [IndexController::class, 'index'])->where('id', '\d+')->name('home.page');
Route::get('/auth', [IndexController::class, 'inAuth'])->name('auth');

// admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [IndexController::class, 'admin']);
    Route::resource('news', NewsAdmin::class);
    Route::resource('category', CategoryAdmin::class);
});

//news
Route::get('/news/{id}', [NewsController::class, 'getNew'])->where('id', '\d+')->name('news.show');

//category
Route::get('/category/{item}', [CategoryController::class, 'getCategorySrh'])->where('item', '[a-z]+')->name('category.item');
