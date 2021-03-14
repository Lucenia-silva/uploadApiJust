@extends('Layout.site')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

                <h1>Novo Cliente
                    <small>Registo de novo cliente</small></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Painel</a></li>
                <li class="breadcrumb-item ">Cliente</li>
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
        <form method="post" action="{{route('store_cliente')}}">
            @csrf

            <div class="card-body">
                <div class="row form-group">
                    <div class="form-group col-md-5">
                        <label>Designação</label>
                        <input type="text" class="form-control" placeholder="Serviço" name="nome_empresa" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label>E-mail</label>
                            <input type="email" class="form-control" placeholder="Serviço" name="email" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Telefone</label>
                         <input type="text" class="form-control" placeholder="Serviço" name="telefone" required>

                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputState">NIF</label>
                            <input type="text" class="form-control" placeholder="Serviço" name="nif" required>
                     </div>
                          <div class="form-group col-md-3">
                            <label for="inputState">Localização</label>
                                <input type="text" class="form-control" placeholder="Serviço" name="id_localizacao" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Serviço</label>
                                <input type="text" class="form-control" placeholder="Serviço" name="id_servico" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Logo</label>

                            <input type="text" class="form-control" placeholder="Serviço" name="logo" required>
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




          </form>

      </div>

        </section>
    </div>




@endsection

