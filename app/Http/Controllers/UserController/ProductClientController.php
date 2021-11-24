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
}
