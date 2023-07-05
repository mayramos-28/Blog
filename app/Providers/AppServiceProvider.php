<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
//use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;  

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('categories', Category::all());
      //  View::share('posts', Post::all());
        Paginator::useBootstrap();

      //  Schema::disableForeignKeyConstraints();
    }
}
