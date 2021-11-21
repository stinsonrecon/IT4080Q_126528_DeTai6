<?php

use App\Http\Controllers\AuthController\BankController;
use App\Http\Controllers\AuthController\RegisterController;
use App\Http\Controllers\UserController\HomeController;
use App\Http\Controllers\UserController\PaymentMethodController;
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
Route::get('/payment_method', [PaymentMethodController::class,'paymentMethod'])->name("paymentMethod");
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

Route::get('/payment', [PaymentMethodController::class,'payment'])->name('payment');

Route::get('/contact', function(){
    return view('front-end.contents.contactMap');
})->name('contact');


//back-end
Route::get('/admin',function(){
    return view('back-end.login');
});

//register
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

//login
Route::get('/login',[RegisterController::class, 'login'])->name('login');
Route::post('/login',[RegisterController::class, 'customerLogin']);

//logout
Route::get('/logout',[RegisterController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function(){
    //home
    Route::get('/home',function(){
        return view('back-end.contents.home');
    })->name('admin.home')->middleware('auth');

    //bank
    Route::prefix('bank')->group(function(){
        Route::get('/',[
            BankController::class,'index']
        )->name('bank.index')->middleware('auth');
        Route::get('/create', [
            BankController::class, 'create'
        ])->name('bank.create')->middleware('auth');
        Route::post('/store', [
            BankController::class, 'store'
        ])->name('bank.store')->middleware('auth');
        Route::get('/edit/{id}', [
            BankController::class, 'edit'
        ])->name('bank.edit')->middleware('auth');
        Route::post('/update/{id}', [
            BankController::class, 'update'
        ])->name('bank.update')->middleware('auth');
        Route::get('/delete/{id}', [
            BankController::class, 'delete'
        ])->name('bank.delete')->middleware('auth');
    });
    //product
    Route::prefix('product')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.product.product');
        })->name('product.product')->middleware('auth');
    });

    //promotion
    Route::prefix('promotion')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.product.promotion');
        })->name('product.promotion')->middleware('auth');
    });

    //order
    Route::prefix('order')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.order.order');
        })->name('order.order')->middleware('auth');
    });

    //orderDetail
    Route::prefix('orderDetail')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.order.orderDetail');
        })->name('order.orderDetail')->middleware('auth');
    });

    //new
    Route::prefix('news')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.news');
        })->name('news')->middleware('auth');
    });
});