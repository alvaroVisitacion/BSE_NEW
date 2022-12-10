
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <style>
        body{
            background-image: url(../img/servi.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
    }
    </style>

</head>

<body  style="background-image: url(../img/servi.png);">
    <main>
    <br>
<br><br><br>

        <div class="container py-3">
             <div class="row">
                <div class="col-lg-6 col-md-12">
                     <!-- <div class="mb-3">
                            <label for="nombre" class="form-label" style="color:black;">Tipo:  {{$mensaje["id_tipo"]}}</label>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label" style="color:black;">Catalogo:  {{$mensaje["id_catalogo"]}}</label>
                        </div>-->
                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color:blue;"> Tipo de Persona: {{$mensaje["persona"]}}</label>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color:black;"> TIPO: {{$mensaje["descripcion"]}}</label>
                        </div>

                      <div class="mb-3">
                            <label for="nombre" class="form-label" style="color:black;" >Nombre:  {{$mensaje["nombre"]}} </label>
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color:black;"> Apellido: {{$mensaje["apellido"]}}</label>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color:black;"> DNI: {{$mensaje["dni"]}}</label>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color:black;"> RUC: {{$mensaje["ruc"]}}</label>
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label" style="color:blue;"> Telefono: {{$mensaje["telefono"]}}</label>
                        </div>

                        <div class="mb-3">
                            <label for="asunto" class="form-label" style="color:blue;"> Asunto: {{$mensaje["asunto"]}}</label>
                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label" style="color:blue;"> Correo electrónico: {{$mensaje["correo"]}}</label>
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color:blue;"> Nombre de la Empresa: {{$mensaje["empresa"]}}</label>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color:blue;"> Cargo Empresa: {{$mensaje["cargo"]}}</label>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label" style="color:blue;"> Mensaje: {{$mensaje["mensaje"]}}</label>
                        </div>

                      <br>

                </div>
            </div>

        </div>
    </main>
</body>

</html>
