<?php

namespace App\Models\Category;

trait CategoryModifiers
{
//    public function getLinkAttribute()
//    {
//        return route('site.categories.show', ['slug' => slugify($this->slug)]);
//    }

    public function getTypeAttribute($type)
    {
        if ($type == 1) {
            return "دوره ی آموزشی";
        } elseif ($type == 2) {
            return "مقالات";

        }
    }

    public function getParentIdAttribute($parent_id)
    {
// TODO in moshkel dare
        if (isset($parent_id->title)) {
            return $parent_id->title;
        }
        return "دسته ی مادر";
    }
}
