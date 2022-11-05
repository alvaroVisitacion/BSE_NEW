@extends('layouts.Plantilla')

@section('contenido') <br>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('hlogin/css/estilos.css')}}"/> 
    <title>LOGIN</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
                 
                <form class="login100-form validate-form" method="POST" action="{{route('login')}}">
				@csrf &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="login100-form-avatar" >
                            <img src="{{asset('PLogin/images/login02.png')}}" alt="AVATAR"  height="80px"  >
                    </span> 
                    <div class="form-group mx-sm-4 pt-3" data-validate = "E-Mail Address">
                        <input  class="form-control" @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Ingrese su Correo" autofocus>
                            	@error('email')
                            	<span class="invalid-feedback" role="alert">
                            	    <strong>{{ $message }}</strong>
                            	</span>
                            	@enderror

                  </div>
                    <div class="form-group mx-sm-4 pb-3" >
                        <input  class="form-control texto" @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Ingrese su Contraseña">
                        @error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
                        @enderror
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" class="btn btn-block ingresar" value="INGRESAR">
                    </div>
                    <div class="form-group mx-sm-4 text-right">
                          @if (Route::has('password.request'))
                                <a class="btn btn-link contraseña" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        <!--<span class=""><a href="#" class="olvide">Olvide mi contraseña?</a></span>-->
                    </div>
                    <div class="form-group text-center">
                        <span><a  class="olvide1" href="{{ route('register') }}">REGISTRARSE</a></span>
                    </div>
                </form>
            </div>  
        </div>    

    </div>

<br><br>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

@endsection
