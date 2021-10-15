<?php

namespace App\Models;

class House extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'house';

    public function characters()
    {
        return $this->belongsToMany(Character::class, 'house_has_characters', 'house', 'character');
    }
}
