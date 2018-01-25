<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('news', 'NewsController');
Route::resource('storyDetail', 'StoryDetailController');
Route::resource('showDetail', 'ShowDetailController');
Route::resource('reports', 'ReportController');
Route::resource('programs', 'ProgramController');
Route::resource('feedback', 'FeedbackController', ['only' => 'store']);
