
@extends('plantillas.plantilla')

@section('contenido')
   

<form method="POST" action="/users">
    @csrf
    <div class="form-group">
            <label>introduce tu nombre:</label>
            <input type="text"  name="nombre" required>
    </div>

    <div class="form-group">
        <label>introduce tu email:</label>
        <input type="email" name="email" required>
    </div>

    <div class="form-group">
        <label>introduce tu pass:</label>
        <input type="password" name="pass" required>
    </div>

     

    <button type="submit" class="btn btn-primary">Agregar</button>
    <a href="usuario" class="btn btn-info">salir</a>

</form>
@endsection