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
    @foreach($estudios as $estudio)
    <tbody>
      <tr>
        <th scope="row">{{$estudio->id}}</th>
        <td>{{$estudio->tipo}}</td>
        {{--  <td>{{$estudio->posted}}</td>
        <td>{{$estudio->created_at->format('d-m-Y')}}</td>
        <td>{{$estudio->updated_at}}</td>  --}}
        <td>
          <a href="{{route('estudio.show',$estudio->id)}}" class="btn btn-primary">Consultar</a>
          <a href="{{route('estudio.edit',$estudio->id)}}" class="btn btn-primary">Editar</a>
        </td>
        <td>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
            Eliminar
          </button>
          {{--  <form action="{{route('estudio.destroy', $estudio->id)}}" method="POST">
            @csrf 
            @method('DELETE')  --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

 
      <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Borrar estudio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Seguro que deseas eliminar el registro?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No eliminar</button>
          <form id="formDelete" action="{{route('estudio.destroy', 0)}}" method="POST">
            @csrf 
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Sí, eliminar</button>
        </form>
  
  
          
        </div>
      </div>
    </div>
  </div>

  <script>
    window.onload = function(){
      $("#deleteModal").on('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = $(event.relatedTarget);
        var id = button.data('id');

        action = $('#formDelete').attr('data-action').slice(0, -1);
        action += id;

        var modal = $(this);
        modal.find('.modal-title').text('Eliminar el Post: ' + id)
      })
    }

  </script>

@endsection