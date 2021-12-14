<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_applicant',
        'title',
        'content',
        'id_tag',
        'linkFile',
        'reply',
        'status'
    ];
    protected  $primaryKey = 'id_petition';

    protected $table = 'petition';

    protected $dates = ['created_at', 'updated_at'];

    public function applicant(){
        return $this->belongsTo(Applicant::class, 'id_applicant', 'id_applicant');
    }

    public function petition_tag(){
        return $this->belongsTo(PetitionTag::class, 'id_tag', 'id_tag');
    }
}
