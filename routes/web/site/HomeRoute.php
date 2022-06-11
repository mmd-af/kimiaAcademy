<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site\Home'], function () {

    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@index'
    ]);

    Route::get('/blog', [
        'as' => 'blog',
        'uses' => 'HomeController@blog'
    ]);
    Route::post('/blog/categoryfilter/{category:slug}', [
        'as' => 'blog.categoryfilter',
        'uses' => 'HomeController@categoryFilter'
    ]);


});
