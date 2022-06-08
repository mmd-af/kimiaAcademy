<?php

namespace App\Repositories\Site;


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

}
