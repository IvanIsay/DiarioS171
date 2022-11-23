@extends('plantilla')

@section('contenido')


  @if (session()->has('confirmacion'))

    {!! "<script> Swal.fire('Correcto!','Tu recuerdo se guardo!','success') </script>" !!}

  @endif



<div class="container col-md-6">
    
    <h1 class= "display-2 text-center mt-5 mb-5  ">Editar Recuerdo</h1>


    @if($errors->any())
        @foreach ($errors->all() as $error)

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong> {{ $error }} </strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endforeach
    @endif





    <div class="card  mt-5 mb-5 ">

        <div class="card-header text-center fs-4 fw-bolder text-danger">
          Fe de erratas !!!
        </div>

        <div class="card-body">
            <form method= "post"  action="{{route('recuerdo.update',$consultaId->idRecuerdo )}}" >
                @csrf
                {!! method_field('PUT') !!}

                <div class="mb-3">
                  <label class="form-label">Titulo: </label>
                  <input type="text" class="form-control" name="txtTitulo" value= "{{ $consultaId->titulo }}" >
                  <p class="text-danger  fst-italic"> {{ $errors->first('txtTitulo') }}  </p>
                  
                </div>

                <div class="mb-3">
                    <label class="form-label">Recuerdo: </label>
                    <input type="text" class="form-control" name="txtRecuerdo" value="{{ $consultaId->recuerdo }}" >
                    <p class="text-danger  fst-italic">  {{ $errors->first('txtRecuerdo') }}   </p>
                   
                  </div>

             

        </div>

        <div class="card-footer ">
            
            <button type="submit" class="btn btn-warning m-1">Actualizar Recuerdo</button>

        </form>

        </div>

      </div>





</div>



@stop
