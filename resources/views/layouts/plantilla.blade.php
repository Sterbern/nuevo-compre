<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">-->
    <link rel="stylesheet" href="{{ asset('fa/css/all.css') }}">       
    <link rel="stylesheet" href="{{ asset('bs/css/boostrap.min.css') }}">
    <title>@yield('title')</title>  
  </head>
  <body>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('compre.index') }}">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('compre.create') }}">Nuevo</a>
                  </li> 
                  
                  <li class="nav-item nav-link disabled">
                    <a class="nav-link" href=""></a>
                  </li>             
                  
                  <li class="nav-item nav-link disabled">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                  </li>
                </ul>                
              </div>
            </div>
          </nav>
    </div>
            <div>@yield('menu')</div>
            <div>@yield('content')</div>
            
            @stack('modal')
            <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
            <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
            @stack('js')
            

  </body>
</html>