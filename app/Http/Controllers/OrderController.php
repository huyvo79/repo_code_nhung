<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\Role;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class OrderController extends Controller
{
    public function oder_detail(Request $request) {
        $order_id = $request->get('id');
        $order= Order::find($order_id);

       $data = [
           'order' => $order,
           'products' => $order->product,
       ];

        return view('order_detail.view', $data);
    }
}
