<?php

use Illuminate\Support\Facades\Route;

Route::get('/videos', function () {
    return view('site.video.video');
})->name('video');

Route::get('/blog', function () {
    return view('site.blog.blog');
})->name('blog');

require __DIR__ . '/auth.php';
