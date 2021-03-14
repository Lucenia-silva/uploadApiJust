@extends('Layout.site')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

                <h1>Novo Tipo
                    <small>Registo de novo tipo_pedido</small></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Painel</a></li>
                <li class="breadcrumb-item ">Tipo/Pedido</li>
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
        <form method="post" action="{{route('store_tipo')}}">
            @csrf

        <div class="card-body">
       <div class="col-md-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Designação</span>
                </div>
                <input type="text" class="form-control" placeholder="Serviço" name="tipo_pedido" required>
              </div>
            </div>
                    <button type="submit" class="btn btn-outline-danger  float-right">Cancelar</button>
                    <button type="submit" class="btn btn-outline-success  float-right">Registar</button>



        </div>
            </div>
        </div>



      </form>

  </div>

    </section>
</div>


@endsection
