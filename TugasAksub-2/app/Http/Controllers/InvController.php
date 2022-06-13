<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InvController extends Controller
{
    public function Inventory() {

        $Inventory = Inventory::all();
        $categories = category::all();
        // dd($Inventory);

        return view('inventory', compact('Inventory','categories'));
    }

    public function AddInv() {

        $categories = category::all();

        return view('add-item',compact('categories'));
    }

    public function AddCat() {

        $categories = category::all();

        return view('add-category',compact('categories'));
    }

    public function EditInv($id) {

        $Inventory = Inventory::find($id);
        $categories = category::all();

        return view('edit-item', compact('Inventory',"id",'categories'));
    }

    public function ViewInv($category_id) {

        $Inventory = Inventory::all()->where('category_id',$category_id);
        $categories = category::all();
        $categoryselect = category::find($category_id);

        return view('inventorview', compact('Inventory',"category_id",'categories','categoryselect'));
    }


    public function Home() {
        return view('home');
    }

    public function CreateInv(Request $request){
        // dd($request);
        Inventory::create([
            'name' => $request->title,
            'category_id' => $request->category_id,
            'desc'=> $request->desc,
            'amount'=> $request->amount
        ]); 

        return redirect(route('inv'));
    }

    public function CreateCat(Request $request){
        // dd($request);
        category::create([
            'name' => $request->title,
        ]); 

        return redirect(route('inv'));
    }

    public function updateInv(Request $request, $id) {
        $Inventory = Inventory::find($id);

        $Inventory->name = $request->name;
        $Inventory->category_id = $request->category_id;
        $Inventory->desc = $request->desc;
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
