<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Orders;
use App\Models\Petition;
use App\Models\PetitionTag;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class AdminHomeController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }
    
    public function index(){
        $petitions = Petition::all();
        $colours = [];
        for ($i=0; $i<=count($petitions); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $petitionTag = PetitionTag::select(DB::raw("name as nameOfTag"))
                        ->pluck('nameOfTag');
        $idTagList = PetitionTag::select(DB::raw("id_tag as id"))
                        ->pluck('id');
        $petitionName = [];
        foreach($petitionTag as $index=>$value){
            $petitionName[] = $value;
        }
        //dd($petitionName);
        $petitionQuantity = [];
        foreach($idTagList as $index=>$value){
            $quantity = Petition::select(DB::raw("COUNT(*) as count"))->where('id_tag', '=', $value)->pluck('count');
            $petitionQuantity[] = $quantity[0];
        }
        //dd($petitionQuantity);

        $petitionStatus = Petition::select('status')->get();

        $petitionCount = Petition::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("month(created_at)"))
                ->pluck('count');
        $months = Petition::select(DB::raw("month(created_at) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("month(created_at)"))
                ->pluck('count');
        $data = [0,0,0,0,0,0,0,0,0,0,0,0];
        foreach($months as $index => $month){
            --$month;
            $data[$month] = $petitionCount[$index];
        }
        return view('back-end.contents.home', compact('petitions', 'petitionStatus', 'data', 'months', 'petitionCount', 'petitionTag', 'petitionName', 'petitionQuantity', 'colours'));       
    }
}
