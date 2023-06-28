<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;

class Slotcontroller extends Controller
{
    public function index(Request $request) {
        $money = DB::select('select * from point');
        return view('slot.index',['items' => $items]);
    

    }
    


}
