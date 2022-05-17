<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'App\Http\Controllers\Admin\Post'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {

            Route::get('/', [
                'as' => 'index',
                'uses' => 'PostController@index'
            ]);

            Route::get('/create', [
                'as' => 'create',
                'uses' => 'PostController@create'
            ]);


            Route::post('/store', [
                'as' => 'store',
                'uses' => 'PostController@store'
            ]);

            Route::get('/edit/{post}', [
                'as' => 'edit',
                'uses' => 'PostController@edit'
            ]);

            Route::put('{post}/update', [
                'as' => 'update',
                'uses' => 'PostController@update'
            ]);


        });

//        Route::group(['middleware' => ['is.ajax'], 'prefix' => 'posts-ajax', 'as' => 'posts.ajax.'], function () {
//            Route::post('/category_type', [
//                'as' => 'category_type',
//                'uses' => 'PostAjaxController@categoryType'
//            ]);
//        });
    });
});


