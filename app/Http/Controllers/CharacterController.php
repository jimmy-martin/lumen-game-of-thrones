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

    public function item(int $id)
    {
        $character = Character::find($id);

        if($character) {
            return view('character', [
                'character' => $character
            ]);
        } else {
            abort(404, 'Le personnage demandé n\'existe pas ');
        }

    }
}
