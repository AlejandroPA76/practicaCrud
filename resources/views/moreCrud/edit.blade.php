
@extends('plantillas.plantilla')

@section('contenido')
   

<form method="POST" action="/inventarios/{{$inv->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
            <label>introduce tu nombre:</label>
            <input type="text"  name="nombre" required value="{{$inv->name}}">
    </div>

    <div class="form-group">
        <label>ingrese el numero:</label>
        <input type="number" name="num" required value="{{$inv->num}}">
    </div>

    <div class="form-group">
        <label>introduce la fecha:</label>
        <input type="date" name="fecha" required value="{{$inv->date}}">
    </div>

     

    <button type="submit" class="btn btn-primary">Guardar Edicion</button>
    <a href="/inventarios" class="btn btn-info">salir</a>

</form>
@endsection