<?php

namespace App\Http\Controllers\Pedido;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pedido\PedidoModel;

class PedidoController extends Controller
{

    public function index()
    {
        $pedidos = DB::table('pedido')->get();

        return view('painel.pedido.listar', ['pedidos' => $pedidos]);
    }

    public function novopedido()
    {
        return view('painel.pedido.novo');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'valor' => 'required',
            'id_tipo_pedido' => 'required',
            'id_servico' => 'required',
            'id_pagamento' => 'required',


        ]);

        PedidoModel::create([
            'valor' => $request->valor,
            'id_tipo_pedido' => $request->id_tipo_pedido,
            'id_servico' => $request->id_servico,
            'id_pagamento' => $request->id_pagamento,

        ]);
        return redirect()->route('listarpedido');
    }

    public function show($id)
    {
        $pedidos = new PedidoModel();
        $pedidos = PedidoModel::findOrFail($id);
        return response()->json($pedidos);
    }

    public function formEditarPedido($id)
    {
        $pedidos = PedidoModel::findOrFail($id);
        return view('painel.pedido.editar', ['pedido' => $pedidos]);
    }

    public function update(Request $request, $id)
    {
        $pedidos = PedidoModel::findOrFail($id);
        $pedidos->update($request->all());
        return redirect()->route('listarpedido');
    }

    public function delete($id)
    {
        $pedidos = PedidoModel::findOrFail($id);
        if ($pedidos->delete()) {
            return redirect()->route('listarpedido');
        }
    }
}


