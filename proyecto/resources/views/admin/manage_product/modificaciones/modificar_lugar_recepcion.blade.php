@extends('admin.layout')

@section('content')

<div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Lugar Recepción</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                    
                    <form method='POST' action="{{ route('crear_lugar_recepcion') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row" style="justify-content: center; display: flex;">
                            <div class="col-md-4" style="margin-top: 10px">
                                <input class="form-control" type="text" name="nombre" placeholder="Nombre">    
                            </div>
                            <div class="col-md-4" style="margin-top: 10px">
                                <input class="form-control" type="text" name="direccion" placeholder="Direccion">    
                            </div>
                            <div class="col-md-4" style="margin-top: 10px">
                                <input class="form-control" type="text" name="precio" placeholder="Precio">    
                            </div>

                            <div class="col-md-12" style="margin-top: 10px">
                                <input class="form-control" type="text" name="descripcion" placeholder="Descripcion">
                            </div>


                            <div class="col-md-12" style="margin-top: 10px">
                                <input name='image'type="file" class="form-control-file border">
                            </div>
                            
                            <div class="col-md-12" style="margin-top: 10px">
                                <button type="submit" class="btn btn-success" style="height: 40px; margin-top: 10px">Crear producto</button>
                            </div>    
                        </div>
                          
                    </form>     
                </div>
                   
            </div>
            
        </div>
@endsection