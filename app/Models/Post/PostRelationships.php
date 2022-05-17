<?php

namespace App\Models\Post;

use App\Models\Category\Category;

trait PostRelationships
{

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
