<?php

namespace App\Http\Controllers\Admin\Category;


use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Repositories\Admin\CategoryRepository;
use Illuminate\Http\Request;

class PostAjaxController extends Controller
{
    protected $postRepository;

    public function __construct(CategoryRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }


}
