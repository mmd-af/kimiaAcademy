<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'CourseController@index'
            ]);
            Route::get('/create', [
                'as' => 'create',
                'uses' => 'CourseController@create'
            ]);


            Route::post('/store', [
                'as' => 'store',
                'uses' => 'CourseController@store'
            ]);



//            Route::match(['put', 'patch'], '{like}/update', [
//                'as' => 'update',
//                'uses' => 'CourseController@update'
//            ]);
//            Route::match(['get', 'head'], '{like}/edit', [
//                'as' => 'edit',
//                'uses' => 'CourseController@edit'
//            ]);
//            Route::match(['get', 'head'], '{like}/show', [
//                'as' => 'show',
//                'uses' => 'CourseController@show'
//            ]);
//







        });
    });
});
