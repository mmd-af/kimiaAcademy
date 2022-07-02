<?php

namespace App\Repositories\Admin;

use App\Models\Post\Post;

class DashboardRepository extends BaseRepository
{
    public function getPosts()
    {
       return Post::query()->select([
            'id',
            'view_count',
            'updated_at'
        ])
            ->orderBy('created_at')
            ->get();
    }

    public function getPostsChart()
    {
//        $posts= get
        $posts = collect($posts);
        $updatedAt = $posts->map(function ($item) {
//            return $item->updated_at;
//            return Carbon::parse($item->updated_at)->format('Y-m-d');
            return verta($item->updated_at)->format('Y/m/d');
        });

        $viewCount = $posts->map(function ($item) {
            return $item->view_count;
        });

        $result = [];
        foreach ($updatedAt as $i => $v) {
            if (!isset($result[$v])) {
                $result[$v] = 0;
            }
            $result[$v] += $viewCount[$i];
        }
    }

}
