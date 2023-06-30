<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Slotcontroller extends Controller
{
    // public function index(Request $request) {
    //     $money = DB::select('select * from point');
    //     return view('slot.index',$money);
    // }
    public function index(Request $request) {
        return view('slot.index');
    }

    public function create(){
        return view('point.create');
    }

    public function update(Request $request, $id){
        $update = [
            'id' => $request ->id,
            'point' => $request ->point
        ];
        Point::where('id', $id)->update($update);
    }
}
