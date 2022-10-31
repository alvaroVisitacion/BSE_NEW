@extends('layouts.Plantilla')

@section('contenido') <br>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    h1 {
        font-family:'Helvetica','Verdana','Monaco',sans-serif;
        color: #0155E5 ;
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

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .d-block {
        opacity: 1;
    }
    .m-b-md {
        margin-bottom: 30px;
    }
    #background {
    height: 500px;
    background-position: center; 
    background-repeat: no-repeat;
    background-size: cover;
  
    color: rgb(00,200,200);
    }


</style>
</head>




    <div class="container">
    <div class="row ">
        <div class="col-md-12" >
            <div class="card">
                <!--   <div class="card-header">{{ __('Bienvenido!!!') }} </div>
                   <h1><font color="black" size="7" style="font-family: Castellar" >BSE</font></h1> 
                  <img src="{{asset('adminlte/dist/img/fondo01.jpg')}}" height="500" width="1125">   -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" id="background" >
                            <img class="d-block w-100" src="{{asset('adminlte/dist/img/asesoramiento.jpg')}}" alt="First slide"  >
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Uno</h1>
                                <h2>Dos</h2>
                            </div>
                            </div> 
                            <div class="carousel-item"  id="background" >
                            <img class="d-block w-100" src="{{asset('adminlte/dist/img/asesoramiento3.jpg')}}" alt="Third slide"  >
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Uno</h1>
                                <h2>Dos</h2>
                            </div>
                            </div>
                            <div class="carousel-item"  id="background" >
                            <img class="d-block w-100" src="{{asset('adminlte/dist/img/asesoramiento4.jpg')}}" alt="Fourth slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Uno</h1>
                                <h2>Dos</h2>
                            </div>
                            </div>
                            <div class="carousel-item"  id="background" >
                            <img class="d-block w-100" src="{{asset('adminlte/dist/img/acuerdo2.jpg')}}" alt="fifth  slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Uno</h1>
                                <h2>Dos</h2>
                            </div>
                            </div>
                            <div class="carousel-item"  id="background" >
                            <img class="d-block w-100" src="{{asset('adminlte/dist/img/reportes.jpg')}}" alt="sixth slide" >
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Uno</h1>
                                <h2>Dos</h2>
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
