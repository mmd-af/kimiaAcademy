<?php

namespace App\Models\Category;

use App\Enums\ECategoryType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,
        SoftDeletes,
        CategoryRelationships,
        CategoryModifiers;

    protected $table = 'categories';

}
