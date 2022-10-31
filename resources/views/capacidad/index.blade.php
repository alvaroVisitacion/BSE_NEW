@extends('layouts.Plantilla')
@section('contenido')
<div class="row">
  <div class="col-md-12">
    <div class="pull-left"><h3>Lista de Capacidades por Cursos</h3><br>
          <div class="btn-group">
          <a href="{{route('capacidad.create')}}" class="btn btn-success">Añadir</a><br>
          </div>
    
            <form class="form-inline my-2 my-lg-0 float-right ">
                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="{{$buscarpor}}">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
     </div>
       
    <div class="table-container">
      <table class="table table-condensed table-bordred table-striped">
        <thead>
         
          <th>CURSO</th>
          <th>CAPACIDAD</th>
 
          <th colspan="2"> </th>
        </thead>
        <tbody>
        
            @foreach($capacidad_cursos as $cur)  
            <tr>
               
              <td class="col-sm-4">{{$cur->nombrecu}}</td>
              <td>{{$cur->capacidad}}</td>
              
            
            @endforeach
      
        
        </tbody>
      </table>
    </div>
  </div>       
</div>
<div align="center"><h5>{{$capacidad_cursos->links()}}</h5></div> 
@stop
