<?php

namespace App\Models\Course;

use App\Models\Category\Category;
use App\Models\Video\Video;

trait CourseRelationships
{
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
    public function videos()
    {
        return $this->morphToMany(Video::class, 'videoable');
    }
}
