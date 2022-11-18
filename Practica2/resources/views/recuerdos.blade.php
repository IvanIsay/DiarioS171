@extends('plantilla')

@section('contenido')


@foreach($resultRec as $consulta)

<div class="container col-md-6">

    <div class="card  mt-5 mb-5 ">

        <div class="card-header text-center fs-4 fw-bolder text-danger">
            {{ $consulta->fecha }}
        </div>

        <div class="card-body">
            {{ $consulta->titulo}}
            {{ $consulta->recuerdo}}
        
        </div>

        <div class="card-footer ">
            <button type="submit" class="btn btn-warning m-1">A</button>
            <button type="submit" class="btn btn-danger m-1">E</button>
        </div>
    
    </div>

</div>

@endforeach

@stop

