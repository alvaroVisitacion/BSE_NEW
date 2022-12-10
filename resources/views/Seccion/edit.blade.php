@extends('layouts.Plantilla')
@section('contenido')
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

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

<div class="container">




    <h1><font color="black" size="7" style="font-family: Times New Roman" >EDITAR SECCIONES</font></h1>   
<form method="POST" action="{{route('seccion.update',$seccion->idseccion)}}" >
@csrf
<input name="_method" type="hidden" value="PATCH">

<div class="row">

    <div class="col-5" >
        <label for="">Seccion</label>
        <input type="text" name="letra" required value="{{$seccion->letra}}" class="browser-default custom-select"><br>
    </div>
    <div class="col-7" >
        <label for="">Curso</label>
    <select name="idcurso" id="" class="browser-default custom-select">
     @foreach($curso as $cur)
     <option value="{{$cur->idcurso}}" 
     @if($cur->idcurso==$seccion->idcurso)
        selected
     @endif
        >
        {{$cur->nombrecu}}</option>
     @endforeach
    </select><br>
    </div>
    <div class="col-6" >
        <label for="">NIVEL</label>
        <select name="idnivel" id="" class="browser-default custom-select">
        @foreach($nivel as $ni)
            <option value="{{$ni->idnivel}}" 
            @if($ni->idnivel==$seccion->idnivel)
                selected
            @endif
                >
                {{$ni->nombreni}}</option>
        @endforeach
        </select><br>
    </div>
</div><br>




<input type="submit" class="btn btn-success" value="Grabar">&nbsp<a href="{{route('seccion.index')}}" class="btn btn-primary">Volver</a>
</form>
</div>  

@stop

