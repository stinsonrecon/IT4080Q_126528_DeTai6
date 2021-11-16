<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'startTime',
        'endTime',
        'limitTime'
    ];
    protected $table = 'promotion';
    public function products() {
        return $this->hasMany(Product::class, 'promoID', 'id');
    }
}
