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
    //product
    Route::prefix('product')->group(function(){
        Route::get('/',function(){
            return view('back-end.admin.product.product');
        })->name('product.product');
    });
});