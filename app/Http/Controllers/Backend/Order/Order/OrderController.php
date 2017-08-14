<?php

namespace App\Http\Controllers\Backend\Order\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

/**
 * Class UserStatusController.
 */
class OrderController extends Controller
{
    public function index ()
    {
        $orders = Order::paginate(15);
        return view('backend.order.index', [
            'orders' => $orders,
        ]);
    }
}
