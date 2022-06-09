<?php

namespace App\Repositories\Site;


use App\Enums\ECategoryType;
use App\Models\Category\Category;
use App\Models\EducationalVideo\EducationalVideo;

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

    public function getPharmacologyCat()
    {
        return Category::query()
            ->select([
                'id',
                'type'
            ])
            ->with('posts')
            ->where('type', ECategoryType::PHARMACOLOGY_POST)
            ->get();
    }

}
