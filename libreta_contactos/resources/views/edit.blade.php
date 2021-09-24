@extends('welcome')

@section('content')

    <div class="container">
        <div class="row d-flex">
            <h4 class="p-4" style="text-transform: uppercase; font-weight: bold;">
                Editar contacto
            </h4>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <img class="img-fluid mx-auto" src="{{asset('imgs/icon_user.png')}}" width="150" height="150" alt="icon">
        </div>
    </div>

    <div class="container mt-2">
        <div class="row mx-auto w-50">
            <form action="{{route('libreta.update', $libreta)}}" style="width: 100%;" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"
                           value="{{$libreta->nombre}}" required>
                </div>

                <div class="form-group">
                    <label for="correo">Email</label>
                    <input type="email" class="form-control" id="correo" name="correo"
                           value="{{$libreta->correo}}" required>
                </div>

                <div class="form-group">
                    <label for="tel">Teléfono</label>
                    <input type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                           class="form-control tel" name="tel" value="{{$libreta->telefono}}" required>
                </div>

                <div class="form-group mt-4">
                    <input type="submit" class="btn btn-success" value="Modificar">
                    <a href="/" class="btn btn-danger">Volver a Inicio</a>
                </div>

            </form>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>
    $(document).ready(function (){
        $('.tel').mask('000-000-0000');
    });
</script>



