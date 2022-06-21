<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = "checkouts";

    protected $fillable = [
        'user_id',
        'computer_id',
        'Quantity',
        'Amount',
        'Phone',
        'branch',
        'Region',
        'district',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function computer(){
        return $this->belongsTo(Computer::class);
    }

}
