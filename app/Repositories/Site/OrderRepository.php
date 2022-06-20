<?php

namespace App\Repositories\Site;

use App\Models\Course\Course;
use App\Models\Order\Order;

class OrderRepository
{
    public function getCourse($courseID)
    {
        return Course::query()
            ->select([
                'id',
                'actual_price',
                'discount_price'
            ])
            ->where('id', $courseID)
            ->first();
    }

    public function saveOrder($loginId, $courseId)
    {
        $course = $this->getCourse($courseId);
        $order = new Order();
        $order->user_id = $loginId;
        $course->order()->save($order);
    }

}
