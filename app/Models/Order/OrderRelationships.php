<?php

namespace App\Models\Order;

use App\Models\Course\Course;

trait OrderRelationships
{
    public function orderable()
    {
        return $this->morphTo();
    }

    public function courses()
    {
        return $this->belongsTo(Course::class,'orderable_id');
    }
}
