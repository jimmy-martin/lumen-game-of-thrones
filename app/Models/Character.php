<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'character';

    public function title()
    {
        return $this->belongsTo(Title::class, 'id_title');
    }

    public function mother()
    {
        return $this->belongsTo(Character::class, 'mother_id');
    }

    public function father()
    {
        return $this->belongsTo(Character::class, 'father_id');
    }
}
