<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Petition;
use App\Models\PetitionTag;
use phpDocumentor\Reflection\Types\Null_;

class PetitionController extends Controller
{
    private $petition;

    public function __construct(Petition $petition)
    {
        $this->petition=$petition;
        $this->middleware(['auth']);
    }
    public function index(){
        $cities = City::orderBy('name')->get();
        $petitionTags = PetitionTag::all();
        $petitions=$this->petition->orderBy('status','ASC')->orderBy('created_at','DESC')->paginate(5);
        return view('back-end.admin.petition.index', ['petitions' => $petitions, 'cities' => $cities, 'petitionTags' => $petitionTags]);
    }

    public function search(Request $request){
        $cities = City::orderBy('name')->get();
        $petitionTags = PetitionTag::all();

        if($request->search){
            $queryPetitions = DB::table('petition')
            ->join('petitiontag', 'petition.id_tag', '=', 'petitiontag.id_tag')
            ->join('applicant', 'petition.id_applicant', '=', 'applicant.id_applicant')
            ->where('name', 'like', '%'.$request->get('search').'%')
            ->orWhere('applicant.ssn', '=', $request->get('search'))
            ->orWhere('applicant.full_name', 'like', '%'.$request->get('search').'%')
            ->get();
            $petitions = array();
            foreach($queryPetitions as $petition){
                $petitions[] = Petition::find($petition->id_petition);
            }
        } else {
            $petitions=$this->petition->paginate(5);
        }
        return view('back-end.admin.petition.index', ['petitions' => $petitions, 'cities' => $cities, 'petitionTags' => $petitionTags]);
    }

    public function sort(Request $request){
        $data = [
            'matp' => $request->city,
            'maqh' => $request->district,
            'xaid' => $request->ward,
            'id_tag' => $request->petitionTag
        ];

        $cities = City::orderBy('name')->get();
        $petitionTags = PetitionTag::all();

        if($data['matp'] != NULL){
            $queryPetitions = DB::table('petition')
            ->join('applicant', 'petition.id_applicant', '=', 'applicant.id_applicant')
            ->where('matp', '=', $data['matp'])->orWhere('maqh', '=', $data['maqh'])->orWhere('xaid', '=', $data['xaid'])->orWhere('id_tag', '=', $data['id_tag'])->get();

            $petitions = array();
            foreach($queryPetitions as $petition){
                $petitions[] = Petition::find($petition->id_petition);
            }
        }
        else if($data['id_tag'] != Null){
            $queryPetitions = DB::table('petition')
            ->join('applicant', 'petition.id_applicant', '=', 'applicant.id_applicant')
            ->where('id_tag', '=', $data['id_tag'])->orWhere('matp', '=', $data['matp'])->orWhere('maqh', '=', $data['maqh'])->orWhere('xaid', '=', $data['xaid'])->get();

            $petitions = array();
            foreach($queryPetitions as $petition){
                $petitions[] = Petition::find($petition->id_petition);
            }
        }
        else{
            $petitions=$this->petition->orderBy('status','ASC')->orderBy('created_at','DESC')->paginate(5);
        }
        //dd($petitions);
        return view('back-end.admin.petition.index', ['petitions' => $petitions, 'cities' => $cities, 'petitionTags' => $petitionTags]);
    }
}
