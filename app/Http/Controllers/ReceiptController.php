<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Receipt;
use App\Models\Item;
use App\Models\Purchase;



use Illuminate\support\Facades\DB;

class ReceiptController extends Controller
{
    public function index() {
        $receipts = Receipt::all();

        return view('receipts.index', compact('receipts'));

    }

    public function create($id) {
        $item = Item::find($id); 

        return view('receipts.create', compact('item'));
    }

    public function store(Request $request) {
        $receipt = new Receipt;

        $receipt->num = $request->input('num');
        $receipt->item_id = $request->input('item_id');
        
        // 発注個数　>= 入庫個数　

        //入庫する部材に紐付いている発注個数の合計を求める
        $item = Item::find($receipt->item_id);
        $purchases = $item->purchases;
        $i = 0;
        foreach($purchases as $purchase) {
            $i = $i + $purchase->num; 
        };

        //入庫済み個数を求める
        $receipts = $item->receipts;
        $number = 0;
        foreach($receipts as $rec) {
            $number = $number + $rec->num; 
        };
        
        // 未入庫個数
        $num = $i - $number;


        if ($receipt->num <= $num) {
            $receipt->save();
            return redirect('receipt/index')->with('message', '入庫しました。');
        }else{
            return redirect('receipt/index')->with('alert', '入力内容を確認してください。');
        }
        
            
    }
}
