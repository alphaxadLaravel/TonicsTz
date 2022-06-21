<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Session;

class ComputerController extends Controller
{
    public function addComputer(){

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

        $photoName = time().'.'.request('picha')->extension();  

        request('picha')->move(public_path('computer'), $photoName);

        $path = 'computer/'.$photoName;
        
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
            'status'=>"Added Computer"
        ]);

        session()->flash('uploaded', '');
        return redirect('/add');
    }
}
