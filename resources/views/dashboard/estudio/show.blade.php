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
            <input readonly type="text" class="form-control" name="fechaRealizacion" id="fechaRealizacion" placeholder="FechaRealizacion" value="{{old('fechaRealizacion',$estudio->fechaRealizacion)}}">
          </div>
        
          <div class="form-group">
            <label for="asistencia">Asistencia</label>
              <input readonly type="text" class="form-control" name="asistencia" id="asistencia" placeholder="asistencia" value="{{old('asistencia', $estudio->asistencia)}}">
          </div>
        
          <div class="form-group">
            <label for="fechaEntrega">Fecha de entrega: </label>
              <input readonly type="text" class="form-control" name="fechaEntrega" id="fechaEntrega" placeholder="fechaEntrega" value="{{old('fechaEntrega', $estudio->fechaEntrega)}}">
          </div>
        
          <div class="form-group">
            <label for="fechaProximo">Fecha de próximo estudio: </label>
              <input readonly type="text" class="form-control" name="fechaProximo" id="fechaProximo" placeholder="fechaProximo" value="{{old('fechaProximo', $estudio->fechaProximo)}}">
          </div>
        
          <div class="form-group">
            <label for="fechaRevision">Fecha de revision: </label>
              <input readonly type="text" class="form-control" name="fechaRevision" id="fechaRevision" placeholder="fechaRevision" value="{{old('fechaRevision', $estudio->fechaRevision)}}">
          </div>
        
          <div class="form-group">
            <label for="resultado">Resultado:</label>
              <input readonly type="text" class="form-control" name="resultado" id="resultado" placeholder="resultado" value="{{old('resultado', $estudio->resultado)}}">
          </div>
        
          <div class="form-group">
            <label for="documento">Documento:</label>
              <input readonly type="text" class="form-control" name="documento" id="documento" placeholder="documento" value="{{old('documento', $estudio->documento)}}">
          </div>

    </form>
@endsection
