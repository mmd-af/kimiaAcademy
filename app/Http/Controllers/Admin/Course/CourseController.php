<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\CourseRequest;
use App\Http\Requests\Admin\Post\UpdatePostRequest;
use App\Models\Category\Category;
use App\Models\Course\Course;
use App\Repositories\Admin\CourseRepository;
use function redirect;
use function view;

class CourseController extends Controller
{
    protected $CourseRepository;

    public function __construct(CourseRepository $CourseRepository)
    {
        $this->CourseRepository = $CourseRepository;
    }

    public function index()
    {
        return view('admin.courses.index');
    }


    public function create()
    {
        $categories = $this->CourseRepository->getCategory();
        return view('admin.courses.create', compact('categories'));

    }


    public function store(CourseRequest $request)
    {
        $course = $this->CourseRepository->store($request);
        return redirect()->route('admin.courses.index');

    }


    public function show($id)
    {
        //
    }


    public function edit(Course $course)
    {
        $courseCatgory = $course->categories->first();
        $categories = $this->CourseRepository->getCategory();
        return view('admin.courses.edit', compact('course', 'categories', 'courseCatgory'));
    }


    public function update(UpdatePostRequest $request, Course $course)
    {
        $courses = $this->CourseRepository->update($request, $course);
        return redirect()->route('admin.courses.index');
    }


    public function destroy($id)
    {
        //
    }
}
