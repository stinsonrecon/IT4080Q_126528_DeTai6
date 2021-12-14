<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_applicant',
        'id_type',
        'ssn',
        'full_name',
        'phone_number',
        'email',
        'matp',
        'maqh',
        'xaid',
        'optional_address'
    ];

    public $timestamps = false;

    protected $table = 'applicant';

    protected  $primaryKey = 'id_applicant';

    public function petition(){
        return $this->hasMany(Petition::class, 'id_applicant');
    }

    public function applicant_type(){
        return $this->belongsTo(ApplicantType::class, 'id_type', 'id_type');
    }

    public function city(){
        return $this->belongsTo(City::class,'matp', 'matp');
    }

    public function district(){
        return $this->belongsTo(District::class,'maqh', 'maqh');
    }

    public function ward(){
        return $this->belongsTo(Ward::class,'xaid', 'xaid');
    }
}
