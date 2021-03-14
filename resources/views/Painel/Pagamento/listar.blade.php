@extends('Layout.site')


@section('content')
<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

            <h6>Listagem de Pagamentos
                <small>Lista de todos os Pagamentos existentes</small></h6>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Painel</a></li>
            <li class="breadcrumb-item ">Pagamento</li>
            <li class="breadcrumb-item active"><a href="#">Listagem</a></li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabela</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>Designação</th>
              <th>Cliente</th>
              <th>Acção</th>

            </tr>
            </thead>
            <tbody>


            @foreach ($pagamentos as $pagamento)

                <tr>
                <td> {{ $pagamento->tipo_pagamento }}</td>
                <td> {{ $pagamento->id_cliente }}</td>
                <td>
                <div class="btn-group">

                <a href="{{route('editarpagar',[$pagamento->id])}}"><button type="button" class="btn btn-box-tool btn-sm btn-success"><i class="fa fa-edit text-white"></i></button></a>
                <form action="{{route('deletepagar',['id'=>$pagamento->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-box-tool btn-sm btn-danger"><i class="fa fa-edit text-white"></i></button>
                    </form>

                    </div>
                  </td>
                </tr>


         @endforeach


            </tr>
            </tbody>
            <tfoot>
            <tr>
              <th>Designação</th>
              <th>Cliente</th>
              <th>Acção</th>
            </tr>
            </tfoot>
          </table>
        </div>
      </div>


</section>

</div>

@endsection

