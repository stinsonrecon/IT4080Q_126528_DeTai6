<?php

namespace App\Http\Controllers\UserController;

use App\Models\Applicant;
use App\Models\Petition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PetitionClientController extends Controller
{
    public function store(Request $request){
        $applicant = new Applicant([
            'id_type' => $request->applicantType,
            'ssn' => $request->ssn,
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'matp' => $request->city,
            'maqh' => $request->district,
            'xaid' => $request->ward,
            'optional_address' => $request->option_address
        ]);

        if($request->ssn != NULL){
            if(Applicant::where('ssn',$request->ssn)->exists() == false){
                $applicant->save();
    
                // $applicant = Applicant::where('ssn',$request->ssn)->get();
                //dd($applicant);
    
                $petition = new Petition([
                    'id_applicant' => $applicant->id_applicant,
                    'title' =>$request->title,
                    'content' => $request->content,
                    'id_tag' => $request->petitionTag
                ]);
                $dataFile = array();
        
                if ($request->hasFile('optionalFile')) {
                    $file = $request->optionalFile;
                    $fileNameOrigin = $file->getClientOriginalName();
                    $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalName();
        
                    $filePath = $request->file('optionalFile')->storeAs('public/file', $fileNameHash);
                    $dataFile = [
                        'file_name' => $fileNameHash,
                        'file_path' => Storage::url($filePath)
                    ];
                }
        
                if(!empty($dataFile)){
                    $petition->linkFile = $dataFile['file_name'];
                }
                else{
                    $petition->linkFile = NULL;
                }
                //dd($applicant->id);
                $petition->save();
                return view('frontend.content.home'); 
            }
            else{
                $findApplicant = Applicant::where('ssn','=', $request->ssn)->get();
    
                $petition = new Petition([
                    'id_applicant' => $findApplicant[0]->id_applicant ,
                    'title' =>$request->title,
                    'content' => $request->content,
                    'id_tag' => $request->petitionTag
                ]);
                $dataFile = array();
        
                if ($request->hasFile('optionalFile')) {
                    $file = $request->optionalFile;
                    $fileNameOrigin = $file->getClientOriginalName();
                    $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalName();
        
                    $filePath = $request->file('optionalFile')->storeAs('public/file', $fileNameHash);
                    $dataFile = [
                        'file_name' => $fileNameHash,
                        'file_path' => Storage::url($filePath)
                    ];
                }
        
                if(!empty($dataFile)){
                    $petition->linkFile = $dataFile['file_name'];
                }
                else{
                    $petition->linkFile = NULL;
                }
                //dd($applicant->id_applicant);
                $petition->save();
                return view('frontend.content.home');
            }
        }
        else{
            $applicant->save();

            $petition = new Petition([
                'id_applicant' => $applicant->id_applicant,
                'title' =>$request->title,
                'content' => $request->content,
                'id_tag' => $request->petitionTag
            ]);
            $dataFile = array();
    
            if ($request->hasFile('optionalFile')) {
                $file = $request->optionalFile;
                $fileNameOrigin = $file->getClientOriginalName();
                $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalName();
    
                $filePath = $request->file('optionalFile')->storeAs('public/file', $fileNameHash);
                $dataFile = [
                    'file_name' => $fileNameHash,
                    'file_path' => Storage::url($filePath)
                ];
            }
    
            if(!empty($dataFile)){
                $petition->linkFile = $dataFile['file_name'];
            }
            else{
                $petition->linkFile = NULL;
            }
            //dd($applicant->id);
            $petition->save();
            return view('frontend.content.home'); 
        }
    }

    public function index(){
        $petitions = Petition::limit(5)->where('status', '=', '1')->orderBy('updated_at','DESC')->get();
        return view('frontend.content.findPetitionContent.searchPetition', ['petitions' => $petitions]);
    }

    public function search(Request $request){
        if($request->search){
            $queryPetitions = DB::table('petition')
            ->join('applicant', 'petition.id_applicant', '=', 'applicant.id_applicant')
            ->orWhere('applicant.ssn', '=', $request->get('search'))
            ->orWhere('applicant.full_name', 'like', '%'.$request->get('search').'%')
            ->get();
            $petitions = array();
            foreach($queryPetitions as $petition){
                $petitions[] = Petition::find($petition->id_petition);
            }
        }
        return view('frontend.content.findPetitionContent.showPetition', ['petitions' => $petitions, 'keyword' => $request->get('search')]);
    }

    public function petitionDetail($id){
        $petition = Petition::find($id);
        return view('frontend.content.findPetitionContent.petitionDetail', ['petition' => $petition]);
    }

    public function getAllReplied(){
        $petitions = Petition::where('status', '=', '1')->orderBy('updated_at','DESC')->paginate(5);
        return view('frontend.content.findPetitionContent.allPetitionReply', ['petitions' => $petitions]);
    }
}
