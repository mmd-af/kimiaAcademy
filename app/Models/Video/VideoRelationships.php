<?php

namespace App\Models\Video;

use App\Models\Course\Course;

trait VideoRelationships
{
    public function videoable()
    {
        return $this->morphTo();
    }

}
