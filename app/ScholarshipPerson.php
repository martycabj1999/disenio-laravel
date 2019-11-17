<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScholarshipPerson extends Model
{
    protected $table = "scholarship_people";

    protected $fillable = [
      'number',
      'state_id',
      'people_id',
      'scholarships_id',
    ];

    public function users()
    //  Relacion de Uno a Muchos
    //  Lado de muchos
    {
        return $this->belongsTo('App\User');
    }

    public function scholarships()
    //  Relacion de Uno a Muchos
    //  Lado de muchos
    {
        return $this->belongsTo('App\Scholarship');
    }

    public function states()
    //  Relacion de Uno a Uno
    {
        return $this->hasOne('App\State');
    }
}
