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
            'phone' => 'required|numeric|unique:users|min:9|max:11',
        ]);
        

        if (request('password') == request('password_confirmation')) {
            $check = User::where(['username'=>request()->username])->first();

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
           
        }
    }

    public function login(){
        request()->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        

        $check = User::where(['username'=>request()->username])->first();
        dd($check);

        if(!$check){
            
            session()->flash('none','');
            return redirect('/');
        } if($check->password != request('password')){
            
            session()->flash('none','');
            return redirect('/');
        }
        elseif($check->status == "admin" || $check->status == "user"){

            request()->session()->put('user',$check);
            return redirect('/');
        }
    }
}
