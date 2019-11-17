<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $table = "years";

    protected $fillable = [
      'year',
      'basic_amount'
    ];

    public function divisions(){
      //Relacion de muchos a uno
      //Lado de uno
      return $this->hasMany('App\Division');
    }

    public function matters(){
      //Relacion de muchos a uno
      //Lado de uno
      return $this->hasMany('App\Matter');
    }
}
