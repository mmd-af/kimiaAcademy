<?php

namespace App\Repositories\Admin;
;

use App\Models\Category\Category;
use App\Models\Post\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostRepository
//    extends BaseRepository
{
//    public function __construct(Course $model)
//    {
//        $this->setModel($model);
//    }

    public function getAll()
    {
        return Post::query()
            ->select([
                'id',
                'title',
                'slug',
                'description',
                'view_count',
                'is_active'
            ])
            ->get();

    }

    public function getLatest()
    {
        return Post::query()
            ->select([
                'id',
                'title',
                'slug',
                'description',
                'view_count',
                'is_active'
            ])
            ->latest()
            ->paginate(10);

    }

    public function getCourseCategory()
    {
        return Category::query()
            ->select([
                'id',
                'title',
                'type'
            ])
            ->where('type', 2)
            ->get();
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $id = Auth::id();
            $item = new Post();
            $item->user_id = $id;
            $item->title = $request->input('title');
            $item->slug = $request->input('slug');
            $item->description = $request->input('description');
            $item->view_count = $request->input('view_count');
            $item->is_active = $request->input('is_active');
            $item->save();
            $item->categories()->attach($request->input('category_id'));
            DB::commit();
            return $item;
        } catch (\Exception $error) {
            DB::rollback();
            return $error;
        }
    }
}
