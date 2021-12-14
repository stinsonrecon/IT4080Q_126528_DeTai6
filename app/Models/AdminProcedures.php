<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProcedures extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_procedure',
        'title',
        'agency_issued',
        'implementing_agency',
        'content',
        'id_tag'
    ];

    protected $table = 'admin_procedures';

    protected $dates = ['created_at', 'updated_at'];

    protected  $primaryKey = 'id';

    public function petition_tag(){
        return $this->belongsTo(PetitionTag::class, 'id_tag', 'id_tag');
    }
}
