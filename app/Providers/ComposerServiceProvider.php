<?php

namespace App\Providers;

use App\Models\News;
use App\Models\Show;
use App\Models\Program;
use App\Models\Story;
use App\Models\Day;
use App\Models\Report;
use App\Models\ShowDetail;
use App\Models\NewsCategory;
use App\Models\StoryDetail;
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

        view()->composer(['news.categories', 'reports.categories'], function($view)
        {
          $view->with('newsCategories', NewsCategory::newsCategories());
        });

        view()->composer('shows.categories', function($view)
        {
          $view->with('shows', Show::shows());
        });

        view()->composer('shows.index', function($view)
        {
          $view->with('showDetails', ShowDetail::showDetails());
        });

        view()->composer('stories.categories', function($view)
        {
          $view->with('stories', Story::stories());
        });

        view()->composer('stories.index', function($view)
        {
          $view->with('storyDetails', StoryDetail::storyDetails());
        });

        view()->composer('programs.index', function($view)
        {
          $view->with('programs', Program::programs());
        });

        view()->composer('programs.categories', function($view)
        {
          $view->with('days', Day::days());
        });

        view()->composer('reports.index', function($view)
        {
          $view->with('reports', Report::reports());
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
