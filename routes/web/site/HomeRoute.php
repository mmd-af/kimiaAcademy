<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers\Home'], function () {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@home'
    ]);
});
