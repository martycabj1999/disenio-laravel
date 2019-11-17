<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $table = "scholarships";

    protected $fillable = [
      'number',
      'discount',
      'name'
    ];

    public function scholar_ship_people(){
        //Relacion de muchos a uno
        //Lado de uno
        return $this->hasMany('App\ScholarshipPerson');
    }

    public function enrollments(){
        //Relacion de uno a uno
        //Lado de uno
        return $this->hasOne('App\Enrollment');
    }
}
