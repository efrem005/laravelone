<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class CountListServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->getCount();
    }

    private function getCount()
    {
        \View::composer('layouts.admin', function ($view) {
            $view->with('categoryCount', Category::count());
            $view->with('newsCount', News::count());
            $view->with('usersCount', User::count());
        });
    }
}
