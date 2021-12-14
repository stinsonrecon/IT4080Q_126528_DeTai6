<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\AdminProcedures;
use App\Models\PetitionTag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProceduresController extends Controller
{
    private $admin_procedure;

    public function __construct(AdminProcedures $admin_procedure)
    {
        $this->admin_procedure = $admin_procedure;
        $this->middleware(['auth']);
    }

    public function index(){
        $admin_procedures = $this->admin_procedure->paginate(5);
        return view('back-end.admin.adminProcedure.index', compact('admin_procedures'));
    }

    public function create(){
        $petition_tags = PetitionTag::all();
        return view('back-end.admin.adminProcedure.add', compact('petition_tags'));
    }

    public function edit($id){
        $petition_tags = PetitionTag::all();
        $admin_procedure = $this->admin_procedure->find($id);

        return view('back-end.admin.adminProcedure.edit', ['petition_tags' => $petition_tags, 'admin_procedure' => $admin_procedure]);
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'agency_issued' => $request->agency_issued,
            'implementing_agency' => $request->implementing_agency,
            'content'=>$request->content,
            'id_tag'=>$request->id_tag
        ];

        $digits = 5;
        $number = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
        $idProcedure = $request->id_tag.'.'.$number;
        $check = $this->admin_procedure->select('id_procedure')->get();
        for ($i=0; $i < $check->count(); $i++) { 
            if ($idProcedure == $check[$i]) {
                $number = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
                $idProcedure = $request->id_tag.'.'.$number;
                $i=-1;
            }
        }
        $data['id_procedure'] = $idProcedure;
        
        $this->admin_procedure->create($data);

        session()->flash('success', 'Thêm mới thủ tục hành chính thành công!');


        return redirect()->route('adminProcedure.index');
    }

    public function update($id, Request $request){
        try{
            DB::beginTransaction();
            
            $data= [
                'title' => $request->title,
                'agency_issued' => $request->agency_issued,
                'implementing_agency' => $request->implementing_agency,
                'content'=>$request->content,
                'id_tag'=>$request->id_tag
            ];
                    
            $this->admin_procedure->find($id)->update($data);
            DB::commit();
            session()->flash('success', 'Bạn đã sửa thành công.');
            return redirect()->route('adminProcedure.index'); 
        }
        catch(Exception $exception){
            DB::rollBack();
        }
    }

    public function delete($id){
        $n = $this->admin_procedure->find($id);

        $n->delete();
        session()->flash('success', 'Bạn đã xóa thành công.');
        return redirect()->route('adminProcedure.index');
    }
}
