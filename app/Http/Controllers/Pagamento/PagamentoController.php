<?php

namespace App\Http\Controllers\Pagamento;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pagamento\PagamentoModel;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{


    public function index()
    {
        $pagamentos = DB::table('pagamento')->get();

        return view('painel.pagamento.listar', ['pagamentos' => $pagamentos]);
    }

    public function novopagamento()
    {
        return view('painel.pagamento.novo');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'tipo_pagamento' => 'required',
            'id_cliente' => 'required',

        ]);

        PagamentoModel::create([
            'tipo_pagamento' => $request->tipo_pagamento,
            'id_cliente' => $request->id_cliente,
        ]);
        return redirect()->route('listar');
    }

    public function show($id)
    {
        $pagamentos = new PagamentoModel();
        $pagamentos = PagamentoModel::findOrFail($id);
        return response()->json($pagamentos);
    }

    public function formEditarPagar($id)
    {
        $pagamentos = PagamentoModel::findOrFail($id);
        return view('painel.pagamento.editar', ['pagamento' => $pagamentos]);
    }

    public function update(Request $request, $id)
    {
        $pagamentos = PagamentoModel::findOrFail($id);
        $pagamentos->update($request->all());
        return redirect()->route('listar');
    }

    public function delete($id)
    {
        $pagamentos = PagamentoModel::findOrFail($id);
        if ($pagamentos->delete()) {
            return redirect()->route('listar');
        }
    }



}

