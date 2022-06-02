<?php

namespace App\Models\Category;

use App\Enums\ECategoryType;
use Illuminate\Database\Eloquent\Casts\Attribute;


trait CategoryModifiers
{

    public function getParentIdAttribute($parent_id)
    {
// TODO in moshkel dare

        if ($parent_id == 0) {
            return "دسته ی مادر";
        } else {
            return "زیر دسته";
        }
    }

    public function getTypeAttribute($type)
    {
        if ($type == ECategoryType::COURSE) {
            return 'دوره های آموزشی ';
        } elseif ($type == ECategoryType::POST) {
            return 'مقالات';
        }

    }
}
