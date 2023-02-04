<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $table = "computers";

    protected $fillable = [
        'category',
        'ram',
        'hdd',
        'brand',
        'processor',
        'generation',
        'hali',
        'price',
        'picha',
        'status'
    ];

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function payment(){
        return $this->hasMany(Payments::class);
    }
}
