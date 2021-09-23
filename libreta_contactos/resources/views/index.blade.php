@extends('welcome')

@section('content')

    <div class="container">
        <div class="row d-flex" style="justify-content: end;">
            <a href="{{route('libreta.create')}}" class="btn btn-success mt-3">Crear</a>
        </div>
    </div>

    <div class="container">
        <div class="row" style="justify-content: center;">
            <h2 class="p-3">
                <strong>Libreta de Contactos</strong>
            </h2>
        </div>

        <div class="row w-75 mx-auto" >
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
                @foreach($libreta as $item)
                <tr>
                    <td class="text-center">{{$item->nombre}}</td>
                    <td class="text-center">{{$item->correo}}</td>
                    <td class="text-center">{{$item->telefono}}</td>
                    <td class="text-center">
                        <a href="#">
                            <i class="far fa-edit"></i>
                        </a>
                        <button>
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

