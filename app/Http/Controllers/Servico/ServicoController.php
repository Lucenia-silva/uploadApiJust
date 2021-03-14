<?php

namespace App\Http\Controllers\Servico;

use App\Http\Controllers\Controller;
use App\Models\Servico\ServicoModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class ServicoController extends Controller
{

    public function index()
    {
        $servicos = DB::table('servico')->get();

        return view('painel.servico.listar', ['servicos' => $servicos]);
    }

    public function novoservico()
    {
        return view('painel.servico.novo');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'taxa' => 'required',
            'descricao' => 'required'

        ]);

        ServicoModel::create([
            'nome' => $request->nome,
            'taxa' => $request->taxa,
            'descricao' => $request->descricao,
        ]);
        return redirect()->route('listarservico');
    }

    public function show($id)
    {
        $servicos = new ServicoModel();
        $servicos = ServicoModel::findOrFail($id);
        return response()->json($servicos);
    }

    public function formEditarServico($id)
    {
        $servicos = ServicoModel::findOrFail($id);
        return view('painel.servico.editar',['servico' => $servicos]);
    }

    public function update(Request $request, $id)
    {
        $servicos = ServicoModel::findOrFail($id);
        $servicos->update($request->all());
        return redirect()->route('listarservico');
    }

    public function delete($id)
    {
        $servicos = ServicoModel::findOrFail($id);
        if ($servicos->delete()) {
            return redirect()->route('listarservico');
        }
    }
}
