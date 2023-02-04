<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Stevebauman\Location\Facades\Location;

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

                return redirect('/login')
                    ->with('success', 'You have successfully registered');;
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

            return redirect('/login')
                ->with('error', 'Invalid username or password');
        }
        if ($check->password != request('password')) {

            return redirect('/login')
                ->with('error', 'Invalid username or password');
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

    public function logout(Request $request)
    {
        Auth::logout();

        session()->forget('logged');
        session()->forget('user');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // check ip
    public function checkIp()
    {
        // get user location
        $ip = request()->ip(); /* Static IP address */

        // $ip = '192.168.235.57'; /* Static IP address */
        $currentUserInfo = Location::get($ip);

        dd($currentUserInfo);
    }
}
