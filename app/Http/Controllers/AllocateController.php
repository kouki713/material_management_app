<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Allocate;
use App\Models\Item;

use Illuminate\support\Facades\DB;

class AllocateController extends Controller
{
    public function index() {
        return view('allocates.index');
    }

    public function create() {
        return view('allocates.create');
    }

    public function store() {
        
    }
}
