<?php

namespace App\Repositories\Site;


use App\Enums\ECategoryType;
use App\Models\Category\Category;
use App\Models\EducationalVideo\EducationalVideo;
use App\Models\Post\Post;
use Illuminate\Database\Eloquent\Builder;

class HomeRepository
//    extends BaseRepository
{
//    public function __construct(Course $model)
//    {
//        $this->setModel($model);
//    }
    public function getPosts()
    {
        return Post::query()
            ->select([
                'id',
                'slug',
                'user_id',
                'title',
                'description',
                'created_at'
            ])
            ->where('is_active', 1)
            ->with(['images', 'users'])
            ->latest()
            ->paginate(10);
    }

    public function postCategories()
    {
        return Category::query()
            ->select([
                'id',
                'slug',
                'title',
                'type'
            ])
            ->where('type', ECategoryType::PHARMACOLOGY_POST)
            ->orWhere('type', ECategoryType::MEDICINAL_PLANTS_POST)
            ->get();
    }

    public function getEducatinalVideo()
    {
        return EducationalVideo::query()
            ->select([
                'id',
                'title',
                'youtube_link',
                'aparat_link',
                'is_active'
            ])
            ->with('images')
            ->where('is_active', 1)
            ->orderBy('id', 'ASC')
            ->get();
    }

    public function getPharmacologyPost()
    {
        return Post::query()
            ->select([
                'id',
                'title',
                'description'
            ])
            ->where('is_active', 1)
            ->whereHas('categories', function (Builder $query) {
                $query->where('type', ECategoryType::PHARMACOLOGY_POST);
            })
            ->with('images')
            ->limit(3)
            ->get();
    }

    public function getMedicinalPost()
    {
        return Post::query()
            ->select([
                'id',
                'title',
                'description'
            ])
            ->where('is_active', 1)
            ->whereHas('categories', function (Builder $query) {
                $query->where('type', ECategoryType::MEDICINAL_PLANTS_POST);
            })
            ->with('images')
            ->limit(3)
            ->get();
    }

    public function getCategoryFilter($category)
    {
        return Post::query()
            ->select([
                'id',
                'user_id',
                'title',
                'description'
            ])
            ->where('is_active', 1)
            ->whereHas('categories', function (Builder $query) use ($category) {
                $query->where('categories.slug', $category);
            })
            ->with(['images', 'users'])
            ->latest()
            ->paginate(10);


    }

}
