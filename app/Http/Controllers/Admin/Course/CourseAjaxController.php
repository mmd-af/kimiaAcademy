<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\CourseRepository;

class CourseAjaxController extends Controller
{
    protected $categoryRepository;

    public function __construct(CourseRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

//    public function categoryType(Request $request)
//    {
//        return response()->json([
//            'data' => $this->categoryRepository->getCourseByType($request->value)
//        ]);
//    }
}
