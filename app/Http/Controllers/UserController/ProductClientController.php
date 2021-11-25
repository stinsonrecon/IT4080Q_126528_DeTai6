<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\BankAccount;
use App\Models\Promotion;
use Illuminate\Http\Request;

class ProductClientController extends Controller
{
    function index(){
        $products = Product::where('status','=','1')->paginate(4);

        return view('front-end.contents.productList', ['products' => $products]);
    }

    function addCartByAmount(Request $request){
        $id = $request->idProduct;
        $product = Product::find($id);
        $cart = session()->get('cart');
        if(isset($cart[$id])){
            $cart[$id]['quantity'] +=  $request->amount;
        } else{
            $cart[$id] = [
                'name' => $product->name,
                'priceRoot' => $product->priceRoot,
                'pricePromo' => $product->pricePromo,
                'linkImg' => $product->linkImg,
                'quantity' => $request->amount,
                'promoID' => $product->promoID
            ];
        }
        session()->put('cart', $cart);
        $banks = BankAccount::limit(6)->get();
        $carts = session()->get('cart');
        return view('front-end.contents.payForm', ['banks' => $banks, 'carts' => $carts]);
    }

    function addToCart($id){
        $product = Product::find($id);

        $cart = session()->get('cart');

        if(isset($cart[$id])){
            $cart[$id]['quantity'] +=  1;
        } else{
            $cart[$id] = [
                'name' => $product->name,
                'priceRoot' => $product->priceRoot,
                'pricePromo' => $product->pricePromo,
                'linkImg' => $product->linkImg,
                'quantity' => 1,
                'promoID' => $product->promoID
            ];
        }
        $count = 0;
        foreach ($cart as $c) {
            $count += $c['quantity'];
        }
        session()->put('cart', $cart);

        return response()->json([
            'code' => 200,
            'message' => 'success',
            'quantity' => $count
        ], 200);
    }

    function updateCart(Request $request){
        if($request->id && $request->quantity){
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            //tính tổng tiền cho riêng sản phẩm theo id đấy
            if ($carts[$request->id]['promoID'] != NULL){
                $total = $carts[$request->id]['quantity']*$carts[$request->id]['pricePromo'];
            } else {
                $total = $carts[$request->id]['quantity']*$carts[$request->id]['priceRoot'];
            }
            //đếm số lượng tổng sản phẩm để cập nhật header
            $count = 0;
            foreach ($carts as $c) {
                $count += $c['quantity'];
            }
            //tính tổng tiền cho hóa đơn
            $totalBill = 0;
            foreach ($carts as $c) {
                if ($c['promoID'] != NULL){
                    $totalBill += $c['quantity']*$c['pricePromo'];
                } else {
                    $totalBill += $c['quantity']*$c['priceRoot'];
                }
            }
            return response()->json([
                'id' => $request->id,
                'total' => $total,
                'quantityTotal' => $count,
                'totalBill' => $totalBill,
                'code' => 200
            ], 200);
        }
    }

    function deleteCart(Request $request){
        if($request->id){
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            
            session()->put('cart', $carts);

            $carts = session()->get('cart');
            $count = 0;
            foreach ($carts as $c) {
                $count += $c['quantity'];
            }
            $totalBill = 0;
            foreach ($carts as $c) {
                if ($c['promoID'] != NULL){
                    $totalBill += $c['quantity']*$c['pricePromo'];
                } else {
                    $totalBill += $c['quantity']*$c['priceRoot'];
                }
            }
            $cart_component = view('front-end.components.cart_component', compact('carts'))->render();
            return response()->json([
                'cart_component' => $cart_component, 
                'quantityTotal' => $count,
                'totalBill' => $totalBill,
                'code' => 200
            ], 200);
        }
    }
}
