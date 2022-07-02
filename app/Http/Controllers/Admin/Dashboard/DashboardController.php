<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Repositories\Admin\DashboardRepository;

class DashboardController extends Controller
{
    protected $dashboardRepository;

    public function __construct(DashboardRepository $dashboardRepository)
    {
        $this->dashboardRepository = $dashboardRepository;
    }

    public function index()
    {
        $order = $this->dashboardRepository->getChart("Transaction");
        $course = $this->dashboardRepository->getChart("Course");
        $post = $this->dashboardRepository->getChart("Post");

        return view('admin.dashboard.index', [
            'orderViewCount' => array_values($order),
            'orderCreatedAt' => array_keys($order),
            'postViewCount' => array_values($post),
            'postCreatedAt' => array_keys($post),
            'courseViewCount' => array_values($course),
            'courseCreatedAt' => array_keys($course)
        ]);
    }
}
