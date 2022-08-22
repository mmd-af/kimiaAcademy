<?php

namespace App\Repositories\Site;

use App\Models\Comment\Comment;
use App\Models\Course\Course;
use App\Models\Item\Item;
use App\Models\Order\Order;
use Illuminate\Support\Facades\Auth;

class CourseRepository extends BaseRepository
{
//    TODO add BaseRepository to all repository

    public function __construct(Course $model)
    {
        $this->setModel($model);
    }

    public function getAll()
    {
        return Course::query()
            ->select([
                'id',
                'title',
                'slug',
                'description',
                'actual_price',
                'discount_price',
                'view_count',
                'subscriber_count',
                'course_lang',
                'course_time',
                'course_size',
                'course_kind'
            ])
            ->where('is_active', 1)
//            ->with('videos')
            ->get();
    }

    public function getCourse($course)
    {
        return Course::query()
            ->select([
                'id',
                'title',
                'slug',
                'description',
                'actual_price',
                'discount_price',
                'view_count',
                'subscriber_count',
                'course_lang',
                'course_time',
                'course_size',
                'course_kind'
            ])
            ->where('slug', $course)
//            ->with('comments')
            ->where('is_active', 1)
            ->first();
    }

    public function getComments($course)
    {
        return Comment::query()
            ->select([
                'id',
                'user_id',
                'body',
                'created_at'
            ])
            ->where('commentable_type', Course::class)
            ->where('commentable_id', $course->id)
            ->where('parent_id', 0)
            ->with('children')
            ->where('is_active', 1)
            ->get();
    }

    public function getChildComments($course)
    {
        return Comment::query()
            ->select([
                'id',
                'user_id',
                'body',
                'parent_id',
                'created_at'
            ])
            ->where('commentable_type', Course::class)
            ->where('commentable_id', $course->id)
            ->where('parent_id', '<>', 0)
            ->where('is_active', 1)
            ->get();
    }

    public function getCourseSeason($course)
    {
        return Item::query()
            ->select([
                'id',
                'title',
                'is_free',
                'parent_id',
            ])
            ->where('course_id', $course->id)
            ->where('parent_id', 0)
            ->get();
    }

    public function checkOrder($course)
    {
        $userId = Auth::id();
        return Order::query()
            ->select([
                'id',
            ])
            ->where('user_id', $userId)
            ->where('orderable_id', $course->id)
            ->first();
    }

    public function commentStore($request)
    {
        $course = $request->course_slug;
        $comment = new Comment();
        $comment->user_id = $request->input('user_id');
        $comment->body = $request->input('body');
        $course = $this->getCourse($course);
        $course->comments()->save($comment);

    }
}
