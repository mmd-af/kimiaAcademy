<?php

namespace App\Repositories\Site;

use App\Models\Course\Course;
use App\Models\Order\Order;
use App\Models\Transaction\Transaction;

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

    public function transactionStore($loginId, $transactionId, $credit, $courseId)
    {
        $transaction = new Transaction();
        $transaction->user_id = $loginId;
        $transaction->transaction_id = $transactionId;
        $transaction->credit = $credit;
        $transaction->course_id = $courseId;
        $transaction->pay_type = "zarinPal";
        $transaction->save();
        return $transaction;

    }

    public function getTransaction($transId)
    {
        return Transaction::query()
            ->select([
                'id',
                'user_id',
                'transaction_id',
                'credit',
                'course_id'
            ])
            ->where('id', $transId)
            ->first();
    }

    public function saveOrder($transaction)
    {
        $courseId = $transaction->course_id;
        $course = $this->getCourse($courseId);
        $order = new Order();
        $order->user_id = $transaction->user_id;
        $course->order()->save($order);
    }

    public function transactionUpdate($transaction, $receipt)
    {
        $transaction->ref_id = $receipt->getReferenceId();
        $transaction->status = 1;
        $transaction->save();
    }

}
