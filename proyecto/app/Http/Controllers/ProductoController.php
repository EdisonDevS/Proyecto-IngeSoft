<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as Image;
use Illuminate\Http\Request;
use App\User;
use App\Vestuario;
use App\Maquillaje;
use App\Transporte;
use App\Plato;
use App\Ceremonia;
use App\Lugar;
use App\Anillo;
use App\ActividadLunaDeMiel;
use App\ActividadRecepcion;

use App\ac_lm_usuario;
use App\ac_recep_usuario;
use App\lugar_usuario;
use App\transporte_usuario;
use App\plato_usuario;
use App\vestuario_usuario;
use App\maquillaje_usuario;
use App\anillo_usuario;

class ProductoController extends Controller
{

    public function crearLugarCeremonia(Request $request)
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

    public function crearLugarLunaDeMiel(Request $request)
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

    public function crearLugarRecepcion(Request $request)
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


    public function crearRopa(Request $request)
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

    public function crearMaquillaje(Request $request)
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

    public function crearTransporte(Request $request)
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


    public function crearCena(Request $request)
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


    public function crearAnillo(Request $request)
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


    public function crearActividadRecepcion(Request $request)
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

    public function crearActividadLunaDeMiel(Request $request)
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


    public function consultarProductos()
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


    public function modificarLugarCeremonia($id)
    {
        $lugar=Lugar::find($id);
        return view('admin.manage_product.modificaciones.modificar_lugar_ceremonia', compact('lugar'));
    }

    public function modificarLugarLunaDeMiel($id)
    {
        $lugar=Lugar::find($id);
        return view('admin.manage_product.modificaciones.modificar_lugar_lm', compact('lugar'));
    }

    public function modificarLugarRecepcion($id)
    {
        $lugar=Lugar::find($id);
        return view('admin.manage_product.modificaciones.modificar_lugar_recepcion', compact('lugar'));
    }

    public function modificarTransporte($id)
    {
        $transporte=Transporte::find($id);
        return view('admin.manage_product.modificaciones.modificar_transporte', compact('transporte'));
    }


    public function modificarPastel($id)
    {
        $pastel=Plato::find($id);
        return view('admin.manage_product.modificaciones.modificar_pastel', compact('pastel'));
    }


    public function modificarVestuario($id)
    {
        $ropa=Vestuario::find($id);
        return view('admin.manage_product.modificaciones.modificar_vestuario', compact('ropa'));
    }

    public function modificarMaquillaje($id)
    {
        $maquillaje=Maquillaje::find($id);
        return view('admin.manage_product.modificaciones.modificar_maquillaje', compact('maquillaje'));
    }

    public function modificarAnillo($id)
    {
        $anillo=Anillo::find($id);
        return view('admin.manage_product.modificaciones.modificar_anillo', compact('anillo'));
    }

    public function modificarActividadRecepcion($id)
    {
        $actividad_recepcion=ActividadRecepcion::find($id);
        return view('admin.manage_product.modificaciones.modificar_actividad_recepcion', compact('actividad_recepcion'));
    }

    public function modificarActividadLunaDeMiel($id)
    {
        $actividad_luna_de_miel=ActividadRecepcion::find($id);
        return view('admin.manage_product.modificaciones.modificar_actividad_luna_de_miel', compact('actividad_luna_de_miel'));
    }



    public function eliminarLugarCeremonia($id)
    {
        Lugar::destroy($id);
        return redirect()->back();
    }

    public function eliminarLugarLunaDeMiel($id)
    {
        Lugar::destroy($id);
        return redirect()->back();
    }

    public function eliminarLugarRecepcion($id)
    {
        Lugar::destroy($id);
        return redirect()->back();
    }

    public function eliminarTransporte($id)
    {
        Transporte::destroy($id);
        return redirect()->back();
    }


    public function eliminarPastel($id)
    {
        Plato::destroy($id);
        return redirect()->back();
    }


    public function eliminarVestuario($id)
    {
        Vestuario::destroy($id);
        return redirect()->back();
    }

    public function eliminarMaquillaje($id)
    {
        Maquillaje::destroy($id);
        return redirect()->back();
    }

    public function eliminarAnillo($id)
    {
        Anillo::destroy($id);
        return redirect()->back();
    }

    public function eliminarActividadRecepcion($id)
    {
        ActividadRecepcion::destroy($id);
        return redirect()->back();
    }

    public function eliminarActividadLunaDeMiel($id)
    {
        ActividadLunaDeMiel::destroy($id);
        return redirect()->back();
    }


    public function agregarCarritoAct_LM(Request $request)
    {
        $relacion=ac_lm_usuario::create([
            'user_id' => $request['user_id'],
            'actividad_luna_de_miel_id' => $request['producto_id'],
        ]);

        return redirect()->back();
    }

    public function agregarCarritoAct_REC(Request $request)
    {
        $relacion=ac_recep_usuario::create([
            'user_id' => $request['user_id'],
            'actividad_recepcion_id' => $request['producto_id'],
        ]);

        return redirect()->back();
    }

    public function agregarCarrito_LUGAR(Request $request)
    {
        $relacion=lugar_usuario::create([
            'user_id' => $request['user_id'],
            'lugar_id' => $request['producto_id'],
        ]);

        return redirect()->back();
    }

    public function agregarCarrito_TRANSPORTE(Request $request)
    {
       
        $relacion=transporte_usuario::create([
            'user_id' => $request['user_id'],
            'transporte_id' => $request['producto_id'],
        ]);

        return redirect()->back();
    }

    public function agregarCarrito_PLATO(Request $request)
    {
        
        $relacion=plato_usuario::create([
            'user_id' => $request['user_id'],
            'plato_id' => $request['producto_id'],
        ]);

        return redirect()->back();
    }

    public function agregarCarrito_VESTUARIO(Request $request)
    {
        $relacion=vestuario_usuario::create([
            'user_id' => $request['user_id'],
            'vestuario_id' => $request['producto_id'],
        ]);

        return redirect()->back();
    }

    public function agregarCarrito_MAQUILLAJE(Request $request)
    {
        $relacion=maquillaje_usuario::create([
            'user_id' => $request['user_id'],
            'maquillaje_id' => $request['producto_id'],
        ]);

        return redirect()->back();
    }

    public function agregarCarrito_ANILLO(Request $request)
    {
        $relacion=anillo_usuario::create([
            'user_id' => $request['user_id'],
            'anillo_id' => $request['producto_id'],
        ]);

        return redirect()->back();
    }




}
