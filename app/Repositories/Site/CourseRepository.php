<?php

namespace App\Repositories\Site;

use App\Enums\ECategoryType;
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
                'id',
                'title',
                'slug',
                'description',
                'actual_price',
                'discount_price',
                'view_count',
                'subscriber_count',
                'course_lang',
                'course_time',
                'course_size',
                'course_kind',
                'is_active'
            ])
//            ->with('videos')
            ->where('is_active',1)
            ->get();
    }

}
