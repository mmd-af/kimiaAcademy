<?php

namespace App\Models\Post;

use App\Models\Category\Category;
use App\Models\Image\Image;

trait PostRelationships
{

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
