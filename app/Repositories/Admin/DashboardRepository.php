<?php

namespace App\Repositories\Admin;

use App\Models\Course\Course;
use App\Models\Post\Post;

class DashboardRepository extends BaseRepository
{
    public function getCourses()
    {
        return Course::query()->select([
            'id',
            'view_count',
            'created_at'
        ])
            ->orderBy('created_at')
            ->get();
    }

    public function getPosts()
    {
        return Post::query()->select([
            'id',
            'view_count',
            'created_at'
        ])
            ->orderBy('created_at')
            ->get();
    }

    public function getcoursesChart()
    {
        $posts = $this->getCourses();
        $updatedAt = $posts->map(function ($item) {
            return verta($item->created_at)->format('Y/m/d');
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
        return $result;
    }

    public function getPostsChart()
    {
        $posts = $this->getPosts();
        $updatedAt = $posts->map(function ($item) {
            return verta($item->created_at)->format('Y/m/d');
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
        return $result;
    }

}
