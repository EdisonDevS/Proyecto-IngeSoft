@extends('admin.layout')

@section('content')
    <div class="row" style="padding-bottom: 10px">
        <div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Lugar Ceremonia</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                    
                    <form method='POST' action="{{ route('crear_lugar_ceremonia') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $lugar->id }}">
                        <div class="row" style="justify-content: center; display: flex;">
                            <div class="col-md-4" style="margin-top: 10px">
                                <input value="{{ $lugar->name }}" class="form-control" type="text" name="nombre" placeholder="Nombre">    
                            </div>
                            <div class="col-md-4" style="margin-top: 10px">
                                <input value="{{ $lugar->detail }}" class="form-control" type="text" name="direccion" placeholder="Direccion">    
                            </div>
                            <div class="col-md-4" style="margin-top: 10px">
                                <input value="{{ $lugar->price }}" class="form-control" type="text" name="precio" placeholder="Precio">    
                            </div>

                            <div class="col-md-12" style="margin-top: 10px">
                                <input value="{{ $lugar->description }}" class="form-control" type="text" name="descripcion" placeholder="Descripcion">
                            </div>

                            <div class="col-md-12" style="justify-content: center; display: flex; margin-top: 10px">
                                <img src="{{ '/'.$lugar->image }}" class="rounded-circle">
                            </div>

                            <div class="col-md-12" style="margin-top: 10px">
                                <input name='image' name='image'type="file" class="form-control-file border">
                            </div>
                            
                            <div class="col-md-12" style="margin-top: 10px">
                                <button type="submit" class="btn btn-success" style="height: 40px; margin-top: 10px">Crear producto</button>
                            </div>    
                        </div>
                          
                    </form>     
                </div>
                   
            </div>
            
        </div>


    </div>
@endsection