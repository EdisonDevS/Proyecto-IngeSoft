@extends('layouts.app')

@section('content')
<div style="justify-content: center; display: flex;">
	<div class="container row" style="justify-content: center; display: flex;">
		<div class="col-md-12" style="justify-content: center; display: flex;">
			<h1>Bienvenido</h1>
		</div>

		<div class="col-md-12" style="justify-content: center; display: flex;">
			<p>A continuación selecciona tu foto de perfil</p>
		</div>

		<form method="POST" action="{{ route('change_profile_photo') }}" enctype="multipart/form-data">
			@csrf

			<input type="hidden" name="id" value="{{ auth()->user()->id }}">

			<div class="form-control col-md-12">
				<div style="padding-bottom: 10px; justify-content: center; display: flex">
			    	<input type="file" name="photo" required>
		    	</div>	
			</div>

			<div style="justify-content: center; display: flex; margin-top: 10px">
				<button class="btn btn-primary btn-block" type="submit">Confirmar foto</button>
			</div>
		</form>
		
	</div>
	
</div>


@endsection