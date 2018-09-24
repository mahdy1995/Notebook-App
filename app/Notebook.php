<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    //
    Protected $fillable=['name'];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
