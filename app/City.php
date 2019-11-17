<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";

    protected $fillable = [
      'name',
      'provinces_id',
    ];

    public function provinces(){
        //Relacion de muchos usuarios de una persona
        //Lado de uno
        return $this->hasMany('App\Province');
    }

    public function residences(){
        //Relacion de muchos usuarios de una persona
        //Lado de uno
        return $this->belongsTo('App\Residence');
    }
}
