<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = "divisions";

    protected $fillable = [
      'aula',
      'name',
      'years_id'
    ];

    public function years()
    //  Relacion de Uno a Muchos
    //  Lado de muchos
    {
        return $this->belongsTo('App\Year');
    }

    public function enrollments(){
        //Relacion de uno a uno
        //Lado de uno
        return $this->hasMany('App\Enrollment');
    }
}
