<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    protected $table = 'applicanttype';

    public $timestamps = false;

    public function applicant(){
        return $this->hasMany(Applicant::class, 'id_type');
    }
}
