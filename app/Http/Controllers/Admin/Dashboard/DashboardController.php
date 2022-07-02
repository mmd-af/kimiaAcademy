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
        $course = $this->dashboardRepository->getcoursesChart();
        $post = $this->dashboardRepository->getPostsChart();

        return view('admin.dashboard.index', [
            'postViewCount' => array_values($post),
            'postCreatedAt' => array_keys($post),
            'courseViewCount' => array_values($course),
            'courseCreatedAt' => array_keys($course)
        ]);
    }
}
