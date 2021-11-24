<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;
use App\Models\Customer;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $orders = DB::table('orders')
        ->join('customer', 'customerID', '=','customer.id')
        ->select('customer.name', 'customer.address', 'customer.city','customer.phoneNumber', 'orders.statusPay', 'orders.statusDeli', 'orders.typePay', 'orders.note')
        ->paginate(10);

       return view('back-end.admin.order.order', compact('orders'));
    }

    public function create(){
        return view('back-end.admin.order.addOrder');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phoneNumber' => 'required|numeric',
            'statusPay' => 'required',
            'statusDeli' => 'required',
            'typePay' => 'required',
            'note' => 'required',
        ]);

        Orders::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'phoneNumber' => $request->phoneNumber,
        ]);

        Customer::create([
            'statusPay' => $request->statusPay,
            'statusDeli' => $request->statusDeli,
            'typePay' => $request->typePay,
            'note' => $request->note,
        ]);

       return redirect()->route('order.index');

        echo '<script language="javascript">alert("Thêm đơn hàng thành công!");</script>';
    }
}
