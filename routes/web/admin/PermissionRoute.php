<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth', 'admin'], 'namespace' => 'App\Http\Controllers\Admin\Permission'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::group(['prefix' => 'permissions', 'as' => 'permissions.'], function () {
            Route::get('/', [
                'as' => 'index',
                'uses' => 'PermissionController@index'
            ]);
            Route::get('/create', [
                'as' => 'create',
                'uses' => 'PermissionController@create'
            ]);
            Route::post('/store', [
                'as' => 'store',
                'uses' => 'PermissionController@store'
            ]);
            Route::get('/{permission}/edit', [
                'as' => 'edit',
                'uses' => 'PermissionController@edit'
            ]);
//            Route::put('{course}/update', [
//                'as' => 'update',
//                'uses' => 'PermissionController@update'
//            ]);
//            Route::delete('{course}/destroy', [
//                'as' => 'destroy',
//                'uses' => 'PermissionController@destroy'
//            ]);
        });
            Route::group(['middleware' => ['is.ajax'], 'prefix' => 'permissions-ajax', 'as' => 'permissions.ajax.'], function () {

            });
        });
    });
