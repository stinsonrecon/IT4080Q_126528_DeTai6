<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PetitionRequest;
use App\Models\Petition;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PetitionDetailController extends Controller
{
    private $petition;
    public function __construct(Petition $petition)
    {
        $this->petition = $petition;
        $this->middleware(['auth']);
    }

    public function index($id)
    {
        //$petition=$this->petition->where('id_petition', '=', $id)->get();
        $petition=$this->petition->find($id);
        //$petition = Petition::where('id_petition', $id)->get();
        //dd($petition);
        return view('back-end.admin.petition.petitionDetail', ['petition' => $petition]);
    }

    public function update($id,Request $request){
        try{
            DB::beginTransaction();
            
            $data= [
                'reply'=>$request->reply,
                'status'=>'1'
            ];
            $this->petition->find($id)->update($data);
            DB::commit();
                session()->flash('success', 'Bạn đã trả lời đơn thành công.');
            return redirect()->route('petition.index'); 
        }
        catch(Exception $exception){
            DB::rollBack();
        }
    }
}
