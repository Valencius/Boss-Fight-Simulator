<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InvController extends Controller
{
    public function Inventory() {

        $Inventory = Inventory::all();
        // dd($Inventory);

        return view('inventory', compact('Inventory'));
    }

    public function AddInv() {
        return view('add-item');
    }

    public function EditInv($id) {

        $Inventory = Inventory::find($id);

        return view('edit-item', compact('Inventory',"id"));
    }


    public function Home() {
        return view('home');
    }

    public function CreateInv(Request $request){
        // dd($request);
        Inventory::create([
            'name' => $request->title,
            'desc'=> $request->desc,
            'type' => $request->type,
            'amount'=> $request->amount
        ]); 

        return redirect(route('inv'));
    }

    public function updateInv(Request $request, $id) {
        $Inventory = Inventory::find($id);

        $Inventory->name = $request->name;
        $Inventory->desc = $request->desc;
        $Inventory->type = $request->type;
        $Inventory->amount = $request->amount;

        $Inventory->save();

        return redirect(route('inv'));
    }

    public function deleteItem($id){
        $Inventory = Inventory::find($id);

        $Inventory->delete();

        return redirect(route('inv'));
    }
}
