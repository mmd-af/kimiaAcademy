<?php

namespace App\Models\Post;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,
        SoftDeletes,
        PostRelationships,
        PostModifiers,
        Sluggable;

    protected $table = 'posts';
}
