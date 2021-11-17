<?php

use App\Http\Controllers\AuthController\BankController;
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
Route::get('/contact', function(){
    return view('front-end.contents.contactMap');
})->name('contact');

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
    Route::prefix('bank')->group(function(){
        Route::get('/',[
            BankController::class,'index']
        )->name('bank.index');
        Route::get('/create', [
            BankController::class, 'create'
        ])->name('bank.create');
        Route::post('/store', [
            BankController::class, 'store'
        ])->name('bank.store');
        Route::get('/edit/{id}', [
            BankController::class, 'edit'
        ])->name('bank.edit');
        Route::post('/update/{id}', [
            BankController::class, 'update'
        ])->name('bank.update');
        Route::get('/delete/{id}', [
            BankController::class, 'delete'
        ])->name('bank.delete');
    });
    //product
    Route::prefix('product')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.product.product');
        })->name('product.product');
    });

    //promotion
    Route::prefix('promotion')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.product.promotion');
        })->name('product.promotion');
    });

    //order
    Route::prefix('order')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.order.order');
        })->name('order.order');
    });

    //orderDetail
    Route::prefix('orderDetail')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.order.orderDetail');
        })->name('order.orderDetail');
    });

    //customer
    Route::prefix('customer')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.order.customer');
        })->name('order.customer');
    });
});