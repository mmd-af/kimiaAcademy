<?php

namespace App\Models\Item;

use App\Models\Course\Course;

trait ItemRelationships
{
    public function parent()
    {
        return $this->belongsTo(Item::class, 'parent_id', 'id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class , 'course_id');
    }

}
