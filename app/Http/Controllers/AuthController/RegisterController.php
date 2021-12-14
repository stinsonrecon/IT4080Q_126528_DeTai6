<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('back-end.auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|confirmed|min:6',
        ]);

        Admin::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.home');
       
    }

    public function login(){
        return view('back-end.login');
    }
    public function customerLogin(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        //dd(Auth::attempt($request->only('username', 'password')));
        if (Auth::attempt($request->only('username', 'password'), $request->remember)) {
            $request->session()->regenerate();

            return redirect()->route('admin.home');
        }

        return back()->withErrors([
            'username' => 'Sai tên đăng nhập hoặc mật khẩu',
        ]);
        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
   }
}
