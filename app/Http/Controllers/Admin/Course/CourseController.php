<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\CourseRequest;
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
        $courses = $this->CourseRepository->getLatest();
        return view('admin.courses.index', compact('courses'));
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


    public function edit($id)
    {
        //
    }


    public function update(CategoryRequest $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
