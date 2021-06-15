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
            <input readonly type="date" class="form-control" name="fechaRealizacion" id="fechaRealizacion" placeholder="FechaRealizacion" value="{{old('fechaRealizacion',$estudio->fechaRealizacion)}}">
          </div>
        
          <div class="form-group">
            <label for="asistencia">Asistencia</label>
            @if ( $estudio->asistencia == 1 )
            <br>

            {{--  <div class="form-check">
              <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1" value="1" disabled>
              <label class="form-check-label" for="flexRadioDefault1">
                Asistió
              </label>
            </div>  --}}
            <input type="radio" id="asistencia" value="1" name="asistencia" value="{{old('asistencia', $estudio->asistencia)}}" checked disabled>
            <label for="asistencia">Si</label><br>
            

            @elseif ( $estudio->asistencia == 0 )
              {{--  <div class="form-check">
                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2" value="0" checked disabled>
                <label class="form-check-label" for="flexRadioDefault2">
                  No asistió
                </label>
              </div>  --}}
              <input type="radio" id="asistencia" value="0" name="asistencia" value="{{old('asistencia', $estudio->asistencia)}}" checked disabled>
              <label for="asistencia">No</label><br>

            @endif 
            

          </div>
        
          <div class="form-group">
            <label for="fechaEntrega">Fecha de entrega: </label>
              <input readonly type="date" class="form-control" name="fechaEntrega" id="fechaEntrega" placeholder="fechaEntrega" value="{{old('fechaEntrega', $estudio->fechaEntrega)}}">
          </div>
        
          <div class="form-group">
            <label for="fechaProximo">Fecha de próximo estudio: </label>
              <input readonly type="date" class="form-control" name="fechaProximo" id="fechaProximo" placeholder="fechaProximo" value="{{old('fechaProximo', $estudio->fechaProximo)}}">
          </div>
        
          <div class="form-group">
            <label for="fechaRevision">Fecha de revision: </label>
              <input readonly type="date" class="form-control" name="fechaRevision" id="fechaRevision" placeholder="fechaRevision" value="{{old('fechaRevision', $estudio->fechaRevision)}}">
          </div>
        
          <div class="form-group">
            <label for="resultado">Resultado:</label>
              <input readonly type="text" class="form-control" name="resultado" id="resultado" placeholder="resultado" value="{{old('resultado', $estudio->resultado)}}">
          </div>
          
            <div class="form-group">
              <label for="documento">Documento: </label>

                <a type="text" class="form-control" href="../../storage/{{$estudio->tipo."-".$estudio->fechaRealizacion."-".str_replace(":", "", $estudio->horaRealizacion)}}.pdf">Ver documento de estudio</a>
              
            </div>
         

    </form>
@endsection


{{-- {{old('documento', $estudio->documento)}} --}}