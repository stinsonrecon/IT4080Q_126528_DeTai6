<?php

use App\Http\Controllers\UserController\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front-end.contents.home');
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/aboutus', function () {
    return view('front-end.contents.aboutus');
})->name("aboutus");
Route::get('/payment_method', function(){
    return view('front-end.contents.paymentMethod');
})->name("paymentMethod");
Route::get('/warranty_policy', function(){
    return view('front-end.contents.warrantyPolicy');
})->name("warrantyPolicy");
Route::get('/shipping_policy', function(){
    return view('front-end.contents.shippingPolicy');
})->name("shippingPolicy");
Route::get('/shopping_guide', function(){
    return view('front-end.contents.shoppingGuide');
})->name("shoppingGuide");
Route::get('/refund_regulation', function () {
    return view('front-end.contents.refundRegulation');
})->name('refundRegulation');
Route::get('/payment', function(){
    return view('front-end.contents.payForm');
})->name('payment');

//back-end
Route::get('/admin',function(){
    return view('back-end.login');
});

Route::prefix('admin')->group(function(){
    //home
    Route::get('/home',function(){
        return view('back-end.contents.home');
    })->name('admin.home');

    //slider
    Route::prefix('slider')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.slider.index');
        })->name('slider.index');
    });
});