<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Lugar;
use \App\Plato;
use \App\ActividadRecepcion;
use \App\ActividadLunaDeMiel;
use \App\Anillo;
use \App\Maquillaje;
use \App\Transporte;
use \App\Vestuario;

class PackageController extends Controller
{
  public function verHome(){
    $lugar=Lugar::all()->last();
    $plato=Plato::all()->last();
    $anillo = Anillo::all()->last();
    $actividadRecepcion = ActividadRecepcion::all()->last();
    $maquillaje = Maquillaje::all()->last();
    $actividadLunaDeMiel = ActividadLunaDeMiel::all()->last();
    $vestuario = Vestuario::all()->last();
    $transporte = Transporte::all()->last();


   return view('welcome', compact('lugar', 'plato', 'anillo', 'actividadRecepcion', 'actividadLunaDeMiel', 'maquillaje','vestuario','transporte'));
 }
}
