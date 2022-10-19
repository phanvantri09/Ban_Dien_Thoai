<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable=
    [
        'idProduct',
        'idUser',
        'amount',
        'genaral',
        'created_at',
        'updated_at'
    ];
    public function product()
{
    return $this->belongsTo(Product::class, 'idCart');
}
}
