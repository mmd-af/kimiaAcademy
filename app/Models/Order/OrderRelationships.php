<?php

namespace App\Models\Order;

trait OrderRelationships
{
    public function orderable()
    {
        return $this->morphTo();
    }

}
