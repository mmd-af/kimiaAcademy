<?php

namespace App\Models\Post;

use App\Models\Category\Category;
use App\Models\Video\Video;

trait PostRelationships
{

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    public function videos()
    {
        return $this->morphOne(Video::class, 'videoable');
    }
}
