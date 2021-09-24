<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\NewsController;
use App\Http\Controllers\Main\CategoryController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController as CategoryAdmin;
use App\Http\Controllers\Admin\NewsController as NewsAdmin;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Main\AccountController;

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

//news
Route::get('/news/{new}', [NewsController::class, 'getNew'])->where('new', '\d+')->name('news.show');

//category
Route::get('/category/{item}', [CategoryController::class, 'getCategorySrh'])->where('item', '\d+')->name('category.item');

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'verified'], function () {

    Route::group(['prefix' => 'account', 'as' => 'account.'], function (){
        Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
        Route::get('/messages', [AccountController::class, 'messages'])->name('messages');
        Route::get('/settings', [AccountController::class, 'settings'])->name('settings');
    });

    // admin
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin', 'auth']], function () {
        Route::get('/', AdminController::class);
        Route::resource('news', NewsAdmin::class);
        Route::resource('category', CategoryAdmin::class);
        Route::resource('users', UsersController::class);
    });

});
