@extends('layouts.Plantilla')

@section('contenido') <br>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
 <style>

 </style>

</head>

<br> <br>

    <div class="container-portada">
        <div class="capa-gradient"></div>
        <div class="container-details">
            <div class="details">
                <h1>ASESORAMIENTO EMPRESARIAL A NEGOCIOS PÚBLICOS Y PRIVADOS </h1> 
                <p>Somos una empresa especializada en brindar servicios de consultoría técnico-administrativa, a través de un staff de reconocidos consultores</p>
                <a   href="{{action('ContactoPublicController@mostrar_Contactos')}}"  role="button">Sobre nosotros...</a>

            </div>
        </div>
    </div><br> <br>

     <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card " style="background-image: url(../img/bod.jpg);">
                    <!--   <div class="card-header">{{ __('Bienvenido!!!') }} </div>
                        <h1><font color="black" size="7" style="font-family: Castellar" >BSE</font></h1> 
                        <img src="{{asset('adminlte/dist/img/fondo01.jpg')}}" height="500" width="1125">   -->
                    <div class="card-body ">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                            <ol class="carousel-indicators d-none ">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                            </ol>
                            <div class="carousel-inner">

                                <div class="carousel-item active" id="background">
                                    <img class="d-block w-100 opa" src="{{asset('adminlte/dist/img/asesoramiento6.jpg')}}" alt="Third slide">
                                    <div class="carousel-caption d-block d-md-block formulario">
                                        <h2>Descubra nuestos servicios</h2>
                                       <!-- <a href="{{action('ServiciosPublicController@mostrar_Servicios')}}"  role="button">Saber más</a>-->
                                    </div>
                                </div>
                                <div class="carousel-item" id="background">
                                    <img class="d-block w-100 opa" src="{{asset('adminlte/dist/img/asesoramiento4.jpg')}}" alt="Fourth slide">
                                    <div class="carousel-caption d-block d-md-block formulario">
                                        <h2>Explore su Negocio</h2> 
                                    </div>
                                </div>
                                <div class="carousel-item" id="background">
                                    <img class="d-block w-100 opa" src="{{asset('adminlte/dist/img/acuerdo3.jpg')}}" alt="fifth  slide">
                                    <div class="carousel-caption d-block d-md-block formulario">
                                        <h2>Evalúe la agilidad de su empresa</h2>
                                         
                                    </div>
                                </div>
                                <div class="carousel-item" id="background">
                                    <img class="d-block w-100 opa" src="{{asset('adminlte/dist/img/reportes.jpg')}}" alt="sixth slide">
                                    <div class="carousel-caption d-block d-md-block formulario">
                                        <h2>Siga nuestros eventos</h2>
                                       <!-- <button>Saber más</button>-->
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <br> <br>

        <!--   <div class="card-header">{{ __('Bienvenido!!!') }} </div>
                    <h1><font color="black" size="7" style="font-family: Castellar" >BSE</font></h1> 
                    <img src="{{asset('adminlte/dist/img/fondo01.jpg')}}" height="500" width="1125">   -->
        <br><br>
        <div class="container2 ">
            <div class="row ">
                <div class="col-md-12 ">
                    <h2> socios estrategicos</h2>
                </div>
            </div>
        </div>
        <div class="container3 ">
            <div class="row ">
                <div class="col-md-12 formulario">
                    <h4> equipo de trabajo </h4>
                </div>
            </div>
        </div>
        <br><br>

                <footer class="footer-distributed">

            <div class="footer-left">

                <h3> 
                <img src="{{asset('adminlte/dist/img/hbse3.png')}}" style="border:0; width:300px; height:top">
                
                </h3>

                <p class="footer-links">
                    <a href="#" class="link-1">Home</a>

                    <a href="#">Blog</a>

                    <a href="{{action('CorreoPublicController@create')}}"  role="button"> Contacto</a>

                    <a href="{{action('ContactoPublicController@mostrar_Contactos')}}" role="button">Acerca</a> 
                </p> 
            </div>

            <div class="footer-center info">

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>Acerca de la empresa</span>
                    Somos una empresa especializada en brindar servicios de consultoría técnico-administrativa, a través de un staff de reconocidos consultores
                </p>

                <div class="footer-icons">

                    <a target="_blank" href="https://www.facebook.com/bse.com.pe"><i class="fa-brands fa-facebook"></i></a> 
                    <a target="_blank" href="#"><i class="fa-brands fa-linkedin"></i></a> 

                </div>

            </div>

        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script>
     

             $('.des').hide();
    var arr=<?php echo $datos?>;
        $(document).ready(function(){


    var alvaro='';
                for(vari=0;vari<arr.length;vari++){
                    $('.info').append(` 
                
                    <div class="col-md-6">
                    <div class="card_">
                        <div class="card-body ${arr[vari]["eve_codigo"]}" data-alv="${arr[vari]["eve_codigo"]}" data-des="${arr[vari]["eve_descripcion"]}" data-ini="${arr[vari]["eve_fechaini"]}"  >
                         <h5 class="card-title" style="height:40px">${arr[vari]["eve_titulo"]}</h5>
                        <figure>
                         <img class="card-img-top" src="/img/${arr[vari]["eve_imagen"]}" alt="Card image cap"  >
                         </figure>
                         <h6   style="height:10px">${arr[vari]["eve_fechaini"]}</h6>
                         <div class="card-body des" id="des_${arr[vari]["eve_codigo"]}">
                         
                         <a class="close${arr[vari]["eve_codigo"]}">Ver mas</a>
                             
                         </div>
                     </div>
                </div>
                    </div>
 
                
                     `);

                
                 
            $('.'+arr[vari]["eve_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    var des=$(this).data('des');
                    console.log(data);
                    $('#des_'+data).html(des);
             });
             $('.close'+arr[vari]["eve_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    $('#des_'+data).hide();
             });
                
             }
    });
</script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection


