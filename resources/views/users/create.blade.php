@extends('layusers.app')
@section('title','Crear nuevo usuario')
@section('content')
    <div class="rom">
        <div class="col-cd-b offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('users.store')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" name="Nombre"id="Nombre" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Apellidos</label>
                            <input type="text" name="Apellidos"id="name" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input type="text" name="Correo"id="name" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="text" name="Telefono"id="name" class="form-control">

                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Registrar</button>
                        <a href="{{route('users.index')}}">Cancelar</a>

                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
