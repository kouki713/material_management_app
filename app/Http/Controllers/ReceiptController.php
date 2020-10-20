<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Receipt;

use Illuminate\support\Facades\DB;

class ReceiptController extends Controller
{
    public function index() {
        return view('receipts.index');
    }

    public function create() {
        return view('receipts.create');
    }

    public function store() {
        
    }
}
