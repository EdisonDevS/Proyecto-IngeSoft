@extends('admin.layout')

@section('content')
	
	<div class="container">
		<div class="card-body">
					<form method="POST" action="{{ route('admin.manage.users.modify') }}">
						@csrf

						<input type="hidden" name="id" value="{{ $user->id }}">
						
						<div class="card">
								<div class="card-body">
									<div class="form-group row">
										<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

										<div class="col-md-6">
											<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

										<div class="col-md-6">
											<input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $user->last_name }}" required autocomplete="last_name1" autofocus>

											@error('last_name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="document" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>

										<div class="col-md-6">
											<input id="document" type="text" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ $user->document }}" required autocomplete="document" autofocus>

											@error('document')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

									<div class="form-group row">
										<label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

										<div class="col-md-6">
											<select class="form-control" id="gender" name="gender" value="{{ $user->gender }}">
												<option value="Hombre">Hombre</option>
												<option value="Mujer">Mujer</option>
												<option value="Otro">Otro</option>
											</select>

											@error('gender')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</div>

								</div>
							</div>
							

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Modificar') }}
								</button>
							</div>
						</div>
					</form>
				</div>
	</div>

@endsection