<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "states";

    protected $fillable = [
      'name',
    ];

    public function scholarship_people(){
        //Relacion de uno a uno
        //Lado de uno
        return $this->hasOne('App\ScholarshipPerson');
    }
}
