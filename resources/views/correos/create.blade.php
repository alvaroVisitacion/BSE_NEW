@extends('layouts.Plantilla')

@section('contenido') <br>
<?php
 

use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};
 
if (isset($_POST['submit'])) {

    $cor_nombre = $_POST['cor_nombre'];
    $cor_correo = $_POST['cor_correo'];
    $cor_asunto = $_POST['cor_asunto'];
    $cor_mensaje = $_POST['cor_mensaje'];

    $ip = $_SERVER["REMOTE_ADDR"];
    $captcha = $_POST['g-recaptcha-response'];
    $secretKey = '6Le9eugiAAAAALqSPup_APeQot9dVCOYV1KI2GzX';

    $errors = array();

    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$ip}");

    $atributos = json_decode($response, TRUE);

    if (!$atributos['success']) {
        $errors[] = 'Verifica el captcha';
    }

    if (empty($nombre)) {
        $errors[] = 'El campo nombre es obligatorio';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'La dirección de correo electrónico no es válida';
    }

    if (empty($asunto)) {
        $errors[] = 'El campo asunto es obligatorio';
    }

    if (empty($mensaje)) {
        $errors[] = 'El campo mensaje es obligatorio';
    }

    if (count($errors) == 0) {

        $msj = "De: $nombre <a href='mailto:$email'>$email</a><br>";
        $msj .= "Asunto: $asunto<br><br>";
        $msj .= "Cuerpo del mensaje:";
        $msj .= '<p>' . $mensaje . '</p>';
        $msj .= "--<p>Este mensaje se ha enviado desde un formulario de contacto de Código de programación.</p>";

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = '127.0.0.1';
            $mail->SMTPAuth = true;
            $mail->Username = 'visi7alvaro@gmail.com';
            $mail->Password = 'alvaro836';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom('visi7alvaro@gmail.com', 'Emisor');
            $mail->addAddress('visi7alvaro@gmail.com', 'Receptor');
            //$mail->addReplyTo('otro@dominio.com');

            $mail->isHTML(true);
            $mail->Subject = 'Formulario de contacto';
            $mail->Body = utf8_decode($msj);

            $mail->send();

            $respuesta = 'Correo enviado';
        } catch (Exception $e) {
            $respuesta = 'Mensaje ' . $mail->ErrorInfo;
        }
    }
}

?>
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

            <?php
            if (isset($errors)) {
                if (count($errors) > 0) {
            ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php
                                foreach ($errors as $error) {
                                    echo $error . '<br>';
                                }
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

            <div class="row">
                <div class="col-lg-6 col-md-12">

                    <form class="form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" autocomplete="off">
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
                            <div class="g-recaptcha" data-sitekey="6Le9eugiAAAAANqglBq1G0lV_Ged8U77HPMC9HFz"></div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                    </form>

                </div>
            </div>

            <?php if (isset($respuesta)) { ?>
                <div class="row py-3">
                    <div class="col-lg-6 col-md-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $respuesta; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            <?php } ?>

 

        </div>
    </main>
</body>

</html>
@endsection