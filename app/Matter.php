<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matter extends Model
{
    protected $table = "matters";

    protected $fillable = [
      'name',
      'description',
      'years_id',
      'departments_id',
    ];

    public function years(){
        //Relacion de muchos a uno
        //Lado de uno
        return $this->hasMany('App\Year');
    }
    public function departments(){
        //Relacion de muchos a uno
        //Lado de uno
        return $this->hasMany('App\Department');
    }
}
