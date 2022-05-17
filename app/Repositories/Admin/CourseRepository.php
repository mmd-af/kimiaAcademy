<?php

namespace App\Repositories\Admin;

use App\Models\Category\Category;
use App\Models\Course\Course;

class CourseRepository
//    extends BaseRepository
{
//    public function __construct(Course $model)
//    {
//        $this->setModel($model);
//    }

    public function getAll()
    {
        return Course::query()
            ->select([
                'title',
                'slug',
                'description',
                'actual_price',
                'discount_price',
                'is_active',
                'course_lang',
                'course_time',
                'course_size',
                'course_kind'

            ])->get();

    }
    public function getLatest()
    {
        return Course::query()
            ->select([
                'title',
                'slug',
                'description',
                'actual_price',
                'discount_price',
                'is_active',
                'course_lang',
                'course_time',
                'course_size',
                'course_kind'
            ])
            ->latest()
            ->paginate(10);

    }

    public function getCourseCategory()
    {
        return Category::query()
            ->select([
                'id',
                'title',
                'type'
            ])
            ->where('type', 1)
            ->get();
    }

    public function create($request)
    {
        $item = new Course();
        $item->title = $request->input('title');
        $item->slug = $request->input('slug');
        $item->description = $request->input('description');
        $item->actual_price = $request->input('actual_price');
        $item->discount_price = $request->input('discount_price');
        $item->is_active = $request->input('is_active');
        $item->course_lang = $request->input('course_lang');
        $item->course_time = $request->input('course_time');
        $item->course_size = $request->input('course_size');
        $item->course_kind = $request->input('course_kind');
        $item->save();

        return $item;

    }
}
