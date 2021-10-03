<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Events\UserLogEntry;

class ItemsController extends Controller
{
    public function index(){
        $items = Items::all();
        return view('items.index', compact('items'));
    }

    public function create(){
        return view('items.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        $item = Items::create($request->all());

        event(new UserLogEntry("Create item with ID#$item->id"));

        return redirect()->route('items.index')->with('success', 'Item has been added!');
    }

    public function show(Items $item){
        return view ('items.show', ['item' =>  $item]);
    }

    public function edit(Items $item){
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Items $item){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer'
        ]);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->save();

        event(new UserLogEntry("Updated item with ID#$item->id"));

        return redirect()->route('items.index');
    }

    public function destroy(Items $item) {

        $item->delete();

        event(new UserLogEntry("Deleted item with ID#$item->id"));

        return back();
    }
}
