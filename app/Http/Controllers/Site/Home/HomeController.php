<?php

namespace App\Http\Controllers\Site\Home;

use App\Http\Controllers\Controller;
use App\Repositories\Site\HomeRepository;

class HomeController extends Controller
{

    protected $HomeRepository;

    public function __construct(HomeRepository $HomeRepository)
    {
        $this->HomeRepository = $HomeRepository;
    }

    public function index()
    {
        $educationalvideos = $this->HomeRepository->getEducatinalVideo();
        $pharmacologyPost = $this->HomeRepository->getPharmacologyPost();
        $medicinalPost = $this->HomeRepository->getMedicinalPost();
        return view('site.home.home', compact('educationalvideos', 'pharmacologyPost', 'medicinalPost'));

    }

    public function blog()
    {
        $posts = $this->HomeRepository->getPosts();
        $postCategories = $this->HomeRepository->postCategories();
        return view('site.blog.blog', compact('posts', 'postCategories'));
    }
}
