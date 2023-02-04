<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\Payments;
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
        $cart_data = Cart::where('id', $id)->first();

        return view("users.checkouts", ['cart_data' => $cart_data]);
    }

    public function makePayments()
    {
        request()->validate([
            'mkoa' => 'required|string',
            'mahali' => 'required|string',
            'payment' => 'required|string',
            // validate phone
            'phone' => 'required|numeric|digits:10|starts_with:0',
        ]);

        // make payment
        $payment = new Payments();
        $payment->mkoa = request('mkoa');
        $payment->mahali = request('mahali');
        $payment->payment = request('payment');
        $payment->phone = request('phone');
        $user_id = session()->get('user')['id'];
        $payment->user_id = $user_id;
        // computer id
        $payment->computer_id = request('computer_id');
        $payment->save();

        // remove from cart
        Cart::where('user_id', $user_id)->delete();
        return  redirect("/success");
    }

    // remove
    public function remove($id)
    {
        Cart::where('id', $id)->delete();

        return redirect("/tafuta_out")->with('success', 'Computer Removed Successfully, Find Another Computer');
    }

    // all_payments
    public function allPayments()
    {
        $payments = Payments::orderBy('id', 'desc')->get();

        return view("admin.payments", ['payments' => $payments]);
    }

}
