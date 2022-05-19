<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Site'], function () {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'Home\HomeController@index'
    ]);

});
