<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\BankAccount;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    function index(){
        $banks = BankAccount::limit(6)->get();
        return view('front-end.contents.paymentMethod',compact('banks'));
    }
}
