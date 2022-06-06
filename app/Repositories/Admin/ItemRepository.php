<?php

namespace App\Repositories\Admin;

use App\Models\Item\Item;


class ItemRepository extends BaseRepository
{
    public function __construct(Item $model)
    {
        $this->setModel($model);
    }
    public function getAll()
    {
        return Item::query()
            ->select([
                'id',
                'course_id',
                'title',
                'description',
                'is_free',
                'parent_id',
                'sort'
            ])->get();

    }
}
