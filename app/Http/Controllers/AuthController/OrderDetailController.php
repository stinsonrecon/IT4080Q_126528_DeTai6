<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\OrderDetail;
use App\Models\Orders;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            ->select('orderID', 'product.name', 'orderDetail.price', 'orderDetail.quantity', 'orderDetail.productID')
            ->where('orderID', $orderId)
            ->get();
        $data = Orders::join('customer', 'customerID', '=', 'customer.id')
                            ->select('customer.name','idBanking')
                            ->where('orders.id', '=', $orderId)->first();
        return view('back-end.admin.order.orderDetail', compact('orderDetails', 'data', 'orderId'));
    }

    public function create($id)
    {
        $orders = Orders::join('customer', 'customerID', '=', 'customer.id')
            ->select('idBanking', 'name', 'phoneNumber', 'orders.id')
            ->where('orders.id', '=', $id)
            ->first();
        $products = Product::select('id', 'name')->get();
        return view('back-end.admin.order.addOrderDetail', compact('orders', 'products'));
    }

    public function store(Request $request)
    {
        $detail = OrderDetail::where('orderID', '=', $request->orderID)
            ->where('productID', '=', $request->product)->first();
        if ($detail) {
            $detail->quantity += $request->quantity;
            $detail->save();
        } else {
            $detail = new OrderDetail([
                'orderID' => $request->orderID,
                'productID' => $request->product,
                'quantity' => $request->quantity
            ]);
            $p = Product::where('id', '=', $request->product)->first();
            if ($p->promoID) {
                $promo = Promotion::where('id', '=', $p->promoID)->first();
                if ($promo->endTime) {
                    $endTime = Carbon::create($promo->endTime, 7);
                    $now = Carbon::now(7);
                    if ($now > $endTime) {
                        $detail->price = $p->pricePromo;
                    } else {
                        $detail->price = $p->priceRoot;
                    }
                } else{
                    $detail->price = $p->pricePromo;
                }
            } else {
                $detail->price = $p->priceRoot;
            }
        }
        $detail->save();
        $orderId = $request->orderID;
        $orderDetails =  DB::table('orderDetail')
            ->join('product', 'productID', '=', 'product.id')
            ->select('orderID', 'product.name', 'orderDetail.price', 'orderDetail.quantity', 'orderDetail.productID')
            ->where('orderID', $orderId)
            ->get();
        $data = Orders::join('customer', 'customerID', '=', 'customer.id')
                            ->select('customer.name','idBanking')
                            ->where('orders.id', '=', $orderId)->first();
        
        return view('back-end.admin.order.orderDetail', compact('orderDetails', 'data', 'orderId'));
    }

    public function delete($id, $oID){
        $detail = OrderDetail::where('productID', '=', $id)->where('orderID', '=', $oID)->first();
        $detail->delete();
        session()->flash('success', 'Bạn đã xóa thành công.');
        return redirect()->back();
    }
}
