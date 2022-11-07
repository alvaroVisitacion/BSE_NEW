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
         <h1><font color="black" size="6" style="font-family: Times New Roman" >EDICION DE SOCIOS</font></h1>  
    </div>
    <div class="card-body">
    <div class="container">

        <div class="row">
          <form method="POST" action="{{ route ('experiencias.update', $experiencia->exp_codigo)}}"   enctype="multipart/form-data">
            @csrf
            @method('put')

                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">NOMBRES Y APELLIDOS</label>
                        <input type="text" name="exp_nombre" id="exp_nombre" value="{{$experiencia->exp_nombre}}" class="form-control col-md-7" placeholder="Nombre y Apellidos...">
                    </div>
                </div>  

                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">PROFESIÓN</label>
                        <input type="text" name="exp_profesion" id="exp_profesion" value="{{$experiencia->exp_profesion}}" class="form-control col-md-7" placeholder="Profesion...">
                    </div>
                </div> 

                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">RESÚMEN</label>
                        <input id="exp_resumen" name="exp_resumen" rows="3" style="width:500px;height:100px" value="{{$experiencia->exp_resumen}}"    class=" form-control" placeholder="resumen..."></input>

                    </div>

                </div>   
                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">EXPERIENCIA</label> 
                          <input id="exp_experiencia" name="exp_experiencia" style="width:500px;height:100px"   value="{{$experiencia->exp_experiencia}}"   rows="3" class=" form-control" placeholder="estudios..."></input> 
                          
                    </div>
                </div>
                <br><br>   

                <div class="col-md-12" id="foto">
                    <div class="row justify-content-center">
                        <label for=""><span> Visualización de la imagen</span></label> 
                         <img src="/img/{{$experiencia->exp_imagen}}"   id="imagenSeleccionada" style="max-height: 200px; max-width:200px;">
                    </div>
                <br>
                    <div class="row justify-content-center">
                        <label for=""><span> AGREGAR IMAGEN</span></label> 
                        
                        <input value="{{$experiencia->exp_imagen}}" name="exp_imagen"type="file" class=" form-control col-md-7" >
                        </label>
                        <h7 class="pl-1">soporta : PNG, JPG, GIF hasta 10MB</h7>
                    </div>
                </div> 

             <br>  <br>
                <input type="submit" class="btn btn-success" value="Grabar" onclick="return confirm('Grabar ?')">
                <a href="{{route ('experiencias.index')}}" class="btn btn-primary">Volver</a>

            </form>


        </div>
    </div>
    </div>
</div> 

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script>
    $(document).ready(function (e){
        $('#exp_imagen').change(function(){
            let reader =new FileReader();
            reader.onload = (e)=>{
                $('#imagenSeleccionada').attr('src',e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>

@stop

 
