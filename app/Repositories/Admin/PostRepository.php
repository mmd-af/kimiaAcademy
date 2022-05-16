<?php

namespace App\Repositories\Admin;
;

use App\Models\Post\Post;
use Illuminate\Support\Facades\Auth;

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
                'title',
                'slug',
                'description',
                'view_count',
                'is_active'
            ])
            ->latest()
            ->paginate(10);

    }

    public function store($request)
    {
        $id = Auth::id();
        $item = new Post();
        $item->user_id = $id;
        $item->title = $request->input('title');
        $item->slug = $request->input('slug');
        $item->description = $request->input('description');
        $item->view_count = $request->input('view_count');
        $item->is_active = $request->input('is_active');
        $item->save();

        return $item;

    }

}
