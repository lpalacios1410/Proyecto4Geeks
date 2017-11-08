<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personajes extends Model
{
    //

        protected $fillable = [
        'id', 'nombre', 'Tipopersonajes_id',
    ];
}
