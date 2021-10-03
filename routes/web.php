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
use App\Http\Controllers\Admin\Parser\YandexController;
use App\Http\Controllers\Admin\Parser\LentaController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\Admin\FileManagerController;

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

// Home
Route::get('/', [IndexController::class, 'index'])->name('home');

// News
Route::get('/news/{new}', [NewsController::class, 'getNew'])->where('new', '\d+')->name('news.show');

// Category
Route::get('/category/{item}', [CategoryController::class, 'getCategorySrh'])->where('item', '\d+')->name('category.item');

Auth::routes(['verify' => true]);

// Account
Route::group(['prefix' => 'account', 'as' => 'account.', 'middleware' => ['auth']], function (){
    Route::get('/profile', [AccountController::class, 'profile'])->name('profile');
    Route::get('/messages', [AccountController::class, 'messages'])->name('messages');
    Route::get('/settings', [AccountController::class, 'settings'])->name('settings');
});

Route::group(['middleware' => 'verified'], function () {

    // Admin
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin', 'auth']], function () {
        Route::get('/', AdminController::class);
        Route::resource('news', NewsAdmin::class);
        Route::resource('category', CategoryAdmin::class);
        Route::resource('users', UsersController::class);
        Route::get('parser_yandex', YandexController::class)->name('parser.yandex');
        Route::get('parser_lenta', LentaController::class)->name('parser.lenta');
        Route::get('file', FileManagerController::class)->name('file');
    });

    //file manager
    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});


// Social
Route::group(['middleware' => 'guest'], function () {
    Route::get('/vk/start', [SocialController::class, 'redirectToVkontakte'])->name('vk.start');
    Route::get('/vk/callback', [SocialController::class, 'handlerVkontakteCallback'])->name('vk.callback');
    Route::get('/facebook/start', [SocialController::class, 'redirectToFacebook'])->name('facebook.start');
    Route::get('/facebook/callback', [SocialController::class, 'handlerFacebookCallback'])->name('facebook.callback');
    Route::get('/google/start', [SocialController::class, 'redirectToGoogle'])->name('google.start');
    Route::get('/google/callback', [SocialController::class, 'handlerGoogleCallback'])->name('google.callback');
    Route::get('/github/start', [SocialController::class, 'redirectToGithub'])->name('github.start');
    Route::get('/github/callback', [SocialController::class, 'handlerGithubCallback'])->name('github.callback');
});
