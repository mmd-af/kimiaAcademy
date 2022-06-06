<?php

namespace App\Models\Video;

use App\Models\Course\Course;

trait VideoRelationships
{

//    public function categories()
//    {
//        return $this->morphToMany(Category::class, 'categorizable');
//    }
    public function videos()
    {
        return $this->morphOne(Video::class, 'videoable');
    }

//    public function videoable()
//    {
//        return $this->morphTo();
//    }
    public function courses()
    {
        return $this->morphedByMany(Course::class, 'videoable');
    }
}
