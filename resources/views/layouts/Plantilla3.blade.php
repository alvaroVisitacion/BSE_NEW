<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="{{asset('width=device-width, initial-scale=1')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap-slider/css/bootstrap-slider.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <!-- LOGIN  -->
    <ul class="navbar-nav ml-auto">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/home')}}" class="brand-link">
      <span class="brand-text font-weight-light">I.E.P.E."San Juan"</span>
      <img src="{{asset('adminlte/dist/img/login01.png')}}" class="img-circle elevation-2" alt="User Image" height="65px" width="70">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('adminlte/dist/img/avatar3.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <!--<a href="#" class="d-block">Administrador</a>-->
          <div class="d-block" style="color: lightgray;" >Bienvenido {{ Auth::user()->name }}</div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header">Opciones</li>
          @guest
            <li class="nav-item"><a href="" class="nav-link"><p>Como accediste ? :v</p></a></li>
          @else
          <!--SEGUN PRIVILEGIO-->
            
              <!-- DOCENTE-> DATOS PERSONALES+REGISTRAR NOTAS -->
            @can('teacher-level') 
              <li class="nav-item menu-open-active">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    NOTAS
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <<li class="nav-item">
                    <a href="{{route('notas.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Registrar Notas</p>
                    </a>
                  </li>
                </ul>
              </li>
            @endcan

               @can('user-level')
              <li class="nav-item menu-open-active">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    DOCENTE
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('docente.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Datos Personales</p>
                    </a>
                  </li> 
                </ul>
              </li>
          

           
              <!--MATRICULAS-->
              <li class="nav-item menu-open-active">
                <a href="#" class="nav-link active">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                  MATRICULA
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{URL::to('/matricula')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Registrar</p>
                    </a>
                    </li>
                </ul>
              </li>
              <!--CURSOS->REGISTRAR-->
              <li class="nav-item menu-open-active">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    CURSOS
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/curso" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Registrar</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="/capacidad" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Capacidad por Curso</p>
                    </a>
                  </li>

                </ul>
              </li>
              <!--NIVELES-->
              <li class="nav-item menu-open-active">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>NIVEL EDUCATIVO<i class="right fas fa-angle-left"></i></p>
                </a>
                
                <ul class="nav nav-treeview">
                  <!--INICIAL-->
                  <li class="nav-item">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Inicial<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i><p>4 Años</p></a>
                      </li>

                      <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="far fa-circle nav-icon"></i><p>5 Años</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--PRIMARIA-->
                  <li class="nav-item">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Primaria<i class="right fas fa-angle-left"></i></p>
                    </a>
                  <ul class="nav nav-treeview">
                    <!--1ER-GRADO-->
                      <li class="nav-item">
                          <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Primer Grado<i class="right fas fa-angle-left"></i></p>
                          </a>
                              
                           
            
                      </li>
                    <!--2DO-GRADO-->
                      <li class="nav-item">
                        <a href="#" class="nav-link ">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>Segundo Grado<i class="right fas fa-angle-left"></i></p>
                        </a>
                              
                        
                      </li>
                    <!--3ER-GRADO-->
                      <li class="nav-item">
                          <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Tercer Grado<i class="right fas fa-angle-left"></i></p>
                          </a>
                            

                      </li>
                    <!--4TO-GRADO-GRADO-->
                      <li class="nav-item">
                          <a href="#" class="nav-link ">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>Cuarto Grado<i class="right fas fa-angle-left"></i></p>
                          </a>
                        
                              
                      </li>
                    <!--5TO-GRADO-->
                      <li class="nav-item">
                          <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Quinto Grado<i class="right fas fa-angle-left"></i></p>
                          </a>
                              
                        
                              
                      </li>
                      <!--6TO-GRADO-->
                      <li class="nav-item">
                          <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Sexto Grado<i class="right fas fa-angle-left"></i></p>
                          </a>
                         
                              
                      </li>
                  </ul>
                </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>Secundaria<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Primer Grado<i class="right fas fa-angle-left"></i></p>
                          </a>
                        
                      </li>

                      <li class="nav-item">
                          <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Segundo Grado<i class="right fas fa-angle-left"></i></p>
                          </a>
                              
                          
                      </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>Tercer Grado<i class="right fas fa-angle-left"></i></p>
                            </a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>Cuarto Grado<i class="right fas fa-angle-left"></i></p>
                            </a>
                            
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>Quinto Grado<i class="right fas fa-angle-left"></i></p>
                            </a>
                                
                          
                        </li>
                    </ul>
                  </li>              
                </ul>
              </li>
              <!--SECCIONES -> REGISTRAR-->
              <li class="nav-item menu-open-active">
                <a href="#" class="nav-link active">
                  <i class="nav-icon far fa-plus-square"></i>
                  <p>
                  SECCIONES
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('seccion.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Registrar</p>
                    </a>
                  </li>
                </ul>
              </li> 
              <!--ALUMNO->DATOS PERSONALES + LIBRETA-->
              <li class="nav-item menu-open-active">
                  <a href="" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      ALUMNO
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{URL::to('/alumno')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Datos Personales</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Libreta</p>
                      </a>
                    </li>
                    
                  </ul>
              </li>

              <li class="nav-item menu-open-active">
                <a href="" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    CATEDRA
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('catedra.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Seleccionar Docentes</p>
                    </a>
                  </li>

                </ul>
            </li>


          @endcan

          @endguest
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">

  
    <div class="float-center d-none d-sm-inline-block">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      Copyright &copy; 2020 <b>I.E.P.E. "SAN JUAN"</b> Todos los derechos reservados.
    </div>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<<script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
<!-- Ion Slider -->
<script src="{{asset('adminlte/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!-- Bootstrap slider -->
<script src="{{asset('adminlte/plugins/bootstrap-slider/bootstrap-slider.min.js')}}"></script>
</body>
</html>