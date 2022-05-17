<?php

namespace App\Repositories\Admin;

use App\Models\Category\Category;

class CategoryRepository
//    extends BaseRepository
{
//    public function __construct(Course $model)
//    {
//        $this->setModel($model);
//    }

    public function getAll()
    {
        return Category::query()
            ->select([
                'title',
                'slug',
                'parent_id',
                'type'
            ])->get();

    }
    public function getLatest()
    {
        return Category::query()
            ->select([
                'title',
                'slug',
                'type',
                'parent_id'

            ])
            ->latest()
            ->paginate(10);

    }

    public function getCategoryByType($type)
    {
        return Category::query()
            ->select([
                'id',
                'title',
                'slug',
                'parent_id',
                'type'
            ])
            ->where('type', $type)
            ->get();
    }

    public function store($request)
    {
        $item = new Category();
        $item->title = $request->input('Category_title');
        $item->slug = $request->input('slug');
        $item->type = $request->input('cat_type');
        $item->parent_id = $request->input('parent_id');
        $item->save();
        return $item;
    }

}
