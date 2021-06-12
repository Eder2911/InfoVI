@extends('dashboard.master')
@section('content')
    <form action="{{route('estudio.store')}}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="tipo">Tipo de estudio</label>
              <input readonly type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo" value="{{old('tipo', $estudio->tipo)}}">
          </div>
        
          <div class="form-group">
            <label for="FechaRealizacion">Fecha de realización</label>
            <input readonly type="text" class="form-control" name="fechaRealizacion" id="fechaRealizacion" placeholder="FechaRealizacion" value="{{old('fechaRealizacion',$post->fechaRealizacion)}}">
          </div>
        
          <div class="form-group">
            <label for="asistencia">Asistencia</label>
              <input readonly type="text" class="form-control" name="asistencia" id="asistencia" placeholder="asistencia" value="{{old('asistencia', $post->asistencia)}}">
          </div>
        
          <div class="form-group">
            <label for="fechaEntrega">Fecha de entrega: </label>
              <input readonly type="text" class="form-control" name="fechaEntrega" id="fechaEntrega" placeholder="fechaEntrega" value="{{old('fechaEntrega', $post->fechaEntrega)}}">
          </div>
        
          <div class="form-group">
            <label for="fechaProximo">Fecha de próximo estudio: </label>
              <input readonly type="text" class="form-control" name="fechaProximo" id="fechaProximo" placeholder="fechaProximo" value="{{old('fechaProximo', $post->fechaProximo)}}">
          </div>
        
          <div class="form-group">
            <label for="fechaRevision">Fecha de revision: </label>
              <input readonly type="text" class="form-control" name="fechaRevision" id="fechaRevision" placeholder="fechaRevision" value="{{old('fechaRevision', $post->fechaRevision)}}">
          </div>
        
          <div class="form-group">
            <label for="resultado">Resultado:</label>
              <input readonly type="text" class="form-control" name="resultado" id="resultado" placeholder="resultado" value="{{old('resultado', $post->resultado)}}">
          </div>
        
          <div class="form-group">
            <label for="documento">Documento:</label>
              <input readonly type="text" class="form-control" name="documento" id="documento" placeholder="documento" value="{{old('documento', $post->documento)}}">
          </div>

    </form>
@endsection
