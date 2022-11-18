<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Diario Laravel </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>


</head>
 
<body>

    <!-- Barra de navegacion  -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-danger " href="/ "> Diario Laravel </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('casa')?'text-primary fw-bold text-decoration-underline':'' }}" href="Home">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('recuerdo.create')?'text-primary fw-bold text-decoration-underline':'' }} " href="{{ route('recuerdo.create') }}">Registro de recuerdos</a>
              </li>

              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('recuerdo.index')?'text-primary fw-bold text-decoration-underline':'' }}" href="{{ route('recuerdo.index') }}">Consulta de recuerdos</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>



                <!-- Contenido de la pagina  -->

                @yield('contenido')



        <!-- Pie de pagina -->


          <div class="alert alert-warning mt-5 text-center fw-bold " role="alert">
              Ivan Isay Guerra Lopez 2022 CopyRight ®
          </div>













    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


