<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetitionTag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    protected $table = 'petitiontag';

    public $timestamps = false; 

    protected  $primaryKey = 'id_tag';

    public function petition(){
        return $this->hasMany(Petition::class, 'id_tag');
    }
}
