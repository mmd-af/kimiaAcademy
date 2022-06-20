<?php

namespace App\Http\Controllers\Site\Order;

use App\Http\Controllers\Controller;
use App\Repositories\Site\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class OrderController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function request(Request $request)
    {
        $loginEmail = Auth::user()->email;
        $loginPhone = Auth::user()->mobile_number;
        $courseId = $request->course_id;
        $course = $this->orderRepository->getCourse($courseId);
        if ($course->discount_price == 0 or $course->discount_price == null) {
            $credit = (int)$course->actual_price;
        } else {
            $credit = (int)$course->discount_price;
        }

        $invoice = new Invoice;
        $invoice->amount($credit);
        $invoice->detail(['mobile' => $loginPhone, 'email' => $loginEmail]);
        return Payment::purchase(
            $invoice,
            function ($driver, $transactionId) use ($credit, $courseId) {
                session()->put(['transactionId' => $transactionId, 'credit' => $credit, 'courseId' => $courseId]);
            }
        )->pay()->render();


    }

    public function callback()
    {
        $loginId = Auth::user()->id;
        $transactionId = session()->get('transactionId');
        $credit = session()->get('credit');
        $courseId = session()->get('courseId');
        try {
            $receipt = Payment::amount($credit)->transactionId($transactionId)->verify();
            $this->orderRepository->saveOrder($loginId,$courseId);
            // You can show payment referenceId to the user.
            echo $receipt->getReferenceId();
        } catch (InvalidPaymentException $exception) {
            echo $exception->getMessage();
        }
    }

}
