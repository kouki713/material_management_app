<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Purchase;

use Illuminate\support\Facades\DB;

class PurchaseController extends Controller
{
    public function index() {
        return view('purchases.index');
    }

    public function create() {
        return view('purchases.create');
    }

    public function store() {
        
    }
}
