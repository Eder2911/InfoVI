@extends('dashboard.master')
@section('content')

<a class="btn btn-success mt-3 mb-3" href="{{route('estudio.create')}}">Registrar estudio</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tipo de Estudio</th>
        {{--  <th scope="col">Posted</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>  --}}
        <th scope="col">Actions</th>
      </tr>
    </thead>
    @foreach($estudio as $estudio)
    <tbody>
      <tr>
        <th scope="row">{{$estudio->idEstudio}}</th>
        <td>{{$estudio->tipo}}</td>
        {{--  <td>{{$estudio->posted}}</td>
        <td>{{$estudio->created_at->format('d-m-Y')}}</td>
        <td>{{$estudio->updated_at}}</td>  --}}
        <td>
          <a href="{{route('estudio.show',$estudio->idEstudio)}}" class="btn btn-primary">Ver</a>
          <a href="{{route('estudio.edit',$estudio->idEstudio)}}" class="btn btn-primary">Editar</a>
        </td>
        <td>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
            Eliminar
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Borrar estudio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Seguro que deseas eliminar el registro?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <form action="{{route('estudio.destroy', $estudio->idEstudio)}}" method="POST">
            @csrf 
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Sí, Eliminar</button>
        </form>
          
        </div>
      </div>
    </div>
  </div>

@endsection