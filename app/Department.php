<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "departments";

    protected $fillable = [
      'name',
    ];

    public function matters(){
        //Relacion de muchos a uno
        //Lado de uno
        return $this->hasMany('App\Matter');
    }
}
