<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
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
Route::get('/auth', [IndexController::class, 'inAuth']);


// admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('newNews', NewsAdmin::class);
});

//news
Route::get('/news/{id}', [NewsController::class, 'getNew'])->name('news.show')->where('id', '\d+');

//category
Route::get('/category/{item}', [CategoryController::class, 'getCategorySrh'])->name('category.item')->where('item', '[a-z]+');
