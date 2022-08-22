<?php

namespace App\Http\Controllers\Site\Course;

use App\Http\Controllers\Controller;
use App\Repositories\Site\CourseRepository;
use Illuminate\Http\Request;

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

    public function commentStore(Request $request)
    {
        $this->courseRepository->commentStore($request);
        alert()->success('دیدگاه شما با موفقیت ثبت شد و بعد از تایید ادمین به نمایش گذاشته می شود.','با تشکر');
        return redirect()->back();
    }

    public function show($course)
    {
        $course = $this->courseRepository->getCourse($course);
        $comments = $this->courseRepository->getComments($course);
        $childComments = $this->courseRepository->getChildComments($course);
//        dd($childComments);
        $checkOrder = $this->courseRepository->checkOrder($course);
        $courseSeason = $this->courseRepository->getCourseSeason($course);
        statistics("course", $course->id);
        return view('site.courses.show', compact('course', 'courseSeason', 'checkOrder', 'comments', 'childComments'));
    }
}
