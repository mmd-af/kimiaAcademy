<?php

namespace App\Models\Course;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory,
        Sluggable,
        SoftDeletes,
        CourseRelationships,
        CourseModifiers;

    protected $table = 'courses';
}
