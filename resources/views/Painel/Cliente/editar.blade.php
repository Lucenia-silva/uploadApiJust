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
        <form method="post" action="{{route('editarcliente',['id'=>$cliente->id])}}">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="row form-group">
                    <div class="form-group col-md-5">
                        <label>Designação</label>
                        <input type="text" class="form-control" placeholder="Serviço" name="nome_empresa" value="{{$cliente->nome_empresa}}" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label>E-mail</label>
                            <input type="email" class="form-control" placeholder="Serviço" name="email"  value="{{$cliente->email}}" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Telefone</label>
                         <input type="text" class="form-control" placeholder="Serviço" name="telefone" value="{{$cliente->telefone}}" required>

                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputState">NIF</label>
                            <input type="text" class="form-control" placeholder="Serviço" name="nif"  value="{{$cliente->nif}}" required>
                     </div>
                          <div class="form-group col-md-3">
                            <label for="inputState">Localização</label>
                                <input type="text" class="form-control" placeholder="Serviço" name="id_localizacao"  value="{{$cliente->id_localizacao}}" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Serviço</label>
                                <input type="text" class="form-control" placeholder="Serviço" name="id_servico" value="{{$cliente->id_servico}}" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Logo</label>

                            <input type="text" class="form-control" placeholder="Serviço" name="logo"  value="{{$cliente->logo}}" required>
                        </div>
                        <div class="col-md-10">
                        </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-outline-success  float-right">Actualizar</button>
                            </div>
            </div>
                </div>



          </form>

      </div>

        </section>
</div>
@endsection











