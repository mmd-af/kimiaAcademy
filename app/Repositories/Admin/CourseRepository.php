<?php

namespace App\Repositories\Admin;

use App\Models\Course;

class CourseRepository
//    extends BaseRepository
{
//    public function __construct(Course $model)
//    {
//        $this->setModel($model);
//    }

    public function create($request)
    {
        $item = new Course();
        $item->category_id = 1;
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
