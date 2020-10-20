<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use Illuminate\support\Facades\DB;

class ItemController extends Controller
{
    public function index() {
        return view('items.index');
    }

    public function create() {
        return view('items.create');
    }

    public function store() {
        
    }
}
