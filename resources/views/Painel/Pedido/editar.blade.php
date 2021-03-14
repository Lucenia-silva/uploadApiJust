@extends('Layout.site')


@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

                <h1>Novo Pedido
                    <small>Registo de novo cliente</small></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Painel</a></li>
                <li class="breadcrumb-item ">Pedido</li>
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
        <form method="post" action="{{route('editarpedido',['id'=>$pedido->id])}}">

          @csrf
          @method('PUT')

          <div class="card-body">

              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Pedido</label>
                  <input type="text" class="form-control" name="id_tipo_pedido" placeholder="tipo_pedido"  value="{{$pedido->id_tipo_pedido}}" required>
                </div>
                <div class="form-group col-md-3">
                    <label>Servico</label>
                    <input type="text" class="form-control" name="id_servico" placeholder="servico"  value="{{$pedido->id_servico}}" required>
                  </div>
                <div class="form-group col-md-3">
                  <label>Valor</label>
                  <input type="text" class="form-control" name="valor" placeholder="valor"  value="{{$pedido->valor}}" required>
                </div>
                <div class="form-group col-md-3">
                    <label>tipo_pagamento</label>
                    <input type="text" class="form-control" name="id_pagamento" placeholder="Pagamento por.."  value="{{$pedido->id_pagamento}}" required>
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
