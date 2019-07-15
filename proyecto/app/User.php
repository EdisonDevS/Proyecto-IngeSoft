<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'phone', 'budget', 'photo'
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


    public function lugares()
    {
        return $this->belongsToMany('App\lugar_usuario');
    }

    public function transportes()
    {
        return $this->belongsToMany('App\transporte_usuario');
    }

    public function platos()
    {
        return $this->belongsToMany('App\plato_usuario');
    }

    public function vestuarios()
    {
        return $this->belongsToMany('App\vestuario_usuario');
    }

    public function maquillajes()
    {
        return $this->belongsToMany('App\maquillaje_usuario');
    }

    public function anillos()
    {
        return $this->belongsToMany('App\anillo_usuario');
    }

    public function actividades_recepcion()
    {
        return $this->belongsToMany('App\act_recep_usuario');
    }

    public function actividades_luna_de_miel()
    {
        return $this->belongsToMany('App\act_lm_usuario');
    }
}
