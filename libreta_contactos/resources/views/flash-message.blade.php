@if ($message = Session::get('success'))

    <div class="alert alert-success alert-block mx-auto w-75">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{{ $message }}</strong>

    </div>

@endif


@if ($message = Session::get('error'))

    <div class="alert alert-danger alert-block mx-auto w-75">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{{ $message }}</strong>

    </div>

@endif


@if ($message = Session::get('warning'))

    <div class="alert alert-warning alert-block mx-auto w-75">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{{ $message }}</strong>

    </div>

@endif


@if ($message = Session::get('info'))

    <div class="alert alert-info alert-block mx-auto w-75">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{{ $message }}</strong>

    </div>

@endif


@if ($errors->any())

    <div class="alert alert-danger mx-auto w-75">

        <button type="button" class="close" data-dismiss="alert">×</button>

        Porfavor verificar los campos, existen errores

    </div>

@endif
