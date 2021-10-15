<?php

namespace App\Http\Controllers;

use App\Models\Character;

class CharacterController extends Controller
{
    public function list()
    {
        return view('characters', [
            'characters' => Character::all()
        ]);
    }
}
