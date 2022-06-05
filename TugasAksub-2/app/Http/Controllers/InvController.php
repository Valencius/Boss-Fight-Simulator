<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InvController extends Controller
{
    public function Inventory() {

        $Inventory = Inventory::all();
        // dd($Inventory);

        return view('inventory', ['Inventory' => $Inventory]);
    }

    public function AddInv() {
        return view('add-item');
    }

    public function EditInv() {
        return view('edit-task');
    }


    public function Home() {
        return view('Home');
    }

    public function CreateInv(Request $request){
        // dd($request);
        Inventory::create([
            'name' => $request->title,
            'desc'=> $request->desc,
            'type' => $request->type,
            'amount'=> $request->amount
        ]); 

        return redirect('/inventory');
    }
}
