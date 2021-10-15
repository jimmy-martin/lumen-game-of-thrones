<?php

namespace App\Http\Controllers;

use App\Models\House;

class HouseController extends Controller
{
    public function list()
    {
        return view('houses', [
            'houses' => House::all()
        ]);
    }
}
