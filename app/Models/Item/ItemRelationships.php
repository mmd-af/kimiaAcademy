<?php

namespace App\Models\Item;

trait ItemRelationships
{
    public function parent()
    {
        return $this->belongsTo(Item::class, 'parent_id', 'id');
    }

}
