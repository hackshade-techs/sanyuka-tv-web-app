<?php

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

Route::resource('news', 'NewsController');
Route::resource('storyDetail', 'StoryDetailController');
Route::resource('showDetail', 'ShowDetailController');
Route::resource('reports', 'ReportController');
Route::resource('programs', 'ProgramController');
Route::resource('feedback', 'FeedbackController', ['only' => 'store']);

Route::get('/', 'PageController@welcome');

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    CRUD::resource('day', 'DayCrudController');
    CRUD::resource('program', 'ProgramCrudController');
    CRUD::resource('newscategory', 'NewsCategoryCrudController');
    CRUD::resource('news', 'NewsCrudController');
    CRUD::resource('report', 'ReportCrudController');
    CRUD::resource('storydetail', 'StoryDetailCrudController');
    CRUD::resource('story', 'StoryCrudController');
    CRUD::resource('showdetail', 'ShowDetailCrudController');
    CRUD::resource('show', 'ShowCrudController');
    CRUD::resource('feedback', 'FeedbackCrudController');
});

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
