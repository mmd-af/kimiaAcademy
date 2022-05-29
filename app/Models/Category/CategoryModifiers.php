<?php

namespace App\Models\Category;

use App\Enums\ECategoryType;
use Illuminate\Database\Eloquent\Casts\Attribute;


trait CategoryModifiers
{
    protected function type(): Attribute
    {
        return Attribute::get(function ($value) {
            if ($value == ECategoryType::COURSE->value) {
                return 'دوره های آموزشی ';
            } elseif ($value == ECategoryType::POST->value) {
                return 'مقالات';
            }
        });
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
