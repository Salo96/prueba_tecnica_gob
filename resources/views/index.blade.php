@extends('layout.layout')
@section('content')
  
    <div class="row">
        <div class="col">

            <h1 class="text-center">Contactos</h1>

            <form class="d-flex col-md-4">
                <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

            <div class="mb-3 mt-3">
                <a class="btn btn-outline-success " href="{{ route('create') }}">Crear Contacto</a>
            </div>

            @if(session('message'))
                <div class="alert alert-success col-md-12 text-center">
                    <h5>{{ session('message') }} </h5>
                </div>
            @endif


            <table class="table">
                <thead class="table-dark">
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Correo</th>
                    <th scope="col">telefono</th>
                    <th scope="col">opciones</th>
                </thead>
                <tbody>

                @foreach ($contactos as $contacto )
                    
          

                    <tr>

                        <td>{{ $contacto->nombre }}</td>
                        <td>{{ $contacto->apellido }}</td>
                        <td>{{ $contacto->edad }}</td>
                        <td>{{ $contacto->direccion }}</td>
                        <td>{{ $contacto->correo }}</td>
                        <td>{{ $contacto->telefono }}</td>

                        <td>
                            <a type="submit" class="btn btn-outline-success mr-2"
                                href="{{ route('edit', ['id'=>$contacto->id])  }}"
                            >Actualizar</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $contacto->id }}">
                                Eliminar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $contacto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    <div class="modal-body">
                                        Una ves eliminado ya no se podrar recuperar el contacto
                                    </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="{{ route('eliminar', ['id'=>$contacto->id ]) }}" type="button" class="btn btn-danger">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>

                    </tr>

                @endforeach
           
                </tbody>
            </table>

        </div>
    </div>
    
@endsection



    
