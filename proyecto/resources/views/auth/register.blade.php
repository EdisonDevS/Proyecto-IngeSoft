@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#conyuge1">
                            Primer cónyuge
                        </button>

                        <div id="conyuge1" class="collapse">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name1" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                        <div class="col-md-6">
                                            <input id="name1" type="text" class="form-control @error('name1') is-invalid @enderror" name="name1" value="{{ old('name1') }}" required autocomplete="name" autofocus>

                                            @error('name1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="last_name1" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                        <div class="col-md-6">
                                            <input id="last_name1" type="text" class="form-control @error('last_name1') is-invalid @enderror" name="last_name1" value="{{ old('last_name1') }}" required autocomplete="last_name1" autofocus>

                                            @error('last_name1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="document1" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>

                                        <div class="col-md-6">
                                            <input id="document1" type="text" class="form-control @error('document1') is-invalid @enderror" name="document1" value="{{ old('document1') }}" required autocomplete="document1" autofocus>

                                            @error('document1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gender1" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                                        <div class="col-md-6">
                                            <select class="form-control" id="gender1" name="gender1" value="{{ old('gender1') }}">
                                                <option value="Hombre">Hombre</option>
                                                <option value="Mujer">Mujer</option>
                                                <option value="Otro">Otro</option>
                                            </select>

                                            @error('gender1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                            
                        
                        <button class="btn btn-primary btn-block" data-toggle="collapse" data-target="#conyuge2">
                            Segundo cónyuge
                        </button>

                        <div id="conyuge2" class="collapse">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name2" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                        <div class="col-md-6">
                                            <input id="name2" type="text" class="form-control @error('name2') is-invalid @enderror" name="name2" value="{{ old('name2') }}" required autocomplete="name" autofocus>

                                            @error('name2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="last_name2" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                        <div class="col-md-6">
                                            <input id="last_name2" type="text" class="form-control @error('last_name2') is-invalid @enderror" name="last_name2" value="{{ old('last_name2') }}" required autocomplete="last_name2" autofocus>

                                            @error('last_name2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="document2" class="col-md-4 col-form-label text-md-right">{{ __('Documento') }}</label>

                                        <div class="col-md-6">
                                            <input id="document1" type="text" class="form-control @error('document2') is-invalid @enderror" name="document2" value="{{ old('document2') }}" required autocomplete="document2" autofocus>

                                            @error('document2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="gender2" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                                        <div class="col-md-6">
                                            <select class="form-control" id="gender2" name="gender2" value="{{ old('gender2') }}">
                                                <option value="Hombre">Hombre</option>
                                                <option value="Mujer">Mujer</option>
                                                <option value="Otro">Otro</option>
                                            </select>

                                            @error('gender2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group row" style="padding-top: 10px">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="padding-top: 10px">
                            <label for="budget" class="col-md-4 col-form-label text-md-right">{{ __('Presupuesto') }}</label>

                            <div class="col-md-6">
                                <input id="budget" type="text" class="form-control @error('budget') is-invalid @enderror" name="budget" value="{{ old('budget') }}" required autocomplete="budget" autofocus>

                                @error('budget')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
