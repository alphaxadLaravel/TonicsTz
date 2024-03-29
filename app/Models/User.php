<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "users";

    protected $fillable = [
        'password',
        'username',
        'phone',
        'status',
    ];

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function payments(){
        return $this->hasMany(Payments::class);
    }
}
