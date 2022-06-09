<?php

use App\Models\Image\Image;
use App\Models\Video\Video;
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

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


//  guery for attach category to fake posts

Route::get('/query', function () {
    $posts = \App\Models\Post\Post::all();
    foreach ($posts as $post) {
        $post->categories()->attach(rand(1, 15));
    }
    return "query is finished";
});

//  guery for attach video to fake educationalVideo

Route::get('/query1', function () {
    $educationals = App\Models\EducationalVideo\EducationalVideo::all();
    foreach ($educationals as $educational) {
        $image = new Image();
        $image->url = "/storage/photos/51/111111 (1).jpg";
        $educational->images()->save($image);
    }
    return "query is finished1";
});

//  add youtube and aparat video link to educationalVideo

Route::get('/query2', function () {
    $educationals = App\Models\EducationalVideo\EducationalVideo::all();
    foreach ($educationals as $educational) {
        $educational->aparat_link = "https://www.aparat.com/v/uGFzx";
        $educational->youtube_link = "https://www.youtube.com/watch?v=G2ikFVP8csw";
        $educational->save();
    }
    return "query is finished2";
});

//  add video link to posts

Route::get('/query3', function () {
    $posts = App\Models\Post\Post::all();
    foreach ($posts as $post) {
        $image = new Image();
        $image->url = "/storage/photos/51/111111 (1).jpg";
        $post->images()->save($image);
    }
    return "query is finished3";
});

require __DIR__ . '/auth.php';
