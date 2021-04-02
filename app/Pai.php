<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pai extends Model
{
    protected $fillable = ['id', 'nome'];

    public function filhos(){
        return $this->hasMany(Empresario::class);
    }
}
