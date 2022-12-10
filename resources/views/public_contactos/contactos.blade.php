@extends('layouts.Plantilla')

@section('contenido') <br>
<head>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
          <link rel="stylesheet" href="css/public.css">

 </head>


<div class="cardd">
    <div class="tittle-cards details3 ">
         <h1><font  >MAS ACERCA DE NOSOTROS</font></h1>
    </div>
    <div class="card-body">
        <div class="container-card ">
         <div class="row contenido">

            </div>
            <br><br>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script>
             $('.des').hide();
var arr=<?php echo $contactos?>;
    $(document).ready(function(){


var alvaro='';
             for(vari=0;vari<arr.length;vari++){
                $('.contenido').append(`

                    <div class="col-md-12">
                        <div class="card_">
                            <div class="card-body ${arr[vari][" con_codigo"]}" data-alv="${arr[vari][" con_codigo"]}" data-som="${arr[vari]["con_somos"]}">
                                <h5 class="card-title" style="height:40px">¿QUIÉNES SOMOS?</h5>
                                <figure>
                                    <img class="card-img-top" src="{{asset('adminlte/dist/img/mis.jpg')}}" alt="Card image cap" style="border:0; width:top; height:100%">
                                </figure>
                                <div class="card-body des">
                                    <h6 style="height:20px">${arr[vari]["con_somos"]}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="card_">
                                <div class="card-body ${arr[vari][" con_codigo"]}" data-alv="${arr[vari][" con_codigo"]}" data-mis="${arr[vari][" con_mision"]}">
                                    <h5 class="card-title" style="height:40px">MISIÓN</h5>
                                    <figure>
                                         <img class="card-img-top" src="{{asset('adminlte/dist/img/mision.jpg')}}" alt="Card image cap" style="border:0; width:top; height:top">
                                    </figure>
                                    <div class="card-body des">
                                        <h6 style="height:90px">${arr[vari]["con_mision"]}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="card_">
                                    <div class="card-body ${arr[vari][" con_codigo"]}" data-alv="${arr[vari][" con_codigo"]}" data-vis="${arr[vari][" con_vision"]}">
                                        <h5 class="card-title" style="height:40px">VISIÓN</h5>
                                        <figure>
                                            <img class="card-img-top" src="{{asset('adminlte/dist/img/vision.jpg')}}" alt="Card image cap" style="border:0; width:top; height:top">
                                        </figure>

                                        <div class="card-body des">
                                            <h6 style="height:90px">${arr[vari]["con_vision"]}</h6>
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

@stop
