<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post\Post;
use App\Repositories\Admin\DashboardRepository;
use Carbon\Carbon;

class DashboardController extends Controller
{
    protected $dashboardRepository;

    public function __construct(DashboardRepository $dashboardRepository)
    {
        $this->dashboardRepository = $dashboardRepository;
    }

    public function index()
    {

        $posts = Post::query()->select([
            'id',
            'view_count',
            'updated_at'
        ])
            ->orderBy('created_at')
            ->get();

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

//        dd(array_values($result), array_keys($result));
//        return view('admin.dashboard.index');


        return view('admin.dashboard.index', [
            'viewCount' => array_values($result),
            'updatedAt' => array_keys($result)
        ]);



    }
}
