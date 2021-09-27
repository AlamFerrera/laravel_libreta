@extends('welcome')

@section('content')

    <div class="container">
        <div class="row d-flex mx-auto w-75" style="justify-content: end;">
            <a href="{{route('libreta.create')}}" class="btn btn-success mt-3">Crear</a>
        </div>
    </div>

    <div class="container">
        <div class="row" style="justify-content: center;">
            <h2 class="p-3">
                <strong>Libreta de Contactos</strong>
            </h2>
        </div>

        <div class="col-12 col-md-12 table-responsive-md row w-75 mx-auto" >
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Teléfono</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($libreta as $key => $item)
                <tr>
                    <td class="text-center text-capitalize">{{$item->nombre}}</td>
                    <td class="text-center">{{$item->correo}}</td>
                    <td class="text-center">{{$item->telefono}}</td>
                    <td class="text-center">
                        <a href="{{route('libreta.edit', encrypt($item->id) )}}">
                            <i class="far fa-edit"></i>
                        </a>
                        <button data-toggle="modal" data-target="#exampleModal_{{$key}}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal_{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar contacto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('libreta.destroy', $item)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <div class="modal-body">
                                    <h3 class="lead text-center">¿Seguro desea eliminar el contacto <u class="text-capitalize">{{$item->nombre}}</u>?</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

