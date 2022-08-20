<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'App\Http\Controllers\Site\Comment'], function () {
    Route::group(['as' => 'site.'], function () {
        Route::group(['prefix' => 'comments', 'as' => 'comments.'], function () {
            Route::post('/store', [
                'as' => 'store',
                'uses' => 'CommentController@store'
            ]);
            Route::post('/reply', [
                'as' => 'reply',
                'uses' => 'CommentController@reply'
            ]);
        });
    });
});
