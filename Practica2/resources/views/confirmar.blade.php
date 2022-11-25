@extends('plantilla')

@section('contenido')



<div class="container col-md-6">

    <h1 class="display-1 text-center mt-5 "> Confirma!!</h1>

    <div class="alert alert-danger alert-dismissible fade show text-center mt-5" role="alert">
        <strong> ¿¿Seguro que eliminaras el siguiente recuerdo ?? </strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>



    <div class="card  mt-5 mb-5 ">

        <div class="card-header text-center fs-4 fw-bolder text-primary">
            {{ $consultaId->fecha }}
        </div>

        <div class="card-body">
           <h4> {{ $consultaId->titulo}} </h4> 
            <p> {{ $consultaId->recuerdo}} </p>
        
        </div>

        <div class="card-footer ">
           
            <form action="{{route('recuerdo.destroy',$consultaId->idRecuerdo)}}"  method="POST">
                @csrf
                @method('delete')
            <button type="submit" class="btn btn-danger">Si, Eliminalo</button>
            </form>

            <a href="{{route('recuerdo.index')}}" class="btn btn-success m-1"> No,regresame</a>
            
            
     
        </div>
    
    </div>

</div>


@stop

