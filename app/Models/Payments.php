<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'computer_id',
        'mkoa',
        'mahali',
        'payment',
        'Phone',
    ];

    // user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // computer
    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
