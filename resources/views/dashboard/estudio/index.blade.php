@extends('dashboard.master')
@section('content')

<a class="btn btn-success mt-3 mb-3" href="{{route('estudio.create')}}">Registrar estudio</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tipo de Estudio</th>
        
        <th scope="col">Actions</th>
      </tr>
    </thead>
    @foreach($estudios as $estudio)
    <tbody>
      <tr>
        <th scope="row">{{$estudio->id}}</th>
        <td>{{$estudio->tipo}}</td>
        <td>
          <a href="{{route('estudio.show',$estudio->id)}}" class="btn btn-primary">Consultar</a>
          <a href="{{route('estudio.edit',$estudio->id)}}" class="btn btn-primary">Editar</a>
        </td>
        <td>
          <form action="{{url('dashboard/estudio/'.$estudio->id)}}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm ('¿Esta seguro de eliminar el estudio?')" 
            value="Sí, eliminar">
          </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

 



@endsection