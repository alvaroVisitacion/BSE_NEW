<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('PLogin/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('PLogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<style>
	body{
		background-image: ;
		background-repeat: no-repeat;
		background-size: cover;
	}

	    nav {
        background: linear-gradient(30deg, #2D9494, #020226); 
    }
</style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<body >
<!--<body style="background-image:url(PLogin/fondo.jpg)" >-->
      
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
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
          @else
           <!--SEGUN PRIVILEGIO-->
           
            @can('admin-level')
            <li class="nav-item">
              <a class="nav-link" href="#">Precios</a>
            </li>
            @endcan
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
              </a>

              <ul class="dropdown-menu"  style="background-color:#D9DDFB;" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Renta</a></li>
                <li><a class="dropdown-item" href="#">Equipos</a><li>   
                <li><a class="dropdown-item" href="#">Networking</a></li>
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

	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-15">
				<form class="login100-form validate-form" method="POST" action="{{route('login')}}">
				@csrf
					<span class="login100-form-title p-b-30">SBE</span>
					<span class="login100-form-avatar">
						<img src="{{asset('PLogin/images/login02.png')}}" alt="AVATAR">
					</span>
					<!--EMAIL-->
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "E-Mail Address">
						<input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<!--PASSWORD-->
					<div class="wrap-input100 validate-input m-b-35" data-validate="Enter password">
						<input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
                        @enderror
                    </div>
                    <!--FORGET YOUR PASSWORD-->
					<ul class="login-more p-t">
						<li class="m-b-8">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
						</li>
					</ul>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">{{ __('Login') }}</button>
                    </div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="{{asset('PLogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PLogin/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PLogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('PLogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PLogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PLogin/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('PLogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PLogin/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('PLogin/js/main.js')}}"></script>
	    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>