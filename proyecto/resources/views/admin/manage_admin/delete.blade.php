@extends('admin.layout')

@section('content')
	
	<div class="container" style="padding-bottom: 10px">
	
		<div style="align-content: center; justify-content: center; display: flex">
			<h1>¿Está seguro que desea borrar el admin {{ $admin->name }}?</h1>
		</div>
	
		<div class="row">
			<div class="col col-md-6">
				<form method="GET" action="{{ url('/admin/manage/delete/comfirm/'.$admin->id) }}">
					<button type="submit" class="btn btn-danger btn-block">Eliminar</button>
				</form>
			</div>	

			<div class="col col-md-6">
				<form method="GET" action="{{ route('admin.manage.buscar_admin') }}">
					<button type="submit" class="btn btn-primary btn-block">Cancelar</button>
				</form>
			</div>
		</div>
	</div>

@endsection