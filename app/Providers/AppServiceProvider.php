<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
//use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;

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
    Paginator::useBootstrap();

    if (!in_array(config('app.env'), ['local', 'dev', 'test'])) {
      URL::forceScheme('https');
    }
  }
}
