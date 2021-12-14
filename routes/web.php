<?php

use App\Http\Controllers\AuthController\AdminController;
use App\Http\Controllers\AuthController\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController\AdminHomeController;
use App\Http\Controllers\AuthController\AdminProceduresController;
use App\Http\Controllers\AuthController\PetitionController;
use App\Http\Controllers\AuthController\PetitionDetailController;
use App\Http\Controllers\AuthController\PetitionTagController;
use App\Http\Controllers\UserController\AdminProceduresClientController;
use App\Http\Controllers\UserController\PetitionClientController;
use App\Http\Controllers\UserController\CityController;
use App\Http\Controllers\UserController\DistrictController;
use App\Http\Controllers\UserController\WardsController;

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
//front-end
Route::get('/', function () {
    return view('frontend.content.home');
});

Route::get('/home', function () {
    return view('frontend.content.home');
});

Route::get('/aboutus', function () {
    return view('frontend.content.aboutus');
})->name('aboutUs');

Route::get('/petition_form', [CityController::class,'index'])->name('petitionForm');

Route::post('/petition_form', [PetitionClientController::class, 'store'])->name('petitionStore');

Route::post('getStates',[DistrictController::class,'getDistricts'])->name('getDistricts');

Route::post('getWards',[WardsController::class,'getWards'])->name('getWards');

Route::prefix('find_petition')->group(function(){
   Route::get("/",[PetitionClientController::class, 'index'])->name('clientPetition.index');

   Route::post("/search", [PetitionClientController::class, 'search'])->name('clientPetition.search');

   Route::get("/petition_detail/{id}", [PetitionClientController::class, 'petitionDetail'])->name('clientPetition.detail');

   Route::get("/petition_reply", [PetitionClientController::class, 'getAllReplied'])->name('client.allReplied');
});

Route::prefix('admin_procedure')->group(function(){
   Route::get("/",[AdminProceduresClientController::class, 'index'])->name('clientProcedure.index');

   Route::post("/search", [AdminProceduresClientController::class, 'search'])->name('clientProcedure.search');

   Route::get("/detail/{id}", [AdminProceduresClientController::class, 'show'])->name('clientProcedure.detail');
});

Route::get('/testForm', function(){
   return view('frontend.content.testForm');
});


//back-end

//register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//login
Route::get('/login', [RegisterController::class, 'login'])->name('login');
Route::post('/login', [RegisterController::class, 'customerLogin']);

//logout
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {
    //home

    Route::get('/home', [
        AdminHomeController::class, 'index'
    ])->name('admin.home')->middleware('auth');

    Route::get('/', [
       AdminHomeController::class, 'index'
    ])->middleware('auth');

    //admin
   route::get('/index',[
      AdminController::class,'index'
   ])->name('admin.index');
   route::get('/create',[
      AdminController::class,'create'
   ])->name('admin.create');
   route::post('/store',[
      AdminController::class,'store'
   ])->name('admin.store');
   route::get('/delete/{id}',[
      AdminController::class,'delete'
   ])->name('admin.delete');
   route::get('/edit/{id}',[
      AdminController::class,'edit'
   ])->name('admin.edit');
   route::post('/update/{id}',[
      AdminController::class,'update'
   ])->name('admin.update');

    //petition
   Route::prefix('petition')->group(function () {
      Route::get('/', [
         PetitionController::class, 'index'
      ])->name('petition.index');
      Route::get('/test', [PetitionController::class, 'test']);
      Route::post('/search', [
         PetitionController::class, 'search'
      ])->name('petition.search');
      Route::post('/sort', [PetitionController::class, 'sort'])->name('petition.sort');
   });

    //petitionDetail
   Route::prefix('petitionDetail')->group(function () {
      Route::get('/{id}', [
         PetitionDetailController::class, 'index'
      ])->name('petitionDetail.index');
      Route::post('/update/{id}', [
         PetitionDetailController::class, 'update'
      ])->name('petitionDetail.update');
   });

    //petitionTag
   Route::prefix('petitionTag')->group(function () {
      Route::get('/', [
          PetitionTagController::class, 'index'
      ])->name('petitionTag.index');
      Route::get('/create', [
         PetitionTagController::class, 'create'
      ])->name('petitionTag.create');
      Route::post('/store', [
         PetitionTagController::class, 'store'
      ])->name('petitionTag.store');
      Route::get('/edit/{id}', [
         PetitionTagController::class, 'edit'
     ])->name('petitionTag.edit');
     Route::post('/update/{id}', [
      PetitionTagController::class, 'update'
     ])->name('petitionTag.update');
   });

   //adminProcedure
   Route::prefix('admin_procedure')->group(function(){
      Route::get('/', [
         AdminProceduresController::class, 'index'
      ])->name('adminProcedure.index');
      Route::get('/create', [
         AdminProceduresController::class, 'create'
      ])->name('adminProcedure.create');
      Route::get('/edit/{id}', [
         AdminProceduresController::class, 'edit'
      ])->name('adminProcedure.edit');
      Route::post('/store', [
         AdminProceduresController::class, 'store'
      ])->name('adminProcedure.store');
      Route::post('/update/{id}', [
         AdminProceduresController::class, 'update'
      ])->name('adminProcedure.update');
      Route::get('/delete/{id}', [
         AdminProceduresController::class, 'delete'
      ])->name('adminProcedure.delete');
   });
});
