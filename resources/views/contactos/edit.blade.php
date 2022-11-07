@extends('layouts.Plantilla')

@section('contenido') <br>
<head>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
<style>
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
   #titulo {
    color: #5F8B8B;
    }
     #foto {
    color: #5F8B8B;
    border-style:dotted;
    }
</style>

 </head>


<div class="card"> <br><br>
<br>
<br>  
    <div class="card-header">
         <h1><font color="black" size="6" style="font-family: Times New Roman" >EDICION DE INFORMACION DE EMPRESA</font></h1>  
    </div>
    <div class="card-body">
    <div class="container">

        <div class="row">
          <form method="POST" action="{{ route ('contactos.update', $contacto->con_codigo)}}"   enctype="multipart/form-data">
            @csrf
            @method('put')

                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">TITULO</label>
                        <input type="text" name="con_somos" id="con_somos" value="{{$contacto->con_somos}}" class="form-control col-md-7" placeholder="somos...">
                    </div>
                </div>  

                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">MISION</label> 
                        <input  type="text" id="con_mision" style="width:500px;height:100px"   value="{{$contacto->con_mision}}" name="con_mision" rows="3" class=" form-control" placeholder="misison..."></input>                   
                    </div>
                </div>   
                <br>
                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">VISION</label> 
                        <input  type="text" id="con_vision" style="width:500px;height:100px"   value="{{$contacto->con_vision}}" name="con_vision" rows="3" class=" form-control" placeholder="vision..."></input>                   
                    </div>
                </div><br>   

                 

             <br>  
                <input type="submit" class="btn btn-success" value="Grabar" onclick="return confirm('Grabar ?')">
                <a href="{{route ('contactos.index')}}" class="btn btn-primary">Volver</a>

            </form>


        </div>
    </div>
    </div>
</div> 

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
 

@stop

 
