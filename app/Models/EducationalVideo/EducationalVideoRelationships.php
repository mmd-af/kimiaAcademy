<?php

namespace App\Models\EducationalVideo;

use App\Models\Video\Video;

trait EducationalVideoRelationships
{
    public function videos()
    {
        return $this->morphOne(Video::class, 'videoable');
    }
}
