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
         <h1><font color="black" size="6" style="font-family: Times New Roman" >EDICION DE EVENTOS</font></h1>  
    </div>
    <div class="card-body">
    <div class="container">

        <div class="row">
          <form method="POST" action="{{ route ('eventos.update', $evento->eve_codigo)}}"   enctype="multipart/form-data"> 
            @csrf 
            @method('put')
                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">TITULO</label>
                        <input type="text" name="eve_titulo" id="eve_titulo" value="{{$evento->eve_titulo}}" class="form-control col-md-7" placeholder="titulo">
                    </div>
                </div>  

                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">DESCRIPCION</label> 
                        <input  type="text" id="eve_descripcion" style="width:500px;height:100px"   value="{{$evento->eve_descripcion}}" name="eve_descripcion" rows="3" class=" form-control" placeholder="descripcion"></input>                   
                    </div>
                </div> 
                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">EVENTO</label> 
                        <input  type="text" id="eve_beneficio" style="width:500px;height:100px"   value="{{$evento->eve_beneficio}}" name="eve_beneficio" rows="3" class=" form-control" placeholder="descripcion"></input>                   
                    </div>
                </div>   
                <br>
                <div class="row">
                <div class="col-5">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">FECHA DE INICIO</label> 
                         <input id="eve_fechaini" name="eve_fechaini" type="date" rows="3" value="{{$evento->eve_fechaini}}" class=" form-control col-md-7" placeholder="fecha de inicio"></input>
                    </div>
                </div>
                <div class="col-1">
                    <div class="row justify-content-center" id="titulo">
                     </div>
                </div> 
                <br>
                <div class="col-5">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">FECHA FINAL</label> 
                         <input id="eve_fechafin" name="eve_fechafin" rows="3" type="date" value="{{$evento->eve_fechafin}}" class=" form-control col-md-7" placeholder="fecha final"></input>
                    </div>
                </div> 
                </div><br>
                
                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">LINK / URL</label> 
                         <input id="eve_url" name="eve_url" type="text" rows="3" value="{{$evento->eve_url}}" class=" form-control col-md-7" placeholder="url"></textarea>
                    </div>
                </div> 

                 
                <br><br>   

                <div class="col-md-12" id="foto">
                    <div class="row justify-content-center">
                        <label for=""><span> Visualizaci??n de la imagen</span></label> 
                         <img src="/img/{{$evento->eve_imagen}}"   id="imagenSeleccionada" style="max-height: 200px; max-width:200px;">
                    </div>
                <br>
                    <div class="row justify-content-center">
                        <label for=""><span> AGREGAR IMAGEN</span></label> 
                        
                        <input value="{{$evento->eve_imagen}}" name="eve_imagen"type="file" class=" form-control col-md-7" >
                        </label>
                        <h7 class="pl-1">soporta : PNG, JPG, GIF hasta 10MB</h7>
                    </div>
                </div> 

             <br>  <br>
                <input type="submit" class="btn btn-success" value="Grabar" onclick="return confirm('Grabar ?')">
                <a href="{{route ('eventos.index')}}" class="btn btn-primary">Volver</a>

            </form>


        </div>
    </div>
    </div>
</div> 

<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script>
    $(document).ready(function (e){
        $('#eve_imagen').change(function(){
            let reader =new FileReader();
            reader.onload = (e)=>{
                $('#imagenSeleccionada').attr('src',e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>

@stop

 
