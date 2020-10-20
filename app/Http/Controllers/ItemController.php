<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use Illuminate\support\Facades\DB;

class ItemController extends Controller
{
    public function index() {

        $items = Item::all();
        
        return view('items.index', compact('items'));
    }

    public function create() {
        return view('items.create');
    }

    public function store(Item $request) {
        $item = new Item;

        $item->item_name = $request->input('item_name');
        $item->save();

        return redirect('items/index');
    }
}
