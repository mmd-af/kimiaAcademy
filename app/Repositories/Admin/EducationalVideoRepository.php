<?php

namespace App\Repositories\Admin;
;

use App\Models\Category\Category;
use App\Models\EducationalVideo\EducationalVideo;

class EducationalVideoRepository
//    extends BaseRepository
{
//    public function __construct(Course $model)
//    {
//        $this->setModel($model);
//    }

    public function getAll()
    {
        return EducationalVideo::query()
            ->select([
                'id',
                'youtube_link',
                'aparat_link',
                'is_active'
            ])
            ->get();

    }

    public function getLatest()
    {
        return EducationalVideo::query()
            ->select([
                'id',
                'youtube_link',
                'aparat_link',
                'is_active'
            ])
            ->latest()
            ->paginate(10);

    }


    public function store($request)
    {

        $item = new EducationalVideo();
        $item->youtube_link = $request->input('youtube_link');
        $item->aparat_link = $request->input('aparat_link');
        $item->is_active = $request->input('is_active');
        $item->save();
        return $item;

    }

    public function update($request, $educational)
    {
        $educational->youtube_link = $request->input('youtube_link');
        $educational->aparat_link = $request->input('aparat_link');
        $educational->is_active = $request->input('is_active');
        $educational->save();
        return $educational;
    }
}
