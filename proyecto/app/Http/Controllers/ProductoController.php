<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vestuario;
use App\Maquillaje;
use App\Transporte;
use App\Plato;
use App\Ceremonia;

class ProductoController extends Controller
{
    function crearRopa(Request $request)
    {
    	$ropa=Vestuario::create([
            'talla' => $request['talla'],
            'description' => $request['description'],
            'image' => $request['image'],
            'price' => $request['price']
        ]);

        
        return redirect()->back();
    }

    function crearMaquillaje(Request $request)
    {
    	$maquillaje=Maquillaje::create([
            'image' => $data['image'],
        	'description' => $request['description'],
        	'price' => $request['price']

        ]);


        return redirect()->back();
    }

    function crearTransporte(Request $request)
    {
    	$transporte=Transporte::create([
    		'image' => $request['image'],
    		'name' => $request['name'],
    		'type' => $request['type'],
    		'description' => $request['description'],
    		'price' => $request['price']
        ]);


        return redirect()->back();
    }

    function crearCena(Request $request)
    {
    	$cena=Plato::create([
            'name' => $request['name'],
            'type' => $request['type'],
            'image' => $request['image'],
            'description' => $request['description'],
            'price' => $request['price'],
        ]);

        return redirect()->back();
    }

}
