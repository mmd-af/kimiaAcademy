<?php

use Illuminate\Support\Facades\Route;

Route::get('/videos', function () {
    return view('site.video.video');
})->name('video');

Route::get('/blog', function () {
    return view('site.blog.blog');
})->name('blog');

Route::get('/contact-us', function () {
    return view('site.contact-us.contact-us');
})->name('contact-us');

// test guery for attach category to fake posts

//Route::get('/query', function () {
//    $posts = \App\Models\Post\Post::all();
//    foreach ($posts as $post) {
//        $post->categories()->attach(8);
//    }
//    return "query is finished";
//});
require __DIR__ . '/auth.php';
