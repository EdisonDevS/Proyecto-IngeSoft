@extends('admin.layout')

@section('content')

	<div class="container">
		<div>
			<table class="table table-striped">
			    <thead>
			      	<tr>
				        <th>Nombre</th>
				        <th>Apellido</th>
				        <th>Email</th>
				        <th>Teléfono</th>
				        <th>Operación</th>
			      	</tr>
			    </thead>
			    <tbody>
			    	@foreach($admins as $admin)
					    <tr>
					        <td>{{ $admin->name }}</td>
					        <td>{{ $admin->last_name }}</td>
					        <td>{{ $admin->email }}</td>
					        <td>{{ $admin->phone }}</td>
					        <td>
					        	<div class="row">
						        	<div class="col col-md6">
							        	<form method='GET' action="{{ url('/admin/manage/modify/'.$admin->id) }}">
							        		<button class="btn btn-primary btn-block">Modificar</button>
							        	</form>
						        	</div>
						        	<div class="col col-md6">
							        	<form method='GET' action="{{ url('/admin/manage/delete/'.$admin->id) }}">
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

@endsection