@extends('layouts.Plantilla')

@section('contenido') <br>

    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

            html,
            body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;


            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }


            .m-b-md {
                margin-bottom: 30px;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;

            }

            /* /Cards/*/
            .container-card {
                width: 100%;
                /* display: flex; */
                max-width: 1000px;
                margin: auto;
                background-image: url(../img/bod.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                opacity: 8px;
                position: center;

            }

            .title-cards {
                width: 100%;
                max-width: 1080px;
                margin: auto;
                padding: 20px;
                margin-top: 20px;
                text-align: center;
                color: #7a7a1a;
            }

            .card_ {
                width: 98%;
                margin-top: 15%;
                margin-left: 1%;
                margin-right: 1%;
                border-radius: 6px;
                overflow: hidden;
                background: #fff;
                box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
                transition: all 400ms ease-out;
                cursor: default;
            }

            .card_:hover {
                box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.4);
                transform: translateY(-3%);
            }

            .card_ img {
                width: top;
                height: 250px;
            }

            .card_ .contenido-card {
                padding: 15px;
                text-align: center;
            }

            .card_ .container-card h5 {
                margin-bottom: 15px;
                color: #7a7a7a;
            }

            .card_ .container-card p {
                line-height: 1.8;
                color: #6a6a6a;
                font-size: 14px;
                margin-bottom: 5px;
            }

            .card_ .container-card a {
                display: inline-block;
                padding: 10px;
                margin-top: 10px;
                text-decoration: none;
                color: #2fb4cc;
                border: 1px solid #2fb4cc;
                border-radius: 4px;
                transition: all 400ms ease;
                margin-bottom: 5px;
            }

            .card_ .container-card a:hover {
                background: #2fb4cc;
                color: #fff;
            }

            @media only screen and (min-width:280px) and (max-width:768px) {
                .container-card {
                    flex-wrap: wrap;
                }

                .card_ {
                    margin: 15px;
                }

                .card_ {
                    width: 98%;
                    margin-top: 48%;
                    margin-left: 1%;
                    margin-right: 1%;
                    border-radius: 6px;
                    overflow: hidden;
                    background: #fff;
                    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.2);
                    transition: all 400ms ease-out;
                    cursor: default;
                }

                .card_ font {
                    font-size: 20px;
                }

                .des span {
                    font-size: 15px;
                }


            }

        </style>


    </head>



    <div class="card_">
        <div class="tittle-cards">
            <h2>
                <font color="black" size="6" style="font-family: Arial">Adquirir: {{ $data->eve_titulo }}
                </font>
            </h2>
        </div>
        <div class="card-body">

               {{-- <form method="GET" action="{{ route ('servicios.comprar')}}"   enctype="multipart/form-data">
                    @csrf

                </form> --}}

                    <div class="row">
                        <div class="col-md-6">
                                <div class="card"
                                    style="margin: 10px;
                            /* border: 13px; */
                            height: 600px;
                            background:linear-gradient(30deg, #2D9494, #020226);">
                                    <img style="" src="/img/{{ $data->eve_imagen }}" alt="">
                                    <h5 style="color: #9EF8FE"><span>Descripcion: </span></h5>
                                    <p style="color: #ffffff">{{ $data->eve_descripcion }} </p>
                                    <h5 style="color: #9EF8FE"><span>Beneficios: </span></h5>
                                    <p style="color: #ffffff">{{ $data->eve_beneficio }} </p>
                                </div>

                        </div>

                        <div class="col-md-6" style="">

                    <div class="col-12"><span>Si desea mas información, con gusto le haremos una cotización personalizada, déjenos sus datos seleccionando si es:
                        </span> <br>
                        </div>
                         <div  style="background:linear-gradient(50deg, #02224B, #00C1FF, #00C1FF);
                                   ">
                         <div class="form-check" style="color:white;">
                                <input type="radio" class="form-check-input tipo" id="radio1" name="optradio" value="natural" checked >Persona Natural
                                <label class="form-check-label" for="radio1"  ></label>
                            </div>
                            <div class="form-check" style="color:white;">
                                <input type="radio" class="form-check-input tipo" id="radio2" name="optradio" value="empresa"  >Empresa
                                <label class="form-check-label" for="radio2"></label>
                            </div>
                    </div>

                {{-- <div class="formulario" --}}

                <div id="natural_form">


                    <form style="background:linear-gradient(50deg, #02204B, #00C1FF); padding: 5px;"
                                      method="POST"   action="{{ route('ventas.store') }}" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="tipo" value="{{ $data->tipo }}">

                        @if(isset($data->tipo_cap))
                        <input type="hidden" name="tipo_cap" id="tipo_cap" value="{{$data->tipo_cap}}">

                        @endif
                        <input type="hidden" name="codigo" value="{{ $data->eve_codigo }}"> <br>
                        <div class="row ">
                            <label for="nombre" style="color:white;"><strong>Formulario Persona Natural</strong></label>
                            <input class="form-control" type="hidden" name="persona" value="natural">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Nombre</label>
                                    <input class="form-control" placeholder="Nombre" type="text" value="" name="nombre" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Apellidos</label>

                                    <input class="form-control" placeholder="Apellidos" type="text" value="" name="apellido" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Telefono</label>

                                    <input class="form-control" placeholder="Celular" pattern="[9]{1}[0-9]{8}" maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="tel" value="" name="telefono" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Correo</label>

                                    <input class="form-control" placeholder="Correo" type="email" value="" name="correo" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">DNI</label>

                                    <input class="form-control" placeholder="DNI" type="tel" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="" name="dni" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>

                            <input class="form-control" type="hidden" value="{{ $data->eve_titulo }}" name="descripcion">

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="asunto" style="color:white;">Asunto</label>

                                    <input class="form-control" placeholder="Asuntos" type="text" value="" name="asunto" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="mensaje" style="color:white;">Mensaje</label>
                                    <textarea class="form-control" placeholder="Mensaje" id="mensaje" name="mensaje" rows="3" required></textarea>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="g-recaptcha" data-sitekey="6Le9eugiAAAAANqglBq1G0lV_Ged8U77HPMC9HFz"></div>
                                @if(isset($_SESSION['exito']))
                                <p class="alert <?php echo $_SESSION['exito']?>">

                                </p>
                                @endif
                            </div>
                            <!--<p   class="col-md-12   p"> mínimo 8 caracteres (letras mayúsculas-minúsculas, números, especiales)</p>-->



                            <div class="col-md-4">
                                <div class="form-group">
                                    <br>
                                    <button class="btn btn-success enviar_1">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <div id="empresa_form" style="background:linear-gradient(50deg,  #00C1FF,#02204B);
                    padding: 5px;" >
                    <form method="POST" action="{{ route('ventas.store') }}" enctype="multipart/form-data">
                        @csrf


                        <input type="hidden" name="tipo" value="{{ $data->tipo }}">
                        <input type="hidden" name="codigo" value="{{ $data->eve_codigo }}">
                        <input class="form-control" type="hidden" name="tipo_formulario" value="empresa">

                        <div class="row ">
                            <label for="nombre" style="color:white;"><strong>Formulario Empresa</strong></label>
                            <input class="form-control" type="hidden" name="persona" value="empresa">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Nombre</label>
                                    <input class="form-control" placeholder="Nombre" type="text" value="" name="nombre" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Apellidos</label>

                                    <input class="form-control" placeholder="Apellidos" type="text" value="" name="apellido" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Telefono</label>

                                    <input class="form-control" placeholder="Celular" pattern="[9]{1}[0-9]{8}" maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="tel" value="" name="telefono" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Correo</label>

                                    <input class="form-control" placeholder="Correo" type="email" value="" name="correo" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">RUC</label>

                                    <input class="form-control" placeholder="RUC" type="tel" maxlength="11" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="" name="ruc" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Nombre de Empresa</label>

                                    <input class="form-control" placeholder="S.A.C" type="text" value="" name="empresa" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nombre" style="color:white;">Cargo en la Empresa</label>

                                    <input class="form-control" placeholder="Cargo" type="text" value="" name="cargo" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>

                            <input class="form-control" type="hidden" value="{{ $data->eve_titulo }}" name="descripcion">

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="asunto" style="color:white;">Asunto</label>

                                    <input class="form-control" placeholder="Asuntos" type="text" value="" name="asunto" required>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="mensaje" style="color:white;">Mensaje</label>
                                    <textarea class="form-control" placeholder="Mensaje" id="mensaje" name="mensaje" rows="3" required></textarea>
                                    <span class="text-danger font-size"></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="g-recaptcha" data-sitekey="6Le9eugiAAAAANqglBq1G0lV_Ged8U77HPMC9HFz"></div>
                                @if(Session::has('g-recaptcha-response'))
                                <p class="alert {{Session::get('alert-class','alert-info')}}">
                                    {{Session::get('g-recaptcha-response')}}
                                </p>
                                @endif
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <br>

                                    <button class="btn btn-success enviar_">Enviar</button>
                                </div>
                            </div>
                        </div>
                        <form>
                </div>



                {{-- </div> --}}
            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script>

    if($('#tipo_cap').val()=='1'){
    swal("ERROR", "No marco el Recaptcha!", "error");

    }
    if($('#tipo_cap').val()=='2'){
    swal("ÉXITO", "Mensaje enviado!", "success");

    }

    $(document).ready(function() {
        // AXAX PARA EN VIAR FOMRULARO





        //('#natural_form').hide(); // no visibles ambos form
        $('#empresa_form').hide();

        $('.tipo').on('click', function() {
            if ($('input:radio[name=optradio]:checked').val() == 'natural') {
                $('#natural_form').show();
                $('#empresa_form').hide();

            } else {
                if ($('input:radio[name=optradio]:checked').val() == 'empresa') {

                    $('#empresa_form').show();
                    $('#natural_form').hide();


                }

            }
        });

    });







    $('.btn_formulario').on('click', function() {
        $('.formulario').show();
    })
    $('.envia_').on('click', function() {

        Swal.fire('Se ha enviado su formulario ... no contactaremos con usted');
    })

</script>
@stop
