@extends('layouts.Plantilla')

@section('contenido') <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"><br><br><br><br><br><br><br><br>
            <div class="card">
            

                <div class="card-header">Edit user {{$user->name}}</div>

                <div class="card-body">
                    <form action="{{route('admin.users.update',$user)}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}
                        @foreach($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{$role->id}}"
                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif >
                                <label for="">{{$role->name}}</label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection