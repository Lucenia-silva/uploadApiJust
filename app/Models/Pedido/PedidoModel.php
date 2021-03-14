<?php

namespace App\Models\Pedido;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = 'pedido';
    protected $fillable = ['valor','id_tipo_pedido','id_servico','id_pagamento'];


    public function servico()
    {
     return $this->hasMany('App\Models\Servico\ServicoModel');

    }
    public function tipo_pedidos()
    {
     return $this->hasMany('App\Models\TipoPedido\TipoPedidoModel');

    }

    public function pagamentos()
    {
     return $this->hasMany('App\Models\Pagamento\PagamentoModel');

    }

}


