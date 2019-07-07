@extends('layouts.app')

@section('content')

<div class="container" style="justify-content: center; display: flex;">
	<div class="form-control">
		<form>
			<div class="row">
				<div class="col-md-1">
					<p>Asunto:</p>
				</div>
				<div class="col-md-11">
					<input type="text" name="asunto">
				</div>
			</div>
		</form>
		
	</div>
</div>

@endsection