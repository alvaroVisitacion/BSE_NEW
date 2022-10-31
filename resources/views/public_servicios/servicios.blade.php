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
    /*Cards*/
    .container-card{
        width: 100%;
        display: flex;
        max-width: 1000px;
        margin: auto;  
        background-image: url(../img/bod.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        opacity: 8px;
 
    }
    .title-cards{
        width: 100%;
        max-width: 1080px;
        margin: auto;
        padding: 20px;
        margin-top: 20px;
        text-align: center;
        color: #7a7a7a;
    }
    .card{
        width: 100%;
        margin: 20px;
        border-radius: 6px;
        overflow: hidden;
        background:#fff;
        box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
        transition: all 400ms ease-out;
        cursor: default;


    }
    .card:hover{
        box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
        transform: translateY(-3%);
    }
    .card img{
        width: 70%;
        height: 250px;
    }
    .card .contenido-card{
        padding: 15px;
        text-align: center;
    }
    .card .container-card h5{
        margin-bottom: 15px;
        color: #7a7a7a;
    }
    .card .container-card p{
        line-height: 1.8;
        color: #6a6a6a;
        font-size: 14px;
        margin-bottom: 5px;
    }
    .card .container-card a{
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
    .card .container-card a:hover{
        background: #2fb4cc;
        color: #fff;
    }
    @media only screen and (min-width:320px) and (max-width:768px){
        .container-card{
            flex-wrap: wrap;
        }
        .card{
            margin: 15px;
        }
    }
    
</style>

 </head>


<div class="card"> <br><br>
<br>
<br>  
    <div class="tittle-cards">
         <h2><font color="black" size="6" style="font-family: Times New Roman" >SERVICIOS</font></h2>  
    </div>
    <div class="card-body">
        <div class="container-card servicio">
         <div class="row">
        

                {{-- <?php ; ?> --}}
        
        @foreach($servicios as $key)
            {{-- <div class="col-md-4">
                <div class="card info" style="width: 20rem;height: top ">
                    <h5 class="card-title" style="height:40px">{{$key->ser_titulo}}</h5>
                    
                    <img class="card-img-top" src="/img/{{$key->ser_imagen}}" alt="Card image cap"  style=" height: 200px; width:200px; align:center;">
                    <div class="card-body des">
                        <p class="card-text">{{$key->ser_descripcion}}.</p>
                        <a href="#" class="btn btn-primary">MAS INFORMACIÓN</a>
                    </div>
                </div>
            </div> --}}
        @endforeach
        
        
            </div>
        </div>
    </div>
</div> 

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script>
             $('.des').hide();
var arr=<?php echo $servicios?>;
    $(document).ready(function(){


var alvaro='';
             for(vari=0;vari<arr.length;vari++){
                $('.servicio').append(` 
               
                    <div class="col sm-6">
                    <div class="card">
                        <div class="card-body ${arr[vari]["ser_codigo"]}" data-alv="${arr[vari]["ser_codigo"]}" data-des="${arr[vari]["ser_descripcion"]}"  >
                         <h5 class="card-title" style="height:40px">${arr[vari]["ser_titulo"]}</h5>
                        <figure>
                         <img class="card-img-top" src="/img/${arr[vari]["ser_imagen"]}" alt="Card image cap"  >
                         </figure>
                         <div class="card-body des" id="des_${arr[vari]["ser_codigo"]}">
                         
                         <a class="close${arr[vari]["ser_codigo"]}">Ver mas</a>
                             
                         </div>
                     </div>
                </div>
                    </div>
 
                
                     `);

                
                 
            $('.'+arr[vari]["ser_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    var des=$(this).data('des');
                    console.log(data);
                    $('#des_'+data).html(des);
             });
             $('.close'+arr[vari]["ser_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    $('#des_'+data).hide();
             });
                
             }
    });
</script>

@stop

 
