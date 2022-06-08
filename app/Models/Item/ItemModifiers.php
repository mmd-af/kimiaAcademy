<?php

namespace App\Models\Item;

trait ItemModifiers
{
    public function getParentIdAttribute($parent_id)
    {
        if ($parent_id == 0) {
            return "فصل";
        } else {
            return "درس";
        }
    }


}
