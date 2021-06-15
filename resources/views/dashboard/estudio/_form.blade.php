<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
@csrf
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style type="text/css">
        body {
          color: rgb(255, 255, 255);
          background-color: #80c3e2 }
        </style>

    <form class= container>
        <div>
            <h3 class="col-md-6 offset-md-3">
                Estudio
            </h3>
        </div>


        <div class="row align-items-start">
        <div class="col-md-6 offset-md-3" >
          <label  class="form-label">Tipo de estudio</label>
          <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo" value="{{old('tipo', $estudio->tipo)}}">
        </div>

        <div class="col-md-6 offset-md-3" >
            <label  class="form-label">Fecha de estudio</label>
            <input type="date" class="form-control" name="fechaRealizacion" id="fechaRealizacion" placeholder="FechaRealizacion" value="{{old('fechaRealizacion',$estudio->fechaRealizacion)}}">
          </div>

          <div class="col-md-6 offset-md-3" >
            <label  class="form-label">Hora de estudio</label>
            <input type="time" class="form-control" name="horaRealizacion" id="horaRealizacion" placeholder="FechaRealizacion" value="{{old('fechaRealizacion',$estudio->horaRealizacion)}}">
          </div>

          <div class="col-md-6 offset-md-3" >
            <label  class="form-label">Fecha de entrega</label>
            <input type="date" class="form-control" name="fechaEntrega" id="fechaEntrega" placeholder="fechaEntrega" value="{{old('fechaEntrega', $estudio->fechaEntrega)}}">
          </div>  

          <div class="col-md-6 offset-md-3" >
            <label  class="form-label">Fecha del proximo estudio</label>
            <input type="date" class="form-control" name="fechaProximo" id="fechaProximo" placeholder="fechaProximo" value="{{old('fechaProximo', $estudio->fechaProximo)}}">
          </div>

          <div class="col-md-6 offset-md-3" >
            <label  class="form-label">Fecha de revision</label>
            <input type="date" class="form-control" name="fechaRevision" id="fechaRevision" placeholder="fechaRevision" value="{{old('fechaRevision', $estudio->fechaRevision)}}">
          </div>

          <div class="col-md-6 offset-md-3" >
            <label  class="form-label">Resultado</label>
            <input type="text" class="form-control" name="resultado" id="resultado" placeholder="resultado" value="{{old('resultado', $estudio->resultado)}}">
          </div>


        <div class="col-md-6 offset-md-3" >
            <label class="form-label">Asistencia</label>
        </br>
       
              
                @if(isset($estudio->asistencia))
                  @if (old('asistencia', $estudio->asistencia) == 1)
                    {{--  SI  --}}
                    <input type="radio" id="asistencia" name="asistencia" value="1" checked>
                    <label for="asistencia">Si</label><br>
                    {{--  NO  --}}
                    <input type="radio" id="asistencia" name="asistencia" value="0" >
                    <label for="asistencia">No</label><br>
                  @else 
                    {{--  SI  --}}
                    <input type="radio" id="asistencia" name="asistencia" value="1">
                    <label for="asistencia">Si</label><br>
                    {{--  NO  --}}
                    <input type="radio" id="asistencia" name="asistencia" value="0" checked>
                    <label for="asistencia">No</label><br>
                  
                  @endif

                 @else
              
                  <input type="radio" id="asistencia" value="1" name="asistencia">
                  <label for="asistencia">Si</label><br>
                  <input type="radio" id="asistencia" value="0" name="asistencia">
                  <label for="asistencia">No</label><br>
                  
                @endif

        {{--  Espacio para subir un archivo  --}}
                <div>
                  <label for="formFile" class="form-label">Sube tu archivo aquí</label>
                  <input class="form-control form-control" name='documento' id="documento" type="file" value="{{old('documento', $estudio->documento)}}" method='PUT'>
                  @csrf
                  {{method_field('POST')}}
                </div>


        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-primary">Registrar</button></div>
        </div>
      </br>
      </br>
    </form>