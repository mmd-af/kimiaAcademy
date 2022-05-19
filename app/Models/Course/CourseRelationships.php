<?php

namespace App\Models\Course;

use App\Models\Category\Category;

trait CourseRelationships
{

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

}