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
         <h1><font color="black" size="6" style="font-family: Times New Roman" >REGISTRO DE PRODUCTOS</font></h1>  
    </div>
    <div class="card-body">
    <div class="container">

        <div class="row">
         
            <form method="POST" action="{{ route ('productos.store')}}"   enctype="multipart/form-data">
            @csrf

                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">TITULO</label>
                        <input type="text" name="pro_titulo" id="pro_titulo" class="form-control col-md-7" placeholder="titulo">
                    </div>
                </div>  

                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">DESCRIPCION</label> 
                         <textarea id="pro_descripcion" name="pro_descripcion" rows="3" class=" form-control col-md-7" placeholder="descripcion"></textarea>
                    </div>
                </div> 
                <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">Beneficio</label> 
                         <textarea id="pro_beneficio" name="pro_beneficio" rows="3" class=" form-control col-md-7" placeholder="beneficio"></textarea>
                    </div>
                </div>   
                <br><br>
                 <div class="col-md-12">
                    <div class="row justify-content-center" id="titulo">
                        <label for="">Estado</label> 
                         <label class="switch">
                                <input id="pro_estado" name="pro_estado"  class="mi_checkbox  col-md-7" type="checkbox" data-onstyle="success" 
                                data-offstyle="danger" data-toggle="toggle" value="1"  value="0"  >
                                <span class="slider round"></span>  
                            </label>
                    </div>
                </div>  

                <div class="col-md-12" id="foto">
                    <div class="row justify-content-center">
                        <label for=""><span> Visualización de la imagen</span></label> 
                         <img id="imagenSeleccionada" style="max-height: 200px; max-width:200px;">
                    </div>
                <br>
                    <div class="row justify-content-center">
                        <label for=""><span> AGREGAR IMAGEN</span></label> 
                        <input id="pro_imagen" name="pro_imagen"type="file" class=" form-control col-md-7" >
                        </label>
                        <h7 class="pl-1">soporta : PNG, JPG, GIF hasta 10MB</h7>
                    </div>
                </div> 

             <br>  <br>
                <input type="submit" class="btn btn-success" value="Grabar" onclick="return confirm('Grabar ?')">
                <a href="{{route ('productos.index')}}" class="btn btn-primary">Volver</a>

            </form>


        </div>
    </div>
    </div>
</div> 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script>
    $(document).ready(function (e){
        $('#pro_imagen').change(function(){
            let reader =new FileReader();
            reader.onload = (e)=>{
                $('#imagenSeleccionada').attr('src',e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>

@stop

 

 


