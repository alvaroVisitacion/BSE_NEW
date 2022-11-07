@extends('layouts.Plantilla')

@section('contenido') <br>
<head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
                    

        }

        .full-height {
            height: 100vh;
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
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        /* /Cards/*/
        .container-card{
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
        .title-cards{
            width: 100%;
            max-width: 1080px;
            margin: auto;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
            color: #7a7a1a;
        }
        .card_{
            width: 98%; 
            margin-top: 8%;
            margin-left: 1%;
            margin-right: 1%;
            border-radius: 6px;
            overflow: hidden;
            background:#fff;
            box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
            transition: all 400ms ease-out;
            cursor: default;
        }
        .card_:hover{
            box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
            transform: translateY(-3%);
        }
        .card_ img{
            width: top;
            height: 250px;
        }
        .card_ .contenido-card{
            padding: 15px;
            text-align: center;
        }
        .card_ .container-card h5{
            margin-bottom: 15px;
            color: #7a7a7a;
        }
        .card_ .container-card p{
            line-height: 1.8;
            color: #6a6a6a;
            font-size: 14px;
            margin-bottom: 5px;
        }
        .card_ .container-card a{
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
        .card_ .container-card a:hover{
            background: #2fb4cc;
            color: #fff;
        }
        @media only screen and (min-width:320px) and (max-width:768px){
            .container-card{
                flex-wrap: wrap;
            }
            .card_{
                margin: 15px;
            }
        }
        .contenido{

        }
    </style>

 </head>



<div class="card_">
    <div class="tittle-cards">
         <h2><font color="black" size="6" style="font-family: Times New Roman" >Adquirir:  {{$data->ser_titulo}}</font></h2>  
    </div>
    <div class="card-body">
       
        <div class="container-card ">
            <div class="row contenido" style="height: 900px;">
                {{-- <form method="GET" action="{{ route ('servicios.comprar')}}"   enctype="multipart/form-data">
                    @csrf
                
                </form> --}}
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="foto" style="margin: 20px;
                        /* border: 13px; */
                        height: 400px;
                        width: 342px;
                        background-color: #458380;;">
                            <img style="width: -webkit-fill-available;;" src="/img/{{$data->ser_imagen}}" alt="">
                            <p style="color: #ffffff">{{$data->ser_descripcion}}</p>
                        </div>
                    </div>
                    <div class="col-md-6" style="">
                        <span>Si desea adquirir este servicio deberá llenar un formulario para confirmar sus datos y enviarle una cotizaión</span> <br>
                        <button class="btn btn-success btn_formulario">Adquirir Servicio</button>
                        <button class="btn btn-success">COSTO S%200</button>
                        <br>
                        <div class="formulario" style="background-color: #a7b8e9;
                        margin: 10px;
                        padding: 5px;">
                            <div class="row ">
                                <label for="nombre"><strong>Formulario</strong></label>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>

                                        <input class="form-control" placeholder="Nombre" type="text"  value="" name="nombre">
                                        <span class="text-danger font-size"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Apellidos</label>

                                        <input class="form-control" placeholder="Apellidos" type="text"  value="" name="apellido">
                                        <span class="text-danger font-size"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Telefono</label>

                                        <input class="form-control" placeholder="Telefono" type="text"  value="" name="telefono">
                                        <span class="text-danger font-size"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Correo</label>

                                        <input class="form-control" placeholder="Correo" type="text"  value="" name="correo">
                                        <span class="text-danger font-size"></span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="nombre">Archivo</label>

                                        <input class="form-control" placeholder="Archivo" type="file"  value=""  name="archivo">
                                        <span class="text-danger font-size"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div> 

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>

<script>
        $('.formulario').hide();

    $('.btn_formulario').on('click',function(){
        $('.formulario').show();
    })
</script>
@stop