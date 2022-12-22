
@extends('plantillas.plantilla')

@section('contenido')
   

<form method="POST" action="/inventarios">
    @csrf
    <div class="form-group">
            <label>introduce tu nombre:</label>
            <input type="text"  name="nombre" required>
    </div>

    <div class="form-group">
        <label>ingrese el numero:</label>
        <input type="number" name="num" required>
    </div>

    <div class="form-group">
        <label>introduce la fecha:</label>
        <input type="date" name="fecha" required>
    </div>

     

    <button type="submit" class="btn btn-primary">Agregar</button>
    <a href="/inventarios" class="btn btn-info">salir</a>

</form>
@endsection