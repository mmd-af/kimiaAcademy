<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site\Home'], function () {
    Route::group(['as' => 'site.'], function () {
        Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'HomeController@blog'
            ]);
            Route::post('/categoryfilter/{category:slug}', [
                'as' => 'categoryfilter',
                'uses' => 'HomeController@categoryFilter'
            ]);
            Route::get('/categoryfilter/{category:slug}', [
                'as' => 'show',
                'uses' => 'HomeController@show'
            ]);
        });
    });
});
