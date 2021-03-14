
@extends('Layout.site')

@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>
                Novo Serviço
                <small>Registo de um novo serviço</small>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Painel</a></li>
            <li class="breadcrumb-item ">Serviço</li>
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
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <form method="post" action="{{route('editarservico',['id'=>$servico->id])}}">
            @csrf
            @method('PUT')
            <div class="card-body">
            <div class="row form-group">
                <div class="col-md-8">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Designação</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Serviço" name="nome" value="{{$servico->nome}}" required>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Taxa</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Taxa"name="taxa" value="{{$servico->taxa}}" required>
                      </div>
                    </div>
                      <div class="col-md-12 mb-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                              <label>Descrição</label>
                              <textarea class="form-control"  type="text" rows="3" placeholder="Assunto" name="descricao" value="{{$servico->descricao}}" required></textarea>
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











