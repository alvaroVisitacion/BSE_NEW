@extends('layouts.Plantilla')
@section('contenido')
<h3>Listado de Secciones</h3>
<div>
  <a href="{{action('SeccionController@create')}}" class="btn btn-success">Agregar</a>
<form class="form-inline my-2 my-lg-0 float-right ">
                <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="{{$buscarpor}}">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
</div>


<table class="table">
<thead>

    <th scope="col" >Seccion</th>
    <th scope="col" >Curso</th>
    <th scope="col" >Nivel</th>
    
    <th scope="col" colspan="2">Opciones</th>
    

</thead>
<tbody>
@foreach($seccion as $sec)
<tr>

<td>{{$sec->letra}}</td>
<td>{{$sec->nombrecu}}</td>
<td>{{$sec->nombreni}}</td>

 <td><a class="btn btn-primary btn-xs" href="{{action('SeccionController@edit', $sec->idseccion)}}" ><span class="glyphicon glyphicon-edit">Editar</span></a></td>
</td>
              <td>
                <form action="{{action('SeccionController@destroy', $sec->idseccion)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE"> 
                   <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('Eliminar ?')"><span class="glyphicon glyphicon-remove">Eliminar</span></button>
                 </form>                 
              </td>
</tr>
@endforeach
</tbody>
</table>
<div align="center"><h5>{{$seccion->links()}}</h5></div>  
@stop


