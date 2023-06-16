<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;

class Slotcontroller extends Controller
{
    public function index(Request $request)
    {
        return view('slot.index');
    }

    public function func() {
        $point = new Point;
        $points = Point::all();
        return view('slot.index', compact('point'));
    }

    protected function create(array $data)
    {
        return Point::create([
            'point' => $data['point'],
        ]);
    }


}
