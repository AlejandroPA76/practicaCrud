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
        <a href="inventarios/{{$inv->id}}/edit">editar</a>
      </td>

      <td>
        
        <form action="inventarios/{{$inv->id}}" method="POST" >
          @csrf
          @method('delete')
          <button type="submit">eliminar</button>

        </form>
      </td>


    </tr>
    
   @endforeach
    
  </tbody>
</table>
@endsection