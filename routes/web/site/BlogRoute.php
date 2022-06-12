<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site\Post'], function () {
    Route::group(['as' => 'site.'], function () {
        Route::group(['prefix' => 'blog', 'as' => 'posts.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'PostController@index'
            ]);
            Route::post('/categoryfilter/{category:slug}', [
                'as' => 'categoryfilter',
                'uses' => 'PostController@categoryFilter'
            ]);
            Route::get('/{category:slug}', [
                'as' => 'show',
                'uses' => 'PostController@show'
            ]);
        });
    });
});
