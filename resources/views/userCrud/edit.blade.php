
@extends('plantillas.plantilla')

@section('contenido')
   

<form method="POST" action="/users/{{$userE->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
            <label>introduce tu nombre:</label>
            <input type="text"  name="nombre" required value="{{$userE->name}}">
    </div>

    <div class="form-group">
        <label>introduce tu email:</label>
        <input type="email" name="email" required value="{{$userE->email}}">
    </div>

    <div class="form-group">
        <label>introduce tu pass:</label>
        <input type="password" name="pass" required value="{{$userE->password}}">
    </div>

     

    <button type="submit" class="btn btn-primary">Guardar Edicion</button>
    <a href="/users" class="btn btn-info">salir</a>

</form>
@endsection