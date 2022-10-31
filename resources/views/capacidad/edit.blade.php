@extends('layouts.Plantilla')
@section('contenido')
 <div class="container" >
    <h1>Editar Capacidad</h1>
    
    <form method="POST" action="{{route('capacidad.update',$capacidad_cursos->idcapacidad)}}">
        {{method_field('put')}}
            {{ csrf_field() }}


    <div class="form-group">
        <label for="">Capacidad</label>
        <input type="text" class="form-control" id="capacidad" name="capacidad"  value="{{$capacidad_cursos->capacidad}}">
    </div>


    <label for="">Curso</label>
<select name="idcurso" id="">
    @foreach($curso as $nive)
        <option value="{{$nive->idcurso}}" 
        @if($capacidad_cursos->idcurso==$nive->idcurso)
            selected="selected"
        @endif
        >{{$nive->nombrecu}}</option>
    @endforeach
</select><br>
   



     <br>

	<input type="submit" value="Grabar" class="btn btn-success" onclick="return confirm('Grabar ?')">&nbsp<a href="{{route('alumno.index')}}" class="btn btn-primary">Volver</a>	

</form>
 </div>
    
@endsection
