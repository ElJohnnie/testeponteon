<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pai extends Model
{
    protected $fillable = ['id', 'nome'];

    public function filho(){
        return $this->hasMany(Empresario::class);
    }
}
