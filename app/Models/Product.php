<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'name',
        'amount',
        'price',
        'general',
        'level',
        'img1',
        'img2',
        'img3',
        'created_at',
        'updated_at'
    ];
    public function scopeSearch($queryData)
    {
        if($searchData = request()->search){
            $queryData = $queryData->where('name','like','%'.$searchData.'%');
        }
        return $queryData;
    }
    public function cart()
{
    return $this->hasMany(Cart::class, 'idCart');
}
}  
