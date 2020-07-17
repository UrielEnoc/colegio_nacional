<?php

namespace App;


use Carbon\Carbon;
use Freshwork\ChileanBundle\Rut;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Date;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $created_at = [
        'created_at',
    ];

    public function getCreatedAtAttribute($created_at) {
        return Carbon::createFromFormat('Y-m-d H:i:s', $created_at)->format('d-m-Y');
    }


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



