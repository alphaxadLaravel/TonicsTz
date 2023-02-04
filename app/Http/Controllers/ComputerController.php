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
            'picha' => 'required|mimes:jpg,png,jpeg,webp|max:20048',
        ]);

        $photoName = time() . '.' . request('picha')->extension();

        request('picha')->move(public_path('computer'), $photoName);

        $path = 'computer/' . $photoName;

        // check if computer exists
        $check = Computer::where('hdd', request('hdd'))
            ->where('ram', request('ram'))
            ->where('category', request('category'))
            ->where('brand', request('brand'))
            ->where('processor', request('processor'))
            ->where('generation', request('generation'))
            ->where('hali', request('hali'))
            ->where('price', request('price'))
            ->where('picha', $path)
            ->first();

        if ($check) {
            return redirect('/add')
                ->with('error', 'Computer already exists');
        }else{
            Computer::create([
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
    
            return redirect('/all_computers')
            ->with('success', 'Computer Added Successfully');
        }

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

            // check if computer exists in cart
            $check = Cart::where('user_id', $user_id)
            ->where('computer_id', $id)
            ->first();

            if(!$check){

                // check if has computer in cart
                $check = Cart::where('user_id', $user_id)
                ->first();

                if($check){
                    return redirect("/cart")
                ->with('error', 'You have a computer in cart, please purchase it or remove it from cart!');
                }else{
                    Cart::create([
                        'user_id'=> $user_id,
                        'computer_id'=> $id,
                    ]);
        
                    return redirect("/cart")
                    ->with('success', 'Computer Added to Cart Successfully')
                    ;
                }

            }else{
                return redirect("/cart")
                ->with('error', 'Computer already exists in cart');

            }
            
           

        }else{
            return redirect("/login");
        }
    }

    // allComputers
    public function allComputers()
    {
        $computers = Computer::orderBy('id', 'desc')->get();
        return view('admin.computers', ['computers' => $computers]);
    }

    // deleteComputer
    public function deleteComputer($id)
    {
        $computer = Computer::find($id);
        $computer->delete();
        return redirect('/all_computers')
        ->with('success', 'Computer Deleted Successfully');
    }
}
