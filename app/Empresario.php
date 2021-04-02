<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresario extends Model
{
    protected $fillable = ['nome', 'celular', 'estado', 'cidade', 'pai_id'];

}
