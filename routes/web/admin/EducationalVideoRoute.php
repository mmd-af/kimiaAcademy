<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'App\Http\Controllers\Admin\EducationalVideo'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'educationalvideos', 'as' => 'educationalvideos.'], function () {

            Route::get('/', [
                'as' => 'index',
                'uses' => 'EducationalVideoController@index'
            ]);

            Route::get('/create', [
                'as' => 'create',
                'uses' => 'EducationalVideoController@create'
            ]);


            Route::post('/store', [
                'as' => 'store',
                'uses' => 'EducationalVideoController@store'
            ]);

            Route::get('/edit/{educational}', [
                'as' => 'edit',
                'uses' => 'EducationalVideoController@edit'
            ]);

            Route::put('{educational}/update', [
                'as' => 'update',
                'uses' => 'EducationalVideoController@update'
            ]);


        });

//        Route::group(['middleware' => ['is.ajax'], 'prefix' => 'posts-ajax', 'as' => 'posts.ajax.'], function () {
//            Route::post('/category_type', [
//                'as' => 'category_type',
//                'uses' => 'EducationalVideoAjaxController@categoryType'
//            ]);
//        });
    });
});


