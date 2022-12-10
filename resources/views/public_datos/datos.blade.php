@extends('correos.create')

@section('datos') <br>
<!doctype html>
<html lang="es">


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
          <link rel="stylesheet" href="css/public.css">

 </head>
  <div class="linea"></div>

    <div class="card-body">
        <div class="container-card2 ">
         <div class="row contenido">

            </div>
            <br>
        </div>
    </div>




<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script>
             $('.des').hide();
var arr=<?php echo $datoss?>;
    $(document).ready(function(){


var alvaro='';
             for(vari=0;vari<arr.length;vari++){
                $('.contenido').append(`

                    <div class="col-md-6">
                        <div class="card_">
                            <div class="card-body ${arr[vari]["dat_codigo"]}" data-alv="${arr[vari][" dat_codigo"]}" data-som="${arr[vari]["dat_correo"]}">
                                 <i class="fa fa-envelope"></i>
                                 <h5 class="card-title" style="height:5px">EMAIL</h5>

                                <div class="card-body des">
                                     <p><a href="mailto:${arr[vari]["dat_correo"]}">${arr[vari]["dat_correo"]}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="card_">
                                <div class="card-body ${arr[vari]["dat_codigo"]}" data-alv="${arr[vari]["dat_codigo"]}" data-mis="${arr[vari]["dat_telefono "]}">
                                    <i class="fa fa-phone"></i>
                                    <h5 class="card-title" style="height:5px">TELEFONO</h5>

                                    <div class="card-body des">
                                        <p>${arr[vari]["dat_telefono"]}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12">
                                <div class="card_">
                                    <div class="card-body ${arr[vari]["dat_codigo"]}" data-alv="${arr[vari]["dat_codigo"]}" data-vis="${arr[vari]["dat_ubicacion"]}">

                                        <h5 class="card-title" style="height:5px">UBICACION</h5>
                                         <p style="height:50px">${arr[vari]["dat_ubicacion"]}</p>
                                        <div class="card-body des">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.055488822138!2d-79.04634665268115!3d-8.103828640394026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3dbd1b41fb7b%3A0xacca66f09808ada!2sLa%20Esmeralda%2C%20Trujillo%2013011!5e0!3m2!1ses!2spe!4v1670138398587!5m2!1ses!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

  `);



            $('.'+arr[vari]["dat_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    var des=$(this).data('des');
                    console.log(data);
                    $('#des_'+data).html(des);
             });
             $('.close'+arr[vari]["dat_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    $('#des_'+data).hide();
             });

             }
    });
</script>

@stop
