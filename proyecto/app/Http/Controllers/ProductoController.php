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


        $lugar=Lugar::updateOrCreate(['id'=>$request['id']],[
            'name'=>$request['nombre'],
            'type'=>'Ceremonia',
            'detail'=>$request['direccion'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);


        if($request['image'])
        {
            $photo_name='images/products/'.'lugar'.$lugar->id.'.'.$request->file('image')->getClientOriginalExtension();

            Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

            $lugar->image=$photo_name;
            $lugar->save();
        }


        return redirect()->back();
    }

    function crearLugarLunaDeMiel(Request $request)
    {
        $lugar=Lugar::updateOrCreate(['id'=>$request['id']],[
            'name'=>$request['nombre'],
            'type'=>'LunaDeMiel',
            'detail'=>$request['direccion'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);

        if($request['image'])
        {
            $photo_name='images/products/'.'lugar'.$lugar->id.'.'.$request->file('image')->getClientOriginalExtension();

            Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

            $lugar->image=$photo_name;
            $lugar->save();
        }

        return redirect()->back();
    }

    function crearLugarRecepcion(Request $request)
    {
        $lugar=Lugar::updateOrCreate(['id'=>$request['id']],[
            'name'=>$request['nombre'],
            'type'=>'Recepcion',
            'detail'=>$request['direccion'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);

        if($request['image'])
        {
            $photo_name='images/products/'.'lugar'.$lugar->id.'.'.$request->file('image')->getClientOriginalExtension();

            Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

            $lugar->image=$photo_name;
            $lugar->save();
        }
        return redirect()->back();
    }


    function crearRopa(Request $request)
    {
    	$ropa=Vestuario::updateOrCreate(['id'=>$request['id']],[
            'talla' => $request['talla'],
            'description' => $request['descripcion'],
            'price' => $request['precio']
        ]);

        if($request['image'])
        {
            $photo_name='images/products/'.'vestuario'.$ropa->id.'.'.$request->file('image')->getClientOriginalExtension();

            Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

            $ropa->image=$photo_name;
            $ropa->save();
        }
        return redirect()->back();
    }

    function crearMaquillaje(Request $request)
    {
    	$maquillaje=Maquillaje::updateOrCreate(['id'=>$request['id']],[
        	'description' => $request['descripcion'],
        	'price' => $request['precio']

        ]);

        if($request['image'])
        {
            $photo_name='images/products/'.'maquillaje'.$maquillaje->id.'.'.$request->file('image')->getClientOriginalExtension();

            Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

            $maquillaje->image=$photo_name;
            $maquillaje->save();
        }

        return redirect()->back();
    }

    function crearTransporte(Request $request)
    {
    	$transporte=Transporte::updateOrCreate(['id'=>$request['id']],[
    		'name' => $request['nombre'],
    		'type' => $request['tipo'],
    		'description' => $request['descripcion'],
    		'price' => $request['precio']
        ]);

        if($request['image'])
        {

                $photo_name='images/products/'.'transporte'.$transporte->id.'.'.$request->file('image')->getClientOriginalExtension();

                Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

                $transporte->image=$photo_name;
                $transporte->save();
                }
        return redirect()->back();
    }


    function crearCena(Request $request)
    {
    	$cena=Plato::updateOrCreate(['id'=>$request['id']],[
            'name' => $request['nombre'],
            'type' => $request['tipo'],
            'description' => $request['descripcion'],
            'price' => $request['precio'],
        ]);

        if($request['image'])
        {
                $photo_name='images/products/'.'plato'.$cena->id.'.'.$request->file('image')->getClientOriginalExtension();

                Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

                $cena->image=$photo_name;
                $cena->save();
                }
        return redirect()->back();
    }


    function crearAnillo(Request $request)
    {
        $anillo=Anillo::updateOrCreate(['id'=>$request['id']],[
            'talla' => $request['talla'],
            'description' => $request['descripcion'],
            'price' => $request['precio']
        ]);

        if($request['image'])
        {
                $photo_name='images/products/'.'anillo'.$anillo->id.'.'.$request->file('image')->getClientOriginalExtension();

                Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

                $anillo->image=$photo_name;
                $anillo->save();
                }
        return redirect()->back();
    }


    function crearActividadRecepcion(Request $request)
    {
        $actividad=ActividadRecepcion::updateOrCreate(['id'=>$request['id']],[
            'name'=>$request['nombre'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);

        if($request['image'])
        {

                $photo_name='images/products/'.'actividad_recepcion'.$actividad->id.'.'.$request->file('image')->getClientOriginalExtension();

                Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

                $actividad->image=$photo_name;
                $actividad->save();
                }
                
        return redirect()->back();
    }

    function crearActividadLunaDeMiel(Request $request)
    {
        $actividad=ActividadLunaDeMiel::updateOrCreate(['id'=>$request['id']],[
            'name'=>$request['nombre'],
            'description'=>$request['descripcion'],
            'price'=>$request['precio']
        ]);

        if($request['image'])
        {
                $photo_name='images/products/'.'actividad_recepcion'.$actividad->id.'.'.$request->file('image')->getClientOriginalExtension();

                Image::make($request->file('image'))->resize(255,255)->save(public_path($photo_name));

                $actividad->image=$photo_name;
                $actividad->save();
                }
        return redirect()->back();
    }


    function consultarProductos()
    {
        $lugar_ceremonia=Lugar::where('type','Ceremonia')->get();
        $lugar_recepcion=Lugar::where('type','Recepcion')->get();
        $lugar_luna_de_miel=Lugar::where('type','LunaDeMiel')->get();
        $transporte=Transporte::all();
        $pastel=Plato::all();
        $vestuario=Vestuario::all();
        $maquillaje=Maquillaje::all();
        $anillo=Anillo::all();
        $actividad_recepcion=ActividadRecepcion::all();
        $actividad_luna_de_miel=ActividadLunaDeMiel::all();


        return view('admin.manage_product.consultas.consultas', compact(
            'lugar_ceremonia',
            'lugar_recepcion',
            'lugar_luna_de_miel',
            'transporte',
            'pastel',
            'vestuario',
            'maquillaje',
            'anillo',
            'actividad_recepcion',
            'actividad_luna_de_miel'
        ));
    }


    function modificarLugarCeremonia($id)
    {
        $lugar=Lugar::find($id);
        return view('admin.manage_product.modificaciones.modificar_lugar_ceremonia', compact('lugar'));
    }

    function modificarLugarLunaDeMiel($id)
    {
        $lugar=Lugar::find($id);
        return view('admin.manage_product.modificaciones.modificar_lugar_lm', compact('lugar'));
    }

    function modificarLugarRecepcion($id)
    {
        $lugar=Lugar::find($id);
        return view('admin.manage_product.modificaciones.modificar_lugar_recepcion', compact('lugar'));
    }

    function modificarTransporte($id)
    {
        $transporte=Transporte::find($id);
        return view('admin.manage_product.modificaciones.modificar_transporte', compact('transporte'));
    }


    function modificarPastel($id)
    {
        $pastel=Plato::find($id);
        return view('admin.manage_product.modificaciones.modificar_pastel', compact('pastel'));
    }


    function modificarVestuario($id)
    {
        $ropa=Vestuario::find($id);
        return view('admin.manage_product.modificaciones.modificar_vestuario', compact('ropa'));
    }

    function modificarMaquillaje($id)
    {
        $maquillaje=Maquillaje::find($id);
        return view('admin.manage_product.modificaciones.modificar_maquillaje', compact('maquillaje'));
    }

    function modificarAnillo($id)
    {
        $anillo=Anillo::find($id);
        return view('admin.manage_product.modificaciones.modificar_anillo', compact('anillo'));
    }

    function modificarActividadRecepcion($id)
    {
        $actividad_recepcion=ActividadRecepcion::find($id);
        return view('admin.manage_product.modificaciones.modificar_actividad_recepcion', compact('actividad_recepcion'));
    }

    function modificarActividadLunaDeMiel($id)
    {
        $actividad_luna_de_miel=ActividadRecepcion::find($id);
        return view('admin.manage_product.modificaciones.modificar_actividad_luna_de_miel', compact('actividad_luna_de_miel'));
    }



    function eliminarLugarCeremonia($id)
    {
        Lugar::destroy($id);
        return redirect()->back();
    }

    function eliminarLugarLunaDeMiel($id)
    {
        Lugar::destroy($id);
        return redirect()->back();
    }

    function eliminarLugarRecepcion($id)
    {
        Lugar::destroy($id);
        return redirect()->back();
    }

    function eliminarTransporte($id)
    {
        Transporte::destroy($id);
        return redirect()->back();
    }


    function eliminarPastel($id)
    {
        Plato::destroy($id);
        return redirect()->back();
    }


    function eliminarVestuario($id)
    {
        Vestuario::destroy($id);
        return redirect()->back();
    }

    function eliminarMaquillaje($id)
    {
        Maquillaje::destroy($id);
        return redirect()->back();
    }

    function eliminarAnillo($id)
    {
        Anillo::destroy($id);
        return redirect()->back();
    }

    function eliminarActividadRecepcion($id)
    {
        ActividadRecepcion::destroy($id);
        return redirect()->back();
    }

    function eliminarActividadLunaDeMiel($id)
    {
        ActividadLunaDeMiel::destroy($id);
        return redirect()->back();
    }



}
