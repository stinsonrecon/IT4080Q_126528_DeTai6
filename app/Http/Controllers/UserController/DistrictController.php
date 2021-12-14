<?php
namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getDistricts(Request $request)
    {
        $districts = District::where('matp', '=', $request->matp)->orderBy('name')->get();
        return $districts;
    }
}
