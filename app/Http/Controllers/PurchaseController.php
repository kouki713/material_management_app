<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Purchase;
use App\Models\Item;

use Illuminate\support\Facades\DB;

class PurchaseController extends Controller
{
    public function index() {

        $purchases = Purchase::all();
        // dd($purchases);
        return view('purchases.index', compact('purchases'));
    }

    public function create($id) {
        $item = Item::find($id);
        return view('purchases.create', compact('item'));
    }

    public function store(Request $request) {

        $purchase = new Purchase;

        $purchase->num = $request->input('num');
        $purchase->item_id = $request->input('item_id');
        $purchase->save();

        return back()->with('message', '発注しました。');
    }
}
