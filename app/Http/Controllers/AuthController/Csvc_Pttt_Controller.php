<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Csvc_Pttt_Controller extends Controller
{
    public function indexa(){
        $file=fopen(storage_path("app/public/chinhsachvanchuyen.txt"), "r");
       
        return view('back-end.admin.csvc_pttt.csvc',compact('file'));
    }
    public function storea(Request $request){
        $file1=fopen(storage_path("app/public/chinhsachvanchuyen.txt"), "w+");
        fwrite($file1, $request->content);
        fclose($file1);
        $file=fopen(storage_path("app/public/chinhsachvanchuyen.txt"), "r");
        session()->flash('success', 'Bạn đã sửa thành công.');
        return view('back-end.admin.csvc_pttt.csvc',compact('file'));
        
    }

    public function indexb(){
        $file=fopen(storage_path("app/public/phuongthucthanhtoan.txt"), "r");
       
        return view('back-end.admin.csvc_pttt.pttt',compact('file'));
    }
    public function storeb(Request $request){
        $file1=fopen(storage_path("app/public/phuongthucthanhtoan.txt"), "w+");
        fwrite($file1, $request->content);
        fclose($file1);
        $file=fopen(storage_path("app/public/phuongthucthanhtoan.txt"), "r");
        session()->flash('success', 'Bạn đã sửa thành công.');
        return view('back-end.admin.csvc_pttt.pttt',compact('file'));
        
    }
}
