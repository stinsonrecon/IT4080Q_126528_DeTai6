<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\OrderDetail;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index($orderId)
    {
        $orderDetails =  DB::table('orderDetail')
        ->join('product', 'productID', '=', 'product.id')
        ->select('product.name', 'orderDetail.price', 'orderDetail.quantity','orderDetail.productID')
        ->where('orderID', $orderId)
        ->get();
        return view('back-end.admin.order.orderDetail', compact('orderDetails'));
    }

    public function create()
    {
        return view('back-end.admin.order.addOrderDetail');
    }

}
