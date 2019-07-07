@extends('admin.layout')

@section('content')
	<div class="row" style="padding-bottom: 10px">
		<div class="col-md-6">
			<form method='GET' action="{{ route('admin.manage.crear_admin') }}">
				<button type="submit" class="btn btn-success btn-block" style="height: 300px">Crear administrador</button>
			</form>
		</div>
		<div class="col-md-6">
			<form method='GET' action="{{ route('admin.manage.buscar_admin') }}">
				<button type="submit" class="btn btn-success btn-block" style="height: 300px">Consultar administradores</button>
			</form>
		</div>
	</div>
@endsection