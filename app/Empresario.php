<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresario extends Model
{
    protected $fillable = ['nome', 'celular', 'estado', 'cidade', 'pai_id'];

    public function pai(){
        return $this->belongsTo(Pai::class);
    }

    public function filhos(){
        return $this->hasMany(Empresario::class, 'pai_id');
    }

}
