<?php

namespace App\Models\EducationalVideo;

use App\Models\Category\Category;

trait EducationalVideoRelationships
{

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
