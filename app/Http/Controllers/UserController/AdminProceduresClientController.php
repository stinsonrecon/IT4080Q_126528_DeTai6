<?php

namespace App\Http\Controllers\UserController;

use App\Models\Applicant;
use App\Models\Petition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminProcedures;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProceduresClientController extends Controller
{
    public function index(){
        return view('frontend.content.adminProcedureContent.index');
    }

    public function search(Request $request){
        if($request->search){
            $queryProcedures = DB::table('admin_procedures')
            ->join('petitiontag', 'admin_procedures.id_tag', '=', 'petitiontag.id_tag')
            ->orWhere('admin_procedures.id_procedure', '=', $request->get('search'))
            ->orWhere('admin_procedures.title', 'like', '%'.$request->get('search').'%')
            ->orWhere('admin_procedures.agency_issued', 'like', '%'.$request->get('search').'%')
            ->orWhere('admin_procedures.implementing_agency', 'like', '%'.$request->get('search').'%')
            ->orWhere('petitiontag.name', 'like', '%'.$request->get('search').'%')
            ->get();
            $procedures = array();
            foreach($queryProcedures as $procedure){
                $procedures[] = AdminProcedures::find($procedure->id);
            }
        }
        return view('frontend.content.adminProcedureContent.showSearchRes', ['procedures' => $procedures, 'keyword' => $request->get('search')]);
    }

    public function show($id){
        $procedure = AdminProcedures::find($id);
        return view('frontend.content.adminProcedureContent.procedureDetail', ['procedure' => $procedure]);
    }
}
