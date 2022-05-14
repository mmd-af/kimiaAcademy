<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site'], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'Home\HomeController@index'
    ]);

});
