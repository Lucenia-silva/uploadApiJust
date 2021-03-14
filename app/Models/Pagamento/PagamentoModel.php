<?php

namespace App\Models\Pagamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagamentoModel extends Model
{
    protected $table = 'pagamento';
    protected $fillable = ['tipo_pagamento', 'id_cliente'];


    public function pedidosPagamento()
    {
        return $this->belongsTo('App\Models\Pedido\PedidoModel');
    }

}
