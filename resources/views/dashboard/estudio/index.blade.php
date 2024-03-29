@extends('dashboard.master')
@section('content')

<a class="btn btn-outline-success mt-3 mb-3" href="{{route('estudio.create')}}">Registrar estudio</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tipo de Estudio</th>
        <th scope="col">Fecha Realización</th>
        <th scope="col">Hora</th>
        <th scope="col">Asistencia</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>

    @foreach($estudios as $estudio)
    <tbody>
      <tr>
        <th scope="row">{{$estudio->id}}</th>
        <td>{{$estudio->tipo}}</td>
        <td>{{$estudio->fechaRealizacion}}</td>
        <td>{{str_replace(":00", "", $estudio->horaRealizacion)}}</td>
        <td>
        @if ($estudio->asistencia=="1")
        Si
        @else
        No
        @endif
        </td>
        <td>
          <a href="{{route('estudio.show',$estudio->id)}}" class="btn btn-outline-primary">Consultar</a>
          <a href="{{route('estudio.edit',$estudio->id)}}" class="btn btn-outline-primary">Editar</a>
            <form action="{{url('dashboard/estudio/'.$estudio->id)}}" class="d-inline" method="post">
              @csrf
              {{ method_field('DELETE') }}
              <input class="btn btn-outline-danger" type="submit" onclick="return confirm ('¿Esta seguro de eliminar el estudio?')" 
              value="Eliminar">
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection