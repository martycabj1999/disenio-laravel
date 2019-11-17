<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplementaryService extends Model
{
    protected $table = "complementary_services";

    protected $fillable = [
      'amount',
      'name',
      'description',
    ];

    public function service_enrollments(){
        //Relacion de muchos usuarios de una persona
        //Lado de uno
        return $this->hasMany('App\ServiceEnrollment');
      }  
}
