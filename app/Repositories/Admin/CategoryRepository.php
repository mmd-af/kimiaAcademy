<?php

namespace App\Repositories\Admin;

use App\Models\Category;

class CategoryRepository
//    extends BaseRepository
{
//    public function __construct(Course $model)
//    {
//        $this->setModel($model);
//    }

    public function create($request)
    {
        $item = new Category();
        $item->title = $request->input('Category_title');
        $item->slug = $request->input('slug');
        $item->parent_id = $request->input('parent_id');
        $item->save();

        return $item;

    }
}
