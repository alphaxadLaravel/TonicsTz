<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = "carts";

    protected $fillable = [
        'user_id',
        'computer_id',
        'Quantity',
        'Total',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function computer(){
        return $this->belongsTo(Computer::class);
    }

    

}
