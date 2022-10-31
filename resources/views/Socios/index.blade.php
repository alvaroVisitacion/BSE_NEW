@extends('layouts.Plantilla')

@section('contenido') <br>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link  rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/maquinawrite.css') }}">
</head>




<div class="card"> <br><br>
<br>
<br><div class="pull-left"><h3>Lista de Socios</h3><br>
    <div class="card-header">
        <div class="btn-group">
            <a href="{{route('socios.create')}}" class="btn btn-success">Añadir</a><br>
        </div>
    </div>
    <div class="card-body">
        <table id="socio" class="table table-striped"> 
                <thead class="thead-light">
                    <tr>
                        <th>N°</th>
                        <th>Titulo</th>
                        <th>Descripcion</th> 
                         <th>Estado</th>  
                        <th > </th>
                        <th >Opciones</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach ($socios as $soc_codigo=>$soc) 
                 
                    <tr>
                        <td>{{$soc_codigo}}</td>
                        <td>{{$soc->soc_titulo}}</td>
                        <td>{{$soc->soc_descripcion}}</td> 
                        @if($soc->soc_estado==1)
                        <td>
                            <a type="button" href="{{route('change.status.socios', $soc)}}" 
                            class="btn btn-sm btn-success">Activa</a>
                        </td>
                        @else
                        <td>
                            <a type="button" href="{{route('change.status.socios', $soc)}}" class="btn btn-sm btn-danger">Inactiva</a>
                        @endif
                        </td>
                         
                        <td>  <a class="btn btn-primary btn-xs" href="{{route('socios.edit', $soc->soc_codigo)}}" ><span class="glyphicon glyphicon-edit">Editar</span></a> </td>
                         
                         <td>
                             <form action="{{action('SocioController@destroy', $soc->soc_codigo)}}" method="post" class="formEliminar" >
                                 {{csrf_field()}}
                                 <input name="_method" type="hidden" value="DELETE">
                                 <button class="btn btn-danger btn-xs" type="submit"  ><span class="glyphicon glyphicon-remove">Eliminar</span></button>
                             </form>
                         </td>

                    </tr>
                    @endforeach
                </tbody>
        </table>
     
    </div>

</div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#socio').DataTable({
            "language":{
                "search":       "Buscar",
                "lengthMenu":   "Mostrar _MENU_ registros por página",
                "info":         "Mostrando página _PAGE_ de _PAGES_",
                "paginate": {
                                    "previous": "Anterior",
                                    "next": "Siguiente",
                                    "first": "Primero",
                                    "last": "Último"
                }
            }
        });
    });

    (function(){
        'use strict'
        var forms =document.querySelectorAll('.formEliminar')
        Array.prototype.slice.call(forms)
            .forEach(function (form){
                form.addEventListener('submit', function(event){
                    event.preventDefault()
                    event.stopPropagation() 
                    Swal.fire({
                        title: 'Seguro que quiere eliminar?', 
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado',
                            'success' );
                            }
                        })
                }, false)
            }) 
    })()


       $(document).ready(function() {
            $(window).load(function() {
                $(".cargando").fadeOut(1000);
            });

    })
    
    </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 @stop



 
