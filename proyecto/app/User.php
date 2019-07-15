<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Vestuario;
use App\User;
use App\Maquillaje;
use App\Transporte;
use App\Plato;
use App\Ceremonia;
use App\Lugar;
use App\Anillo;
use App\ActividadLunaDeMiel;
use App\ActividadRecepcion;
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
        return $this->belongsToMany(Lugar::class, 'lugar_usuarios', 'user_id', 'lugar_id');
    }

    public function transportes()
    {
        return $this->belongsToMany(Transporte::class, 'transporte_usuarios', 'user_id', 'transporte_id');
    }

    public function platos()
    {
        return $this->belongsToMany(Plato::class, 'plato_usuarios', 'user_id', 'plato_id');
    }

    public function vestuarios()
    {
        return $this->belongsToMany(Vestuario::class, 'vestuario_usuarios', 'user_id', 'vestuario_id');
    }

    public function maquillajes()
    {
        return $this->belongsToMany(Maquillaje::class, 'maquillaje_usuarios', 'user_id', 'maquillaje_id');
    }

    public function anillos()
    {
        return $this->belongsToMany(Anillo::class, 'anillo_usuarios', 'user_id', 'anillo_id');
    }

    public function actividades_recepcion()
    {
        return $this->belongsToMany(ActividadRecepcion::class, 'act_recep_usuarios', 'user_id', 'actividad_recepcion_id');
    }

    public function actividades_luna_de_miel()
    {
        return $this->belongsToMany(ActividadRecepcion::class, 'act_lm_usuarios', 'user_id', 'actividad_luna_de_miel_id');
    }
}
