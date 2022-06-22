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
            'username' => 'required|string|min:3|max:8',
            'password' => 'required|string|min:4|max:8',
            'password_confirmation' => 'required|string',
            'phone' => 'required|digits:10'
        ]);

        if (request('password') == request('password_confirmation')) {
            $check = User::where(['username' => request()->username])->first();

            if (!$check) {
                User::Create([
                    'username' => request('username'),
                    'password' => request('password'),
                    'phone' => request('phone'),
                    'status' => "user",
                ]);

                return redirect('/login');
            } else {
                session()->flash('present', '');
                return redirect('/login');
            }
        }
    }

    public function login()
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $check = User::where(['username' => request()->username])->first();

        if (!$check) {

            session()->flash('none', '');
            return redirect('/login');
        }
        if ($check->password != request('password')) {

            session()->flash('none', '');
            return redirect('/login');
        } elseif ($check->status == "admin" || $check->status == "user") {

            if ($check->status == "admin") {
                request()->session()->put('user', $check);
                request()->session()->put('logged', "Yes");

                return redirect('/add');
            } elseif ($check->status == "user") {
                request()->session()->put('user', $check);
                request()->session()->put('logged', "Yes");

                return redirect('/tafuta_out');
            }
        }
    }
}
