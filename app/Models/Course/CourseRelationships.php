<?php

namespace App\Models\Course;

use App\Models\Category\Category;
use App\Models\Comment\Comment;
use App\Models\Item\Item;
use App\Models\Order\Order;
use App\Models\Video\Video;

trait CourseRelationships
{
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

//TODO Edit videos to video
    public function videos()
    {
        return $this->morphOne(Video::class, 'videoable');
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function orders()
    {
        return $this->morphOne(Order::class, 'orderable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
