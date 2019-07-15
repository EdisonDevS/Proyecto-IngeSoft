@extends('admin.layout')

@section('content')
    <div class="row" style="padding-bottom: 10px">
        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Ceremonia</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($lugar_ceremonia as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/lugar_ceremonia/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/borrar/eliminarLugarCeremonia/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>

            </div>

        </div>

        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Lugar Recepción</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($lugar_recepcion as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/lugar_recepcion/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/borrar/eliminarLugarRecepcion/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>

            </div>

        </div>

        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Lugar Luna de Miel</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($lugar_luna_de_miel as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/lugar_luna_de_miel_/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/manage/delete/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>

            </div>

        </div>


        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Transporte</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($transporte as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/transporte/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/borrar/eliminarTransporte/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>

            </div>

        </div>


        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Pastel</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>					    </thead>
					    <tbody>
					    	@foreach($pastel as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/pastel/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/borrar/eliminarPastel/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>

            </div>

        </div>


        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Vestuario</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($vestuario as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/vestuario/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/borrar/eliminarVestuario/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>

            </div>

        </div>


        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Maquillaje</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($maquillaje as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/maquillaje/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/borrar/eliminarMaquillaje/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>

            </div>

        </div>


        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Anillo</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($anillo as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/anillo/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/borrar/eliminarAnillo/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>

            </div>

        </div>



        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Actividad Recepción</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($actividad_recepcion as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/actividad_recepcion/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/borrar/eliminarActividadRecepcion/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>

            </div>

        </div>


        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Actividad luna de miel</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                  	<table class="table table-striped">
					    <thead>
					      	<tr>
						        <th>Nombre</th>
						        <th>Descripcion</th>
						        <th>Precio</th>
						        <th>Operación</th>
					      	</tr>
					    </thead>
					    <tbody>
					    	@foreach($actividad_luna_de_miel as $lc)
							    <tr>
							        <td>{{ $lc->name }}</td>
							        <td>{{ $lc->description }}</td>
							        <td>{{ $lc->price }}</td>
							        <td>
							        	<div class="row">
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/modificar/productos/actividad_lm/'.$lc->id) }}">
									        		<button class="btn btn-primary btn-block">Modificar</button>
									        	</form>
								        	</div>
								        	<div class="col col-md6">
									        	<form method='GET' action="{{ url('/admin/borrar/eliminarActividadLunaDeMiel/'.$lc->id) }}">
									        		<button class="btn btn-danger btn-block">Eliminar</button>
									        	</form>
								        	</div>

							        	</div>
							        </td>
							    </tr>
							@endforeach
					    </tbody>
					</table>

                </div>
            </div>

        </div>


    </div>
@endsection
