<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'price'
    ];
    protected $table = 'orderdetail';
    public function product()
    {
        return $this->belongsTo(Product::class, 'productID');
    }
    public function orders()
    {
        return $this->belongsTo(Orders::class, 'orderID');
    }
}
