<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $products = Product::where('status','=','1')->get();

        return view('front-end.contents.home', ['products' => $products]);
    }

    function show($id){
        $product = Product::find($id);

        $promo = $product->promotion;

        $products = Product::where('status','=','1')->get();

        return view('front-end.contents.productDetail', ['product' => $product, 'promo' => $promo, 'products' => $products]);
    }
}
