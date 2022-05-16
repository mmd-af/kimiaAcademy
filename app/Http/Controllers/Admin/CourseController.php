<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\CategoryRequest;
use App\Http\Requests\Admin\Course\CourseRequest;
use App\Models\Category\Category;
use App\Models\Course;
use App\Repositories\Admin\CourseRepository;

class CourseController extends Controller
{
    protected $CourseRepository;

    public function __construct(CourseRepository $CourseRepository)
    {
        $this->CourseRepository = $CourseRepository;
    }

    public function index()
    {
        $courses = Course::latest()->paginate(10);

        return view('admin.courses.index', compact('courses'));
    }


    public function create()
    {
        $categories = Category::all();

        return view('admin.courses.create', compact('categories'));

    }


    public function store(CourseRequest $request)
    {
        $course = $this->CourseRepository->create($request);
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
