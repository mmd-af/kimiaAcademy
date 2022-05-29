<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CourseRepository;
use Illuminate\Http\Request;

class CourseAjaxController extends Controller
{
    protected $categoryRepository;

    public function __construct(CourseRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function getDatatableData(Request $request)
    {
        return $this->categoryRepository->getDatatableData($request);
    }
}
