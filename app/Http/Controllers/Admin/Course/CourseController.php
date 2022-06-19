<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Course\CourseStoreRequest;
use App\Http\Requests\Admin\Course\CourseUpdateRequest;
use App\Http\Requests\Admin\Post\PostUpdateRequest;
use App\Models\Course\Course;
use App\Models\Item\Item;
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
        return view('admin.courses.index');
    }

    public function create()
    {
        $categories = $this->CourseRepository->getCategory();
        return view('admin.courses.create', compact('categories'));
    }

    public function store(CourseStoreRequest $request)
    {
        $this->CourseRepository->store($request);
        alert()->success("با تشکر", 'دوره ی مورد نظر با موفقیت ثبت شد');
        return redirect()->route('admin.courses.index');
    }

    public function show(Course $course, Item $item)
    {
        return view('admin.courses.show', compact('course','item'));
    }

    public function edit(Course $course)
    {
        $courseCatgory = $course->categories->first();
        $courseVideo = $course->videos();
        $categories = $this->CourseRepository->getCategory();
        return view('admin.courses.edit', compact('course', 'categories', 'courseCatgory', 'courseVideo'));
    }

    public function update(CourseUpdateRequest $request, Course $course)
    {
        $this->CourseRepository->update($request, $course);
        alert()->success("با تشکر", 'دوره ی مورد نظر با موفقیت ویرایش شد');
        return redirect()->route('admin.courses.index');
    }

    public function destroy(Course $course)
    {
        $this->CourseRepository->destroy($course);
        return redirect()->route('admin.courses.index');
    }
}
