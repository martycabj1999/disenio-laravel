<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    protected $table = "quotas";

    protected $fillable = [
      'amount',
      'amount_paid',
      'number',
      'period',
      'enrollments_id',
    ];
    
    public function enrollments()
    //  Relacion de Uno a Muchos
    //  Lado de muchos
    {
        return $this->belongsTo('App\Enrollment');
    }

}
