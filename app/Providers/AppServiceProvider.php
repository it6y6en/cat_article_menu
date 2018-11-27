<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->menuLoad();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * [menuLoad description]
     * @method menuLoad
     * @return [type]   [description]
     */
    public function menuLoad()
    {
        View::composer('layouts.app', function ($view) {
            $view->with(
                'categories', Category::with('children')->where('parent_id', 0)->get()
            );
        });
    }
}
