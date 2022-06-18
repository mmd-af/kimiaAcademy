<?php

namespace App\Http\Controllers\Site\Course;

use App\Http\Controllers\Controller;

class CourseController extends Controller
{
//    protected $homeRepository;
//
//    public function __construct(HomeRepository $homeRepository)
//    {
//        $this->homeRepository = $homeRepository;
//    }

    public function index()
    {
//        $educationalvideos = $this->homeRepository->getEducatinalVideo();
        return view('site.courses.index');
    }
}
