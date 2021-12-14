<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\ApplicantType;
use App\Models\City;
use App\Models\PetitionTag;

class CityController extends Controller
{
    public function index(){
        $cities = City::orderBy('name')->get();
        $applicant_types = ApplicantType::all();
        $petition_tags = PetitionTag::all();
        return view('frontend.content.petitionForm',['cities' => $cities,'applicant_types' => $applicant_types,'petition_tags' => $petition_tags]);
    }
}
