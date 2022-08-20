<?php

namespace App\Repositories\Site;


use App\Enums\EActive;
use App\Models\Comment\Comment;
use App\Models\Course\Course;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CommentRepository extends BaseRepository
{
    public function __construct(Comment $model)
    {
        $this->setModel($model);
    }

    public function getAll()
    {
        return Comment::query()
            ->select([
                'id',
                'user_id',
                'body',
                'commentable_id',
                'commentable_type',
                'is_active',
                'created_at'
            ])
            ->with('commentable')
            ->get();
    }

    public function getCourse($request)
    {
        return Course::query()
            ->select([
                'id'
            ])
            ->where('id', $request->course_id)
            ->first();
    }

    public function store($request)
    {
        $comment = new Comment();
        $comment->user_id = $request->input('user_id');
        $comment->body = $request->input('body');
        $course = $this->getCourse($request);
        $course->comments()->save($comment);
    }

    public function reply($request)
    {
        $comment = new Comment();
        $comment->user_id = $request->input('user_id');
        $comment->body = $request->input('body');
        $comment->parent_id = $request->get('parent_id');
        $course = $this->getCourse($request);
        $course->comments()->save($comment);
    }

}
