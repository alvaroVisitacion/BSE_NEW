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
        color: #7a7a7a;
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
    
</style>

 </head>


<div class="card_">
    <div class="tittle-cards">
         <h2><font color="black" size="6" style="font-family: Times New Roman" >SOCIOS</font></h2>  
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
var arr=<?php echo $socios?>;
    $(document).ready(function(){


var alvaro='';
             for(vari=0;vari<arr.length;vari++){
                $('.contenido').append(` 
               
                    <div class="col-md-6">
                    <div class="card_">
                        <div class="card-body ${arr[vari]["soc_codigo"]}" data-alv="${arr[vari]["soc_codigo"]}" data-des="${arr[vari]["soc_descripcion"]}"  >
                         <h5 class="card-title" style="height:40px">${arr[vari]["soc_titulo"]}</h5>
                        <figure>
                         <img class="card-img-top" src="/img/${arr[vari]["soc_imagen"]}" alt="Card image cap"  >
                         </figure>
                         <div class="card-body des" id="des_${arr[vari]["soc_codigo"]}">
                         
                         <a class="close${arr[vari]["socr_codigo"]}">Ver mas</a>
                             
                         </div>
                     </div>
                    </div>
                    </div>
 
                
                     `);

                
                 
            $('.'+arr[vari]["soc_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    var des=$(this).data('des');
                    console.log(data);
                    $('#des_'+data).html(des);
             });
             $('.close'+arr[vari]["soc_codigo"]).on('click',function(){
                    var data=$(this).data('alv');
                    $('#des_'+data).hide();
             });
                
             }
    });
</script>

@stop