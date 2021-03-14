<?php

namespace App\Models\Servico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicoModel extends Model
{
    protected $table = 'servico';
    protected $fillable = ['nome', 'taxa', 'descricao'];


    public function clientes()
    {
        return $this->belongsToMany('App\Models\Cliente\ClienteModel','servico_cliente', 'id_servico', 'id_cliente');
    }

    public function pedidoservico()
    {
        return $this->belongsTo('App\Models\Pedido\PedidoModel');
    }
}


