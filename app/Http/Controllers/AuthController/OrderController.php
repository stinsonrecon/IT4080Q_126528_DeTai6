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

    public function index()
    {
        $orders = DB::table('orders')
            ->join('customer', 'customerID', '=', 'customer.id')
            ->select( 'customer.name', 'customer.address', 'customer.city', 'customer.phoneNumber', 'orders.id', 'orders.statusPay', 'orders.statusDeli', 'orders.typePay', 'orders.note')
            ->paginate(10);

        return view('back-end.admin.order.order', compact('orders'));
    }

    public function create()
    {
        return view('back-end.admin.order.addOrder');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'phoneNumber' => 'required|max:20|numeric',
            'statusPay' => 'required',
            'statusDeli' => 'required',
            'typePay' => 'required|max:255',

        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'phoneNumber' => $request->phoneNumber,
        ]);


        Orders::create([
            'statusPay' => $request->statusPay,
            'statusDeli' => $request->statusDeli,
            'typePay' => $request->typePay,
            'note' => $request->note,
            'customerID' => $customer->id,
        ]);


        session()->flash('success', 'Thêm mới đơn hàng thành công!');


        return redirect()->route('order.index');
    }

    public function delete($id)
    {
        Orders::where('id', $id)->delete();

        session()->flash('success', 'Xoá đơn hàng thành công!');

        return redirect()->route('order.index');
    }

    public function edit(Request $request, $id)
    {
        $orders = DB::table('orders')->find($id);
        $customers = DB::table('customer')->find($orders->customerID);
        return view('back-end.admin.order.editOrder', compact('customers', 'orders'));
    }

    public function update(Request $request, $id)
    {
        Orders::find($id)
            ->update([
                'statusPay' => $request->statusPay,
                'statusDeli' => $request->statusDeli,
                'typePay' => $request->typePay,
                'note' => $request->note,
            ]);

        Customer::where('customer.id', 'orders.customerID')
            ->update([
                'name' => $request->name,
                'address' => $request->address,
                'city' => $request->city,
                'phoneNumber' => $request->phoneNumber,
            ]);

        session()->flash('success', 'Cập nhật đơn hàng thành công!');

        return redirect()->route('order.index');
    }
}
