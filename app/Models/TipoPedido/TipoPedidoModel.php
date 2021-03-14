<?php

namespace App\Models\TipoPedido;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPedidoModel extends Model
{
    protected $table='tipo_pedido';
    protected $fillable=['tipo_pedido'];



    /*public function pedidos(){
        return $this->hasOne('App\Models\Pedido\PedidoModel');

    }*/
    public function pedido(){
        return $this->hasMany('App\Models\Pedido\PedidoModel');

    }

}
