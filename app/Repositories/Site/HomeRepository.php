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
            ->with('videos')
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
            ->limit(3)
            ->get();
    }

}
