<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\Checkout;
use App\Models\Bank;
use Session;

class CartControllre extends Controller
{
    public function showCart()
    {

        $user_id = session()->get('user')['id'];

        $cart = Cart::where('user_id', $user_id)->get();

        return view("common.cart", ['cart' => $cart]);
    }

    public function checkOut($id)
    {

        $cart_data = Cart::where('user_id', $id)->get();


        return view("users.checkouts", ['cart_data' => $cart_data]);
    }

    public function makePayments()
    {

        request()->validate([
            'mkoa' => 'required|string',
            'wilaya' => 'required|string',
            'payment' => 'required|string',
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);

        $user_id = session()->get('user')['id'];
        $check = Bank::where('phone', request("phone"))->where('password', request("password"))->where('branch', request("payment"))->first();

        $cart_data = Cart::where('user_id', $user_id)->get();

        foreach ($cart_data as $data) {
            Checkout::create([
                'user_id' => $user_id,
                'computer_id' => $data->computer_id,
                'Quantity' => $data->Quantity,
                'Amount' => $data->Total,
                'Phone' => request("phone"),
                'branch' => request("payment"),
                'Region' => request("mkoa"),
                'district' => request("wilaya"),
                'status' => "Payed",
            ]);

        }
        
        $balance = $check->Amount - $data->sum("Total");

        Bank::where('phone', request("phone"))->update([
            'Amount'=> $balance
        ]);
        
        return  redirect("/tafuta_out");
       
    }
}
