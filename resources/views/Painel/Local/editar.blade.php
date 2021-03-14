@extends('Layout.site')


@section('content')
  <div class="content-wrapper">

  <section class="content">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Formulário</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <form method="post" action="{{route('editarlocal',['id'=>$locais->id])}}">
          @csrf
            @method('PUT')
          <div class="card-body">

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Pais</label>
                  <input type="text" class="form-control" name="pais" placeholder="Pais"value="{{$locais->pais}}" required>
                </div>
                <div class="form-group col-md-6">
                  <label>Provincia</label>
                  <input type="text" class="form-control" name="provincia" placeholder="Provincia" value="{{$locais->provincia}}"required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Municipio</label>
                  <input type="text" class="form-control" name="municipio" placeholder="Municipio" value="{{$locais->municipio}}" required>
                </div>
                <div class="form-group col-md-4">
                    <label>Bairro</label>
                    <input type="text" class="form-control"name="bairro" placeholder="Bairro" value="{{$locais->bairro}}"required>
                  </div>
                <div class="form-group col-md-4">
                  <label>Distrito</label>
                  <input type="text" class="form-control" placeholder="Distrito">
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    Clique
                  </label>
                </div>
              </div>

                      <button type="submit" class="btn btn-outline-success  float-right">Actualizar</button>


          </div>
              </div>
          </div>



        </form>

    </div>

      </section>
  </div>

@endsection
