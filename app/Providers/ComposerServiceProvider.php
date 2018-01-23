<?php

namespace App\Providers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('news.index', function($view)
        {
          $view->with('news', News::news());
        });

        view()->composer('news.categories', function($view)
        {
          $view->with('newsCategories', NewsCategory::newsCategories());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
