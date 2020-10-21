<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
use App\Models\Receipt;
use App\Models\Purchase;
use App\Models\Allocate;

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

    public function store(Request $request) {
        $item = new Item;

        $item->item_name = $request->input('item_name');

        
        $item->save();
        
        return redirect('item/index')->with('message', '部材を登録しました。');
    
    }
}
