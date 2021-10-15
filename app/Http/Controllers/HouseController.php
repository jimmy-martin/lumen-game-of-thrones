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

    public function showCharacters(int $houseId)
    {
        $house = House::find($houseId);

        if($house) {
            return view('house', [
                'house' => $house
            ]);
        } else {
            abort(404, 'Aucune maison correspondante !');
        }

    }
}
