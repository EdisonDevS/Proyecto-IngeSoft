@extends('admin.layout')

@section('content')
	<div class="container" style="padding-bottom: 10px">
		<form method="POST" action="{{ route('admin.manage.users') }}">
			@csrf
			<div class="row">
				<div class="col-md-2"></div>
			
				<div class="col-md-2">
					<label for="name" class="col-form-label text-md-right"><strong>Nombre:</strong></label>
				</div>
				
				<div class="col-md-4">
					<input type="text" id="name" name="name" class="form-control">	
				</div>
				
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary btn-block">Buscar</button>	
				</div>

			</div>
			
		</form>

		<div style="padding-top: 10px">
			@if($users)

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
				    	@forelse($users as $user)
						    <tr>
						        <td>{{ $user->name }}</td>
						        <td>{{ $user->last_name }}</td>
						        <td>{{ $user->email }}</td>
						        <td>{{ $user->phone }}</td>
						        <td>
						        	<div class="row">
							        	<div class="col col-md6">
								        	<form method='GET' action="{{ url('/admin/manage/users/modify/'.$user->id) }}">
								        		<button class="btn btn-primary btn-block">Modificar</button>
								        	</form>
							        	</div>
							        	<div class="col col-md6">
								        	<form method='GET' action="{{ url('/admin/manage/delete/'.$user->id) }}">
								        		<button class="btn btn-danger btn-block">Eliminar</button>
								        	</form>
							        	</div>
						        		
						        	</div>
						        </td>
						    </tr>
						@empty
							<h1>No hay usuarios que coincidan con los parametros de busqueda</h1>
						@endforelse
				    </tbody>
				  	</table>
				@endif
		</div>

	</div>
@endsection