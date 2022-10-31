@extends('layouts.Plantilla')

@section('contenido') <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"><br><br><br><br><br><br><br><br><br><br><br>
            <div class="card">
                <div class="card-header">Lista de Usuarios</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <th>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</th>
                                    <td>
                                        <a href="{{route('admin.users.edit',$user->id)}}">
                                            <button type="button" class="btn btn-primary">Edit</button>
                                        </a>
                                            <form action="{{route('admin.users.destroy',$user)}}" method="POST" class="float-right">
                                            @csrf
                                            {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-warning">Delete</button>
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection