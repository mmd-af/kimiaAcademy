<?php

namespace App\Http\Controllers\Site\Home;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        return view('site.home.home');
    }
}
