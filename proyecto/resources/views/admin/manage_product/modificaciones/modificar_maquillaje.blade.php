@extends('admin.layout')

@section('content')
<div class="col-md-12" style="margin-top: 10px">
            <div class="row" style="justify-content: center; display: flex">
                <div class="col-md-12" style="justify-content: center; display: flex">
                    <h1>Maquillaje</h1>
                </div>
                <div class="col-md-12" style="justify-content: center; display: flex;">
                    
                    <form method='POST' action="{{ route('crear_maquillaje') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $maquillaje->id }}" >
                        <div class="row" style="justify-content: center; display: flex;">
                            
                            <div class="col-md-12" style="margin-top: 10px">
                                <input value="{{ $maquillaje->price }}" class="form-control" type="text" name="precio" placeholder="Precio">    
                            </div>

                            <div class="col-md-12" style="margin-top: 10px">
                                <input value="{{ $maquillaje->description }}" class="form-control" type="text" name="descripcion" placeholder="Descripcion">
                            </div>

                            <div class="col-md-12" style="justify-content: center; display: flex; margin-top: 10px">
                                <img src="{{ '/'.$lugar->image }}" class="rounded-circle">
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