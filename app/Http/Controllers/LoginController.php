<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    public function register()
    {
        request()->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'password_confirmation' => 'required|string',
            'phone' => 'required|numeric|unique:users|max:10',
        ]);

        $check = User::where(['IDNumber'=>request()->regNumber])->first();
        dd($check);

            if(!$check){
                User::Create([
                    'username' => request('username'),
                    'password' => request('password'),
                    'phone' => request('phone'),
                ]);

                return redirect('/');
            }else{
                session()->flash('present','');
                return redirect('/');
            }

        if (request('password') == request('password_confirmation')) {
            
           
        }
    }
}
