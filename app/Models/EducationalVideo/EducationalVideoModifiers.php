<?php

namespace App\Models\EducationalVideo;

trait EducationalVideoModifiers
{
//    public function getLinkAttribute()
//    {
//        return route('site.categories.show', ['slug' => slugify($this->slug)]);
//    }
    public function getIsActiveAttribute($is_active)
    {
        return $is_active ? 'فعال' : 'غیرفعال';
    }

}
