<?php

namespace App\Models\Item;

use App\Models\Course\Course;
use App\Models\Video\Video;

trait ItemRelationships
{
    public function children()
    {
        return $this->hasMany(Item::class,  'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Item::class, 'parent_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function video()
    {
        return $this->morphOne(Video::class, 'videoable');
    }
}
