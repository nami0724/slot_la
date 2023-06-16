<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class \PointController extends Controller
{
   public function point() {
    return response()->json([
        'result' => true
    ]);
   }
}