@extends('Layout.site')


@section('content')
<div class="content-wrapper">

    <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

            <h6>Listagem de Clientes
                <small>Lista de todos os clientes existentes</small></h6>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Painel</a></li>
            <li class="breadcrumb-item ">clientes</li>
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
              <th>E-mail</th>
              <th>Telefone</th>
              <th>NIF</th>
              <th>Loacalização</th>
              <th>Servico</th>
              <th>Logo</th>
              <th>Acção</th>


            </tr>
            </thead>
            <tbody>


            @foreach ($clientes as $cliente)

                <tr>
                <td> {{ $cliente->nome_empresa }}</td>
                <td> {{ $cliente->email }}</td>
                <td> {{ $cliente->telefone }}</td>
                <td> {{ $cliente->nif }}</td>
                <td> {{ $cliente->logo }}</td>
                <td> {{ $cliente->id_localizacao }}</td>
                <td> {{ $cliente->id_servico }}</td>


                <td>
                <div class="btn-group">

                <a href="{{route('editarcliente',$cliente->id)}}"><button type="button" class="btn btn-box-tool btn-sm btn-success"><i class="fa fa-edit text-white"></i></button></a>
                <form action="{{route('deletecliente',['id'=>$cliente->id])}}" method="post">
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
                <th>E-mail</th>
                <th>Telefone</th>
                <th>NIF</th>
                <th>Loacalização</th>
                <th>Servico</th>
                <th>Logo</th>
                <th>Acção</th>


            </tr>
            </tfoot>
          </table>
        </div>
      </div>


</section>

</div>

@endsection

