@extends('layouts.Plantilla')

@section('portada')

  <div class="container">
        <div class="row ">
            <div class="col-md-12" >
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
                                
                                <div class="carousel-item active"  id="background" >
                                <img class="d-block w-100 opa" src="{{asset('adminlte/dist/img/asesoramiento6.jpg')}}" alt="Third slide"  >
                                    <div class="carousel-caption d-block d-md-block formulario">
                                        <h2 >Uno</h2>
                                        <h4>Dos</h4>
                                    </div>
                                </div>
                                <div class="carousel-item"  id="background" >
                                <img class="d-block w-100 opa" src="{{asset('adminlte/dist/img/asesoramiento4.jpg')}}" alt="Fourth slide">
                                    <div class="carousel-caption d-block d-md-block formulario">
                                        <h2 >Uno</h2>
                                        <h4>Dos</h4>
                                    </div>
                                </div>
                                <div class="carousel-item"  id="background" >
                                <img class="d-block w-100 opa" src="{{asset('adminlte/dist/img/acuerdo3.jpg')}}" alt="fifth  slide">
                                    <div class="carousel-caption d-block d-md-block formulario">
                                        <h2 >Uno</h2>
                                        <h4>Dos</h4>
                                    </div>
                                </div>
                                <div class="carousel-item"  id="background" >
                                <img class="d-block w-100 opa" src="{{asset('adminlte/dist/img/reportes.jpg')}}" alt="sixth slide" >
                                    <div class="carousel-caption d-block d-md-block formulario">
                                        <h2 >Uno</h2>
                                        <h4>Dos</h4>
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
@endsection