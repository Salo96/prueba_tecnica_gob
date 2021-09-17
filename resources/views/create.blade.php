@extends('layout.layout')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">

         
            <div class="text-center">
                <h1>Añadir Contacto</h1>
            </div>
            
            <form action="{{ route('store') }}" method="POST">
                @csrf

                <div class="form-group row mt-2">
                    <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                    <div class="col-md-6">
                        <input id="nombre" type="text" class="form-control" name="nombre">

                        @if ($errors->has('nombre'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </div>
                        @endif
                       
                    </div>
                </div>

                <div class="form-group row  mt-2">
                    <label for="apellido" class="col-md-4 col-form-label text-md-right">Apellido</label>
                    <div class="col-md-6">
                        <input id="apellido" type="text" class="form-control" name="apellido">

                        @if ($errors->has('apellido'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('apellido') }}</strong>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="form-group row  mt-2">
                    <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>
                    <div class="col-md-6">
                        <input id="edad" type="text" class="form-control" name="edad">
                        @if ($errors->has('edad'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('edad') }}</strong>
                            </div>
                        @endif

                    </div>
                </div>

                
                <div class="form-group row  mt-2">
                    <label for="direccion" class="col-md-4 col-form-label text-md-right">Direccion</label>
                    <div class="col-md-6">
                        
                    <textarea name="direccion" id="direccion" class="form-control" cols="40" rows="3"></textarea>

                        @if ($errors->has('direccion'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('direccion') }}</strong>
                            </div>
                        @endif
                       
                    </div>
                </div>

                <div class="form-group row  mt-2">
                    <label for="correo" class="col-md-4 col-form-label text-md-right">Correo</label>
                    <div class="col-md-6">
                        <input id="correo" type="text" class="form-control" name="correo">
                        @if ($errors->has('correo'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('correo') }}</strong>
                            </div>
                        @endif

                    </div>
                </div>

                <div class="form-group row  mt-2">
                    <label for="telefono" class="col-md-4 col-form-label text-md-right">Telefono</label>
                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control" name="telefono">
                        @if ($errors->has('telefono'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </div>
                        @endif

                    </div>
                </div>







                <div class="form-group row mb-0  mt-2">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Crear Contacto
                        </button>

                        <a href="{{ route('index') }}" class="btn btn-danger">atras</a>
                    </div>
                </div>

            </form>

          
        </div>
    </div>
</div>

@endsection