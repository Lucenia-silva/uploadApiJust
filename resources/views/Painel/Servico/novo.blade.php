

@extends('Layout.site')

@section('content')
<div class="content-wrapper">
<section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

                <h1>Novo Serviço
                    <small>Registo de novo serviço</small></h1>
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
          <h3 class="card-title">Preencher Formulário</h3>
          <div class="card-tools">
            <a href="javascript:history.back();"><button type="button" class="btn btn-box-tool btn-sm text-yellow"><i class="fa fa-reply"></i> Voltar</button></a>
          </div>
        </div>
      <form method="post" action="{{route('store_servico')}}" >
          @csrf

          <div class="card-body">
          <div class="row form-group">
              <div class="col-md-8">
                <label>Descrição</label>
              <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Serviço" name="nome" required>
                </div>
              </div>
              <div class="col-md-4">
                <label>Taxa </label>
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Taxa"name="taxa" required>
                    </div>
                  </div>
                    <div class="col-md-12 mb-3">
                      <div class="col-sm-12">
                          <div class="form-group">
                            <label>Descrição</label>
                            <textarea type="text" class="form-control"  rows="3" placeholder="Enter ..." name="descricao"required></textarea>
                          </div>
                        </div>

                      <button type="submit" class="btn btn-outline-success  float-right">Registar</button>

                      <button type="submit" class="btn btn-outline-danger  float-right">Apagar</button>

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
