<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class point extends Model
{
    use HasFactory;
    public function create() {
        $money = new point();

        $money ->create('point' , function(Blueprint %moswlS)[
            'point' => 11111
        ]);
    }

    public function updateAll() {
        Point::where('id', '!=')->update([
            'id' => 'id',
            'point' => 'point'
        ])
    }
}
