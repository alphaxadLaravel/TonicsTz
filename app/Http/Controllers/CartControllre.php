<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use Session;

class CartControllre extends Controller
{
    public function showCart(){

        $user_id = session()->get('user')['id'];

        $cart = Cart::where('user_id',$user_id)->get();

        return view("common.cart",['cart'=>$cart]);
    }

    public function checkOut(){
        return view("users.checkouts");
    }
}
