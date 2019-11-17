<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";

    protected $fillable = [
      'name',
    ];

    public function provinces(){
        //Relacion de muchos usuarios de una persona
        //Lado de uno
        return $this->hasMany('App\Province');
    }
}
