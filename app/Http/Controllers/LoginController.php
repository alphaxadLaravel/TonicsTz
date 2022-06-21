<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register(){
        request()->validate([
            'username'=>'required',
            'password1'=>'required',
            'password2'=>'required',
            'phone'=>'required',
       ]); 

       User::Create([
        'username'=>request('company'),
        'password'=>request('website'),
        'phone'=>request('website'),
    ]);


    }
}
