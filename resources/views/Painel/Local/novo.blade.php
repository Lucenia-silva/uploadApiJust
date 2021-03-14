@extends('Layout.site')


@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

                <h1>Nova Localização
                    <small>Registo de novo</small></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Painel</a></li>
                <li class="breadcrumb-item ">Localização</li>
                <li class="breadcrumb-item active"><a href="#">Novo</a></li>
              </ol>
            </div>
          </div>
        </div>
      </section>

    <section class="content">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Formulário</h3>
          <div class="card-tools">
            <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm text-yellow"><i class="fa fa-reply"></i> Voltar</button></a>
          </div>
        </div>
        <form method="post" action="{{route('store_local')}}">
            @csrf

            <div class="card-body">

              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Pais</label>
                    <input type="text" class="form-control" name="pais" placeholder="Pais" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Provincia</label>
                    <input type="text" class="form-control" name="provincia" placeholder="Provincia" required>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label>Municipio</label>
                    <input type="text" class="form-control" name="municipio" placeholder="Municipio" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label>Bairro</label>
                      <input type="text" class="form-control"name="bairro" placeholder="Bairro" required>
                    </div>
                  <div class="form-group col-md-4">
                    <label>Distrito</label>
                    <input type="text" class="form-control" placeholder="Distrito">
                  </div>
                  <div class="col-md-10">
                </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-outline-danger  float-right">Cancelar</button>
                        <button type="submit" class="btn btn-outline-success  float-right">Registar</button>
                    </div>

                </div>

            </div>
                </div>
            </div>



          </form>

      </div>

        </section>
    </div>




@endsection

