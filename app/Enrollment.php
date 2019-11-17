<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = "enrollments";

    protected $fillable = [
      'date_up',
      'number',
      'scholarships_id',
      'divisions_id',
    ];

    public function quotas()
    //  Relacion de Uno a Muchos
    //  Lado de uno
    {
        return $this->hasMany('App\Quota');
    }

    public function service_enrollments()
    //  Relacion de Uno a Muchos
    //  Lado de uno
    {
        return $this->hasMany('App\ServiceEnrollment');
    }

    public function divisions(){
        //Relacion de uno a uno
        return $this->hasOne('App\Division');
    }

    public function scholarships(){
        //Relacion de uno a uno
        return $this->hasOne('App\Scholarship');
    }
}
