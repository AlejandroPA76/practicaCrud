@extends('plantillas.plantilla')

@section('contenido')
   <a href="/users/create" class="btn btn-primary">agregar</a>
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
      <td><a href="users/{{$use->id}}/edit">editar</a></td>
    </tr>
    
   @endforeach
    
  </tbody>
</table>
@endsection