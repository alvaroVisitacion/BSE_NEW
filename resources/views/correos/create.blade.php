@extends('layouts.Plantilla')

@section('contenido') <br>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
   
</head>

<body>
    <main>
    <br>
<br><br><br>

        <div class="container py-3">  
 

            <div class="row">
                <div class="col-lg-6 col-md-12">
                  <form method="POST" action="{{ route ('corre.store')}}" enctype="multipart/form-data">
                      @csrf

                      <div class="mb-3">
                            <label for="nombre" class="form-label" style="color:white;"> Nombre</label>
                            <input type="text" class="form-control" id="cor_nombre" name="cor_nombre" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label" style="color:white;"> Correo electrónico</label>
                            <input type="email" class="form-control" id="cor_correo" name="cor_correo" required>
                        </div>

                        <div class="mb-3">
                            <label for="asunto" class="form-label" style="color:white;"> Asunto</label>
                            <input type="text" class="form-control" id="cor_asunto" name="cor_asunto" required>
                        </div>

                        <div class="mb-3">
                            <label for="mensaje" class="form-label" style="color:white;"> Mensaje</label>
                            <textarea class="form-control" id="cor_mensaje" name="cor_mensaje" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="6Le9eugiAAAAANqglBq1G0lV_Ged8U77HPMC9HFz" ></div>
                            @if(Session::has('g-recaptcha-response'))
                            <p class="alert {{Session::get('alert-class','alert-info')}}">
                            {{Session::get('g-recaptcha-response')}}
                            </p>
                            @endif
                        </div> <br>
                      <input type="submit" name="submit" class="btn btn-success enviar_" value="Grabar"  >
                      <a href="#" class="btn btn-primary">Volver</a>
                      <br>

                  </form>
 
                </div>
            </div>

        </div>
    </main>
</body>

</html>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
         
        $('.enviar_').on('click',function(){

            Swal.fire('Se ha enviado su mensaje ... no contactaremos con usted');
        })
    </script>
@endsection

