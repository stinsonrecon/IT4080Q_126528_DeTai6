<?php
namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Ward;
use Illuminate\Http\Request;

class WardsController extends Controller
{
    public function getWards(Request $request)
    {
        $wards = Ward::where('maqh', '=', $request->maqh)->orderBy('name')->get();
        return $wards;
    }

}
