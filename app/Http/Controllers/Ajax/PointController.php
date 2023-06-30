<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Point;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PointController extends Controller
{

    public function money() {
        return response()->json([
            'money' => true
            
        ]);
    }
    public function index() {
        $money = Point::all();
        return view('index');
    }

    public function create() {
        alert('A');
    }

    public function update(Request $request, Post $post) {
        $point->title = $request->input('point');
        $point->save();
    }

    public function save() {
        $points = new \App\Student;
        $points->point = $request->point;


    }
}