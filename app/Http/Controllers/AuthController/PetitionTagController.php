<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\PetitionTag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetitionTagController extends Controller
{
    private $petitionTag;
    public function __construct(PetitionTag $petitionTag)
    {
        $this->petitionTag = $petitionTag;
        $this->middleware(['auth']);
    }

    public function index()
    {
        $petitionTags=$this->petitionTag->paginate(5);
        return view('back-end.admin.petitionTag.index', ['petitionTags' => $petitionTags]);
    }

    public function create(){
        return view('back-end.admin.petitionTag.add');
    }

    public function store(Request $request){
        try{
            DB::beginTransaction();
            
           
            $data= [
                'name' => $request->title,
            ];
           $this->petitionTag->create($data);
           DB::commit();
            session()->flash('success', 'Bạn đã thêm thành công.');
           return redirect()->route('petitionTag.index'); 
        }
        catch(Exception $exception){
            DB::rollBack();
        }
    }

    public function edit($id){
        $petitionTag=$this->petitionTag->find($id);
        return view('back-end.admin.petitionTag.edit',compact('petitionTag'));
    }

    public function update($id,Request $request){
        try{
            DB::beginTransaction();
            
            $data= [
                'name' => $request->title,
            ];
                    
           $this->petitionTag->find($id)->update($data);
           DB::commit();
            session()->flash('success', 'Bạn đã sửa thành công.');
           return redirect()->route('petitionTag.index'); 
        }
        catch(Exception $exception){
            DB::rollBack();
        }
    }
}