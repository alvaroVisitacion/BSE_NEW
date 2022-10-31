<!doctype html>
<html lang="es">
  <head>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="#" type="image/png"/>
    <title>@yield('title')</title>
     
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}"> 
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<style>

 body{
        background-image: url(../img/servi.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
 }
  footer{
        background-image: url(../img/foot.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
 }

  p {
    margin-bottom: 20px;
  }
 
  header {
    background: linear-gradient(30deg, #2D9494, #020226); 
    width: 100%;
    position: fixed;
    z-index: 12;
  }

  nav {
  /* Desplazamos el nav hacia la izquierda   float: left; 
    background: linear-gradient(30deg, #2D9494, #020226); */

  }
 
  nav ul li { 
    font-family: Arial, sans-serif;
    font-size: 14px;
  }
  nav ul li a {
    display: block; /* Convertimos los elementos a en elementos bloque para manipular el padding */
    padding: 20px;
    color: #fff;
    text-decoration: none;
  }
  nav ul li:hover {
    background: #3ead47;
  }
  .conteiner {
    padding-top: 80px;
  }

</style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  </head>

  <body  >

    <!-- Inicio del menu 
    
      <nav class="navbar navbar-expand-md navbar-dark bg-gradient-primary">-->
      <header>
      <section class="wrapper">
      <nav class="navbar navbar-expand-md navbar-dark" >
        <div class="container-fluid">
        <!-- icono o nombre -->
          <a class="navbar-brand" href="{{url('/')}}">
              <div class="image">
                <img src="{{asset('adminlte/dist/img/hbse3.png')}}" style="border:0; width:405px; height:65px">
              </div> 
          </a> 
                
        <!-- boton del menu -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

          <!-- elementos del menu colapsable -->
        <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav me-auto"> 
          <li class="nav-header"></li>
          @guest
            
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{action('ServiciosPublicController@mostrar_Servicios')}}">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{action('FormacionPublicController@mostrar_Formaciones')}}">Formacion</a>
            </li>
             <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{action('SocioPublicController@mostrar_Socios')}}">Socios</a>
            </li>
          @else
           <!--SEGUN PRIVILEGIO-->
           <li class="nav-item">
              <a class="nav-link" href="{{route('socios.index')}}">Socios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('formaciones.index')}}">Formacion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('servicios.index')}}">Servicios</a>
            </li>
            @can('admin-level')
            <li class="nav-item">
              <a class="nav-link" href="#"> </a>
            </li>
            @endcan
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Públicos
              </a>

              <ul class="dropdown-menu  " aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{action('ServiciosPublicController@mostrar_Servicios')}}">Servicios</a>
                <a class="dropdown-item" href="{{action('FormacionPublicController@mostrar_Formaciones')}}">Formaciones</a>  
                <a class="dropdown-item" href="{{action('SocioPublicController@mostrar_Socios')}}">Socios</a>
              </ul>
            </li>
            @endguest
          </ul>
          <hr class="d-md-none text-white-50">
           <!-- enlaces redes sociales -->
          <ul class="navbar-nav  flex-row flex-wrap text-light">

           <li class="nav-item col-6 col-md-auto p-3">
                <i class="bi bi-twitter"></i>
                <small class="d-md-none ms-2">Twitter</small>  
            </li>

            <li class="nav-item col-6 col-md-auto p-3">
              <i class="bi bi-github"></i>
              <small class="d-md-none ms-2">GitHub</small> 
            </li>

            <li class="nav-item col-6 col-md-auto p-3">
              <i class="bi bi-whatsapp"></i>
              <small class="d-md-none ms-2">WhatsApp</small>
            </li>

            <li class="nav-item col-6 col-md-auto p-3">
              <i class="bi bi-facebook"></i>
              <small class="d-md-none ms-2">Facebook</small>
            </li>

          </ul>
              <!-- Right navbar links -->
          <!-- LOGIN  -->
          <ul class="navbar-nav ml-auto">
              @guest 
                  <a class="btn btn-outline-warning d-none d-md-inline-block " type="submit" href="{{ route('login') }}">{{ __('Login') }}</a>
               
              @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
                  <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          @can('admin-level')
                              <a class="dropdown-item" href="{{route('admin.users.index')}}">Usuarios</a>
                              <a class="dropdown-item"  href="{{route('home')}}">Pagina Principal</a>
                          @endcan                                   
                          <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
          
        </div>
     
        </div>  
      </nav>
      </section>
      </header>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!-- LAYOUT  -->
          <div class="container-fluid">

            @yield('contenido')
            
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
 
  </body>
      <footer class="main-footer text-center">
          <strong>Copyright &copy; <a id="current_date"></a> <a href="#">Business Solution Enterprise S.A.C</a>.</strong><br>
          Todos los derechos reservados.
          Diseñado por <a href="https://www.facebook.com/alvarovisi7/" target="_blank" >AVisi7</a> 
      </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
        date = new Date();
          year = date.getFullYear(); 
          document.getElementById("current_date").innerHTML = year; 
        </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>