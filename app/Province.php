<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = "provinces";

    protected $fillable = [
      'name',
      'countries_id',
    ];

    public function countries(){
        //Relacion de muchos usuarios de una persona
        //Lado de uno
        return $this->hasMany('App\Country');
    }

    public function cities(){
        //Relacion de muchos usuarios de una persona
        //Lado de uno
        return $this->belongsTo('App\City');
    }
}
