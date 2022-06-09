<?php

namespace App\Http\Controllers\Site\Home;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Repositories\Site\HomeRepository;
use Illuminate\Database\Eloquent\Relations\MorphTo;

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
        $pharmacologyCat = $this->HomeRepository->getPharmacologyCat();
        return view('site.home.home', compact('educationalvideos', 'pharmacologyCat'));

    }
}
