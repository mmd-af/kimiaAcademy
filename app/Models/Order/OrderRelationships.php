<?php

namespace App\Models\Order;

trait OrderRelationships
{
    public function imageable()
    {
        return $this->morphTo();
    }

}
