@extends('layusers.app')
@section('title','listado de usuarios')
@section('content')
    <br><br>
    <a href="{{route('users.create')}}" class="btn btn-primary btn-sm">Registrar nuevo usuario</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Telefono</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->Nombre}}</td>
                    <td>{{$user->Apellidos}}</td>
                    <td>{{$user->Correo}}</td>
                    <td>{{$user->Telefono}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
