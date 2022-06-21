<?php

namespace App\Repositories\Site;

use App\Models\Course\Course;
use App\Models\Item\Item;
use Illuminate\Database\Eloquent\Builder;

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
            ->where('is_active',1)
            ->with('videos','items')
            ->get();
    }
    public function getCourseSeason($course)
    {
        return Item::query()
            ->select([
                'id',
                'title',
                'is_free',
                'parent_id',
            ])
            ->with('videos')
            ->where('course_id', $course->id)
            ->where('parent_id', 0)
            ->get();
    }

}
