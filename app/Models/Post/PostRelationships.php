<?php

namespace App\Models\Post;

use App\Models\Category\Category;
use App\Models\Image\Image;
use App\Models\User;

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

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
