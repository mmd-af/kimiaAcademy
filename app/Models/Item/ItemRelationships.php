<?php

namespace App\Models\Item;

use App\Models\Course\Course;

trait ItemRelationships
{
    public function children()
    {
        return $this->hasOne(Item::class, 'id' , 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Item::class, 'parent_id','id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class , 'course_id');
    }

}
