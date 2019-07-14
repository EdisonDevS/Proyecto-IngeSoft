<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;
use App\Vestuario;
use App\Maquillaje;
use App\Transporte;
use App\Plato;
use App\Ceremonia;
use App\Lugar;
use App\Anillo;
use App\ActividadLunaDeMiel;
use App\ActividadRecepcion;

class ProductoController extends Controller
{

    function crearLugarCeremonia(Request $request)
    {
        

        $lugar=Lugar::create([
            'name'=>$request['nombre'],
            'type'=>'Ceremonia',
            'detail'=>$request['direccion'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);


        $photo_name='images/products/'.'lugar'.$lugar->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $lugar->image=$photo_name;
        $lugar->save();

        
        return redirect()->back();
    }

    function crearLugarLunaDeMiel(Request $request)
    {
        $lugar=Lugar::create([
            'name'=>$request['nombre'],
            'type'=>'LunaDeMiel',
            'detail'=>$request['direccion'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);

        $photo_name='images/products/'.'lugar'.$lugar->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $lugar->image=$photo_name;
        $lugar->save();
        
        return redirect()->back();
    }

    function crearLugarRecepcion(Request $request)
    {
        $lugar=Lugar::create([
            'name'=>$request['nombre'],
            'type'=>'Recepcion',
            'detail'=>$request['direccion'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);


        $photo_name='images/products/'.'lugar'.$lugar->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $lugar->image=$photo_name;
        $lugar->save();
        
        return redirect()->back();
    }


    function crearRopa(Request $request)
    {
    	$ropa=Vestuario::create([
            'talla' => $request['talla'],
            'description' => $request['descripcion'],
            'price' => $request['precio']
        ]);

        $photo_name='images/products/'.'vestuario'.$ropa->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $ropa->image=$photo_name;
        $ropa->save();
        
        return redirect()->back();
    }

    function crearMaquillaje(Request $request)
    {
    	$maquillaje=Maquillaje::create([
        	'description' => $request['descripcion'],
        	'price' => $request['precio']

        ]);

        $photo_name='images/products/'.'maquillaje'.$maquillaje->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $maquillaje->image=$photo_name;
        $maquillaje->save();
        
        return redirect()->back();


        return redirect()->back();
    }

    function crearTransporte(Request $request)
    {
    	$transporte=Transporte::create([
    		'name' => $request['nombre'],
    		'type' => $request['tipo'],
    		'description' => $request['descripcion'],
    		'price' => $request['precio']
        ]);

        $photo_name='images/products/'.'transporte'.$transporte->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $transporte->image=$photo_name;
        $transporte->save();
        
        return redirect()->back();
    }


    function crearCena(Request $request)
    {
    	$cena=Plato::create([
            'name' => $request['nombre'],
            'type' => $request['tipo'],
            'description' => $request['descripcion'],
            'price' => $request['precio'],
        ]);

        $photo_name='images/products/'.'plato'.$cena->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $cena->image=$photo_name;
        $cena->save();
        
        return redirect()->back();
    }


    function crearAnillo(Request $request)
    {
        $anillo=Anillo::create([
            'talla' => $request['talla'],
            'description' => $request['descripcion'],
            'price' => $request['precio']
        ]);
        
        $photo_name='images/products/'.'anillo'.$anillo->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $anillo->image=$photo_name;
        $anillo->save();
        
        return redirect()->back();
    }


    function crearActividadRecepcion(Request $request)
    {
        $actividad=ActividadRecepcion::create([
            'name'=>$request['nombre'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);

        $photo_name='images/products/'.'actividad_recepcion'.$actividad->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $actividad->image=$photo_name;
        $actividad->save();
        
        return redirect()->back();
    }

    function crearActividadLunaDeMiel(Request $request)
    {
        $actividad=ActividadLunaDeMiel::create([
            'name'=>$request['nombre'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);

        $photo_name='images/products/'.'actividad_recepcion'.$actividad->id.'.'.$request->file('image')->getClientOriginalExtension();

        Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

        $actividad->image=$photo_name;
        $actividad->save();
        
        return redirect()->back();
    }

}
