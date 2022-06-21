<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\Cart;
use App\Models\User;
use Session;

class ComputerController extends Controller
{
    public function addComputer()
    {

        request()->validate([
            'category' => 'required|string',
            'ram' => 'required|string',
            'hdd' => 'required|string',
            'brand' => 'required|string',
            'processor' => 'required|string',
            'generation' => 'required|string',
            'hali' => 'required|string',
            'price' => 'required|numeric',
            'picha' => 'required|mimes:jpg,png,jpeg|max:20048',
        ]);

        $photoName = time() . '.' . request('picha')->extension();

        request('picha')->move(public_path('computer'), $photoName);

        $path = 'computer/' . $photoName;

        Computer::Create([
            'category' => request('category'),
            'ram' => request('ram'),
            'hdd' => request('hdd'),
            'brand' => request('brand'),
            'processor' => request('processor'),
            'generation' => request('generation'),
            'hali' => request('hali'),
            'price' => request('price'),
            'picha' => $path,
            'status' => "Added Computer"
        ]);

        session()->flash('uploaded', '');
        return redirect('/add');
    }

    public function searchComputer()
    {

        request()->validate([
            'category' => 'required|string',
            'ram' => 'required|string',
            'hdd' => 'required|string',
            'brand' => 'required|string',
            'processor' => 'required|string',
            'generation' => 'required|string',
            'hali' => 'required|string',
        ]);

        $matokeo = Computer::where('hdd', 'LIKE', '%' . request('hdd') . '%')
            ->where('ram', 'LIKE', '%' . request('ram') . '%')
            ->where('category', 'LIKE', '%' . request('category') . '%')
            ->where('brand', 'LIKE', '%' . request('brand') . '%')
            ->where('processor', 'LIKE', '%' . request('processor') . '%')
            ->where('generation', 'LIKE', '%' . request('generation') . '%')
            ->where('hali', 'LIKE', '%' . request('hali') . '%')
        ->get();
            
        return view("common.computer",['matokeo'=>$matokeo]);
    }

    public function addcart($id){

        if(session()->get('user') || session()->get('logged') ){

            $user_id = session()->get('user')['id'];
            
            Cart::create([
                'user_id'=> $user_id,
                'computer_id'=> $id,
                'Quantity' => "1",
                'Total'=> "20000",
                'status'=> "Adeded",
            ]);

            return redirect("/cart");

        }else{
            return redirect("/login");
        }
    }
}
