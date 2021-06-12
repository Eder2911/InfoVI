<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style type="text/css">
        body {
          color: rgb(255, 255, 255);
          background-color: #80c3e2 }
        </style>

    <form class= container>
        <div>
            <h3 class="col-md-6 offset-md-3">
                Registrar estudio
            </h3>
        </div>


        <div class="row align-items-start">
        <div class="col-md-6 offset-md-3" >
          <label  class="form-label">Tipo de estudio</label>
          <input type="text" class="form-control" name="tipoEstudio" id="tipoEstudio" placeholder="Tipo" value="{{old('tipo', $estudio->tipo)}}">
        </div>

        <div class="col-md-6 offset-md-3" >
            <label  class="form-label">Fecha de realizacion</label>
            <input type="date" class="form-control" name="fechaRealizacion" id="fechaRealizacion" placeholder="FechaRealizacion" value="{{old('fechaRealizacion',$estudio->fechaRealizacion)}}">
          </div>

          <div class="col-md-6 offset-md-3" >
            <label  class="form-label">Fecha de entrega</label>
            <input type="date" class="form-control" name="fechaEntrega" id="fechaEntrega" placeholder="fechaEntrega" value="{{old('fechaEntrega', $post->fechaEntrega)}}">
          </div>  

          <div class="col-md-6 offset-md-3" >
            <label  class="form-label">Fecha del proximo estudio</label>
            <input type="date" class="form-control" name="fechaProximo" id="fechaProximo" placeholder="fechaProximo" value="{{old('fechaProximo', $post->fechaProximo)}}">
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
            <input type="radio" id="asistio" name="asistio" value="{{old('asistencia', $estudio->asistencia)}}">
            <label for="asistencia">Si</label><br>
            <input type="radio" id="no_asistio" name="no_asistio" value="{{old('asistencia', $estudio->asistencia)}}">
            <label for="asistencia">No</label><br>
            
        </div>

        <div class="col-md-6 offset-md-3">
 
            <h2 class="text-center">Sube tu archivo</h2>
                <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="file" placeholder="Choose file" id="file">
                            </div>
                        </div>
                    </div>
                </form>
            </br>
        </div>

        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-primary">Registrar</button></div>
        </div>
    </form>