<?php

namespace App\Http\Controllers\TipoPedido;

use App\Http\Controllers\Controller;

use App\Models\TipoPedido\TipoPedidoModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TipoPedidoController extends Controller
{
    public function index()
    {
        $tipos = DB::table('tipo_pedido')->get();

        return view('painel.tipo.listar',['tipos' => $tipos]);

    }

    public function novotipo()
    {
        return view('painel.tipo.novo');
    }


    public function store(Request $request)
    {
    $this->validate($request, [
        'tipo_pedido' => 'required',

    ]);

    TipoPedidoModel::create([
        'tipo_pedido' => $request->tipo_pedido,

    ]);
    return view('painel.tipo.listar');
}


    public function show($id)
    {
        $tipos = new TipoPedidoModel();
        $tipos= TipoPedidoModel::findOrFail($id);
        return response()->json($tipos);
    }

    public function formEditarTipo($id)
    {
    $tipos = TipoPedidoModel::findOrFail($id);
    return view('painel.tipo.listar',['tipo' => $tipos]);
    }

public function update(Request $request,$id)
{
    $tipos = TipoPedidoModel::findOrFail($id);
    $tipos->update($request->all());
    return redirect()->route('listartipo');

}
    public function delete($id)
    {
        $tipos = TipoPedidoModel::findOrFail($id);
        if ($tipos->delete()) {
        return redirect()->route('listartipo');

        }
    }


}


