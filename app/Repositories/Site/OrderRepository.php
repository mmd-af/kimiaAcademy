<?php

namespace App\Repositories\Site;

use App\Models\Course\Course;

class OrderRepository
{
    public function getCourse($request)
    {
        return Course::query()
            ->select([
                'id',
                'actual_price',
                'discount_price'
            ])
            ->where('id', $request->course_id)
            ->first();
    }
}
