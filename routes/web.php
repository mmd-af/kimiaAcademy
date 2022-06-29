<?php

use App\Models\Course\Course;
use App\Models\Image\Image;
use App\Models\Post\Post;
use App\Models\Video\Video;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

Route::get('/contact-us', function () {
    return view('site.contact-us.contact-us');
})->name('contact-us');

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/generate-sitemap', function () {

//    SitemapGenerator::create('http://127.0.0.1:8000/courses')
//        ->writeToFile(public_path('sitemap.xml'));

    $sitemap = Sitemap::create()
        ->add(Url::create('/blog'))
        ->add(Url::create('/courses'));

    \App\Models\Post\Post::all()->each(function (Post $post) use ($sitemap) {
        $sitemap->add(Url::create("/blog/{$post->slug}"));
    });

    \App\Models\Course\Course::all()->each(function (Course $course) use ($sitemap) {
        $sitemap->add(Url::create("/courses/{$course->slug}"));
    });

    $sitemap->writeToFile(public_path('sitemap.xml'));

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

//  add video link to posts

Route::get('/query2', function () {
    $posts = App\Models\Post\Post::all();
    foreach ($posts as $post) {
        $image = new Image();
        $image->url = "/storage/photos/51/111111 (1).jpg";
        $post->images()->save($image);
    }
    return "query is finished2";
});

Route::get('/query3', function () {
    $posts = App\Models\Course\Course::all();
    foreach ($posts as $post) {
        $video = new Video();
        $video->url = "/storage/files/51/asli.mp4";
        $post->videos()->save($video);
        $post->categories()->attach(rand(1, 15));

        $image = new Image();
        $image->url = "/storage/photos/51/111111 (1).jpg";
        $post->images()->save($image);
    }
    return "query is finished3";
});

Route::get('/query4', function () {
    $posts = App\Models\Item\Item::all();
    foreach ($posts as $post) {
        $post->course_id = rand(1, 20);
        $post->parent_id = rand(0, 3);
        $post->save();
    }
    return "query is finished4";
});

Route::get('/query5', function () {
    $posts = App\Models\Item\Item::all();
    $id = 0;
    foreach ($posts as $post) {
        $video = new Video();
        $video->url = "/storage/files/51/" . $id . ".mp4";
        $post->videos()->save($video);
        $id++;
    }
    return "query is finished5";
});


require __DIR__ . '/auth.php';
