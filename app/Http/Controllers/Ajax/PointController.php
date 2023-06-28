<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function money() {
        return response()->json([
            'money' => true
        ]);
    }

    public function create() {
        alert('A');
    }

    public function update() {
        alert('B');
    }

    public function save() {
        alert('C');
    }
}