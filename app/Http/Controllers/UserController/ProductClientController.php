<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;

class ProductClientController extends Controller
{
    function index(){
        $products = Product::where('status','=','1')->paginate(4);

        return view('front-end.contents.productList', ['products' => $products]);
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
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }

    function updateCart(Request $request){
        if($request->id && $request->quantity){
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);

            $carts = session()->get('cart');

            $cart_component = view('front-end.components.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cart_component, 'code' => 200], 200);
        }
    }

    function deleteCart(Request $request){
        if($request->id){
            $carts = session()->get('cart');
            unset($carts[$request->id]);
            
            session()->put('cart', $carts);

            $carts = session()->get('cart');

            $cart_component = view('front-end.components.cart_component', compact('carts'))->render();
            return response()->json(['cart_component' => $cart_component, 'code' => 200], 200);
        }
    }
}
