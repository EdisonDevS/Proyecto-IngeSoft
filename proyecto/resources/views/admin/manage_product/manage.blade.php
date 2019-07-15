@extends('admin.layout')

@section('content')
	<div class="row" style="padding-bottom: 10px">
		<div class="col-md-6" style="margin-top: 10px">
			<form method='GET' action="{{ route('crear_producto') }}">
				<button type="submit" class="btn btn-success btn-block" style="height: 300px">Crear productos</button>
			</form>
		</div>

		<div class="col-md-6" style="margin-top: 10px">
			<form method='GET' action="{{ route('consultar_productos') }}">
				<button type="submit" class="btn btn-success btn-block" style="height: 300px">Ver productos</button>
			</form>
		</div>

		

	</div>
@endsection