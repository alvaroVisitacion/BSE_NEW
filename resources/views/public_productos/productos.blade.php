@extends('layouts.Plantilla')

@section('contenido') <br>
<head>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
          <link rel="stylesheet" href="css/public.css">
 </head>


<div class="cardd">
    <div class="tittle-cards details3 ">
         <h1><font  >PRODUCTOS</font></h1>
    </div>
    <div class="card-body">
        <div class="container-card ">
         <div class="row contenido">

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script>
             $('.des').hide();
var arr=<?php echo $productos?>;
    $(document).ready(function(){


var alvaro='';
             for(vari=0;vari<arr.length;vari++){
                $('.contenido').append(`

                    <div class="col-md-6">
                    <div class="card_">
                        <div class="card-body ${arr[vari]["pro_codigo"]}" data-alv="${arr[vari]["pro_codigo"]}" data-des="${arr[vari]["pro_descripcion"]}"  >
                         <h5 class="card-title" style="height:40px">${arr[vari]["pro_titulo"]}</h5>
                        <figure>
                         <img class="card-img-top" src="/img/${arr[vari]["pro_imagen"]}" alt="Card image cap"  >
                         </figure>
                          <div class="card-body des" id="des_${arr[vari][" pro_codigo"]}">
                              <h7 class="card-title" style="height:40px">${arr[vari]["pro_descripcion"]}</h7>
                              <br> <a href="p_productos/${arr[vari]["pro_codigo"]}" class="valor">Más información</a>
                          </div>


                     </div>
                </div>
                    </div>


                     `);



            $('.'+arr[vari]["pro_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    var des=$(this).data('des');
                    console.log(data);
                    $('#des_'+data).html(des);
             });
             $('.close'+arr[vari]["pro_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    $('#des_'+data).hide();
             });

             }
    });
</script>

@stop
