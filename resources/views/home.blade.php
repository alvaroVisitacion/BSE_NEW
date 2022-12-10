@extends('layouts.Plantilla')

@section('contenido') <br>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/fut.css">
    <link rel="stylesheet" href="css/evento.css">
 <style>

 </style>

</head>
 <br> <br><br>
    <div class="container-slider">

                        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">

                            <div class="carousel-inner opar">


                                <div class="carousel-item active " >
                                    <img class="d-block w-100 opar" src="{{asset('adminlte/dist/img/ases8.jpg')}}" alt="Third slide">
                                     <div class="capa-slider"></div>
                                     <div class=" carousel-caption d-block d-md-block  form ">
                                      <h1 >DESCUBRA NUESTROS SERVICIOS</h1>
                                        <p>Obtenga el máximo provecho tecnológico</p>
                                        <a href="{{action('ServiciosPublicController@mostrar_Servicios')}}"     role="button">Ver más...</a>
                                   </div>
                                </div>
                                <div class="carousel-item"  >
                                    <img class="d-block w-100 opar" src="{{asset('adminlte/dist/img/ases7.jpg')}}" alt="Fourth slide">
                                    <div class="carousel-caption d-block d-md-block form ">
                                        <h1 >FORMACION IN HOUSE</h1>
                                        <p>Capacitación para el pesonal de su negocio</p>
                                        <a href="{{action('FormacionPublicController@mostrar_Formaciones')}}"   role="button">Ver más...</a>
                                    </div>
                                </div>
                                <div class="carousel-item"  >
                                    <img class="d-block w-100 opar" src="{{asset('adminlte/dist/img/car4.jpeg')}}" alt="fifth  slide">
                                    <div class="carousel-caption d-block d-md-block  form">
                                        <h1 >APROVECHE NUESTROS PRODUCTOS</h1>
                                        <p>Generamos el soporte que necesita para su negocio</p>
                                        <a href="{{action('ProductoPublicController@mostrar_Productos')}}"  role="button">Ver más...</a>
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
   <br>


<br> <div class="linea"></div> <br>

    <div class="container-portada">
        <div class="capa-gradient"></div>
            <div class="container-details">
                <div class="details">
                    <h1>ASESORAMIENTO EMPRESARIAL A NEGOCIOS PÚBLICOS Y PRIVADOS </h1>
                    <p>Somos una empresa especializada en brindar servicios de consultoría técnico-administrativa, a través de un staff de reconocidos consultores</p>
                    <a   href="{{action('ContactoPublicController@mostrar_Contactos')}}"  role="button">Sobre nosotros...</a>

                </div>
            </div>
    </div>
    <br>
    <div class="linea"></div>


    <div class="container-portada2">
        <div class="capa-gradient2"></div>
        <div class="container-details2">
            <div class="details2">
                <p>NOS INVOLUCRAMOS</p>
                <h2>JUNTOS LO HACEMOS</h2>
                <br>
                <div class="mini">
                </div>
                <a   href="{{action('ExperienciaPublicController@mostrar_Equipo')}}"  role="button">Nuestro Equipo de Trabajo</a>

            </div>
        </div>
    </div>


        <!-- SLIDER DE EVENTOS-->
        <div class="linea"></div>
        <div class="details3">
            <h1>NUESTROS EVENTOS</h1>
        </div>
        <div class="even">
            <div class="eventos">
                <span style="--i:1;"><img  src="{{asset('img/evento/eve2.jpg')}}" alt=""></span>
                <span style="--i:2;"><img  src="{{asset('img/evento/eve3.jpg')}}" alt=""></span>
                <span style="--i:3;"><img  src="{{asset('img/evento/eve4.jpg')}}" alt=""></span>
                <span style="--i:4;"><img  src="{{asset('img/evento/eve6.jpg')}}" alt=""></span>
                <span style="--i:5;"><img  src="{{asset('img/evento/eve7.jpg')}}" alt=""></span>
                <span style="--i:6;"><img  src="{{asset('img/evento/eve8.jpg')}}" alt=""></span>
                <span style="--i:7;"><img  src="{{asset('img/evento/eve9.jpg')}}" alt=""></span>
                <span style="--i:8;"><img  src="{{asset('img/evento/eve10.jpg')}}" alt=""></span>
                <span style="--i:9;"><img  src="{{asset('img/evento/eve11.jpg')}}" alt=""></span>

            </div>
        </div>

            <br>
               <!-- contacto-->
        <div class="linea"></div>
            <div class="container-portada4">
                <div class="capa-gradient4"></div>
                <div class="container-details4">
                    <div class="details4">
                        <p>Para mayor información</p>
                        <h2>CONTÁCTANOS </h2>
                        <br>
                        <div class="mini">
                        </div>
                        <a href="{{action('DatoPublicController@mostrar_Datos')}}" role="button">>></a>

                    </div>
                </div>
            </div>
            <br>

        <!-- FOOTER-->
            <footer class="footer-distributed">

                <div class="footer-left fot">

                    <h3>
                    <img src="{{asset('adminlte/dist/img/hbse3.png')}}" >

                    </h3>

                    <p class="footer-links">
                        <a href="#" class="link-1">Home</a>


                        <a href="{{action('ContactoPublicController@mostrar_Contactos')}}" role="button">Acerca</a>
                    </p>
                </div>

                 <div class="footer-center">
                    <p class="footer-link"> Acceso Rápido </p> <br>
                    <p class="footer-link">
                      <a class="dropdown-item" href="{{action('ServiciosPublicController@mostrar_Servicios')}}">Servicios</a>
                      <a class="dropdown-item" href="{{action('FormacionPublicController@mostrar_Formaciones')}}">Formaciones</a>
                      <a class="dropdown-item" href="{{action('ProductoPublicController@mostrar_Productos')}}"">Productos</a>
                      <a class="dropdown-item" href="{{action('EventoPublicController@mostrar_Eventos')}}">Eventos</a>

                   </p>


                </div>

                <div class="footer-right">

                    <p class="footer-company-about">
                        <span>Acerca de la empresa</span>
                        Somos una empresa especializada en brindar servicios de consultoría técnico-administrativa, a través de un staff de reconocidos consultores
                    </p>

                    <div class="footer-icons">

                        <a target="_blank" href="https://www.facebook.com/bse.com.pe"><i class="fa-brands fa-facebook"></i></a>
                    <!-- <a target="_blank" href="#"><i class="fa-brands fa-linkedin"></i></a> -->

                    </div>

                </div>

            </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection


