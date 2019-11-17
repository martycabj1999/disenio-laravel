<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'lastname',
        'dni',
        'is_student',
        'phone',
        'date_birth',
        'street',
        'number',
        'dept',
        'floor',
        'cities_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scholarship_person()
    //  Relacion de Uno a Muchos
    //  Lado de muchos
    {
        return $this->hasMany('App\ScholarshipPerson');
    }
    
    public function cities(){
        //Relacion de muchos usuarios de una persona
        //Lado de muchos
        return $this->belongsTo('App\City');
      }

}
