<?php

use Illuminate\Support\Facades\Route;

Route::get('/videos', function () {
    return view('site.home.video');
});
require __DIR__ . '/auth.php';
