<?php

namespace App\Repositories\Admin;

use App\Models\Item\Item;


class ItemRepository extends BaseRepository
{
    public function __construct(Item $model)
    {
        $this->setModel($model);
    }
}
