<?php

namespace App\Models\Image;

trait ImageRelationships
{
    public function videoable()
    {
        return $this->morphTo();
    }

}
