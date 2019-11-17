<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceEnrollment extends Model
{
    protected $table = "service_enrollments";

    protected $fillable = [
      'date_up',
      'date_down',
      'amount',
      'amount_paid',
      'discount',
      'enrollments_id',
      'complementary_services_id',
    ];

    public function enrollments(){
      //Relacion de muchos usuarios de una persona
      //Lado de muchos
      return $this->belongsTo('App\Enrollment');
    }

    public function complementary_services(){
      //Relacion de muchos usuarios de una persona
      //Lado de muchos
      return $this->belongsTo('App\ComplementaryService');
    }
}
