<?php

namespace App\Models\Comment;


use App\Models\User;

trait CommentRelationships
{
    public function commentable()
    {
        return $this->morphTo();
    }
    public function children()
    {
        return $this->hasMany(Comment::class,  'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
