<?php

namespace App;

use Freshwork\ChileanBundle\Rut;
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
        'name', 'email', 'password',
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

    public function validarRut() {
        Rut::parse('11111111-1')->validate(); //true

        $rut = new Rut('11.111.111', '1');
        $rut->validate(); //true

        (new Rut('12345678', '5'))->validate(); //true

        if($siFunciona = true){
            return true;
        }else{
            return false;
        }
    }
}


