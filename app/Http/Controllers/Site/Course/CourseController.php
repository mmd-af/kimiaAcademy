<?php

namespace App\Http\Controllers\Site\Course;

use App\Http\Controllers\Controller;
use App\Models\Course\Course;
use App\Repositories\Site\CourseRepository;

class CourseController extends Controller
{
    protected $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function index()
    {
        $courses = $this->courseRepository->getAll();
        return view('site.courses.index', compact('courses'));
    }

    public function show(Course $course)
    {

        $courseSeason = $this->courseRepository->getCourseSeason($course);
        return view('site.courses.show', compact('course', 'courseSeason'));

    }
}
