@extends('plantillas.plantilla')

@section('contenido')
   <a href="/users/create" class="btn btn-primary">agregar</a>
   <a href="/inventarios" class="btn btn-primary"> more crud</a>
   <br>
   <br>
<table class="table">

  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">apellidos</th>
      <th scope="col">correo</th>
    </tr>
  </thead>
  <tbody>
     @foreach($users as $use)
    <tr>
      <td>{{$use->id}}</td>
      <td>{{$use->name}}</td>
      <td>{{$use->email}}</td>
      <td><a href="users/{{$use->id}}/edit" class="btn btn-secondary">editar</a></td>
      <td>
        <a href="javascript: document.getElementById('delete').submit()" class="btn btn-danger btn-sm" onclick="return confirm('deseas borrar?')">Eliminar</a>

        <form id=delete action="users/{{$use->id}}" method="POST">
          @csrf
          @method('delete')
         
        </form>


         
      </td>
    </tr>
    
   @endforeach
    
  </tbody>
</table>
@endsection