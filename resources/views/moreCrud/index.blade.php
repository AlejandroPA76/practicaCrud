@extends('plantillas.plantilla')

@section('contenido')
   <a href="/inventarios/create" class="btn btn-primary">agregar</a>
   <br>
   <br>
<table class="table">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">numero</th>
      <th scope="col">fecha</th>
      <th scope="col">accion</th>

    </tr>
  </thead>
  <tbody>

      @foreach($invs as $inv)
    <tr>
      <td>{{$inv->id}}</td>
      <td>{{$inv->name}}</td>
      <td>{{$inv->num}}</td>
      <td>{{$inv->date}}</td>
      <td>
        <a class="btn btn-warning" href="inventarios/{{$inv->id}}/edit">editar</a>
      </td>

      <td>
        <a href="javascript: document.getElementById('delete').submit()" class="btn btn-danger btn-sm" onclick="return confirm('deseas borrar?')">Eliminar</a>

        <form id=delete action="inventarios/{{$inv->id}}" method="POST" >
          @csrf
          @method('delete')

        </form>
      </td>


    </tr>
    
   @endforeach
    
  </tbody>
</table>
@endsection