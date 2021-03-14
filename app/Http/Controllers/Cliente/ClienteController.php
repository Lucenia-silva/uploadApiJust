<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Cliente\ClienteModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = DB::table('cliente')->get();

        return view('painel.cliente.listar', ['clientes' => $clientes]);
    }

    public function novocliente()
    {
        return view('painel.cliente.novo');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nome_empresa' => 'required',
            'nif' => 'required',
            'telefone' => 'required',
            'logo' => 'required',
            'id_localizacao' => 'required',
            'id_servico' => 'required',




        ]);

        ClienteModel::create([
            'nome_empresa' => $request->nome_empresa,
            'nif' => $request->nif,
            'email'=>$request->email,
            'telefone' => $request->telefone,
            'logo' => $request->logo,
            'id_localizacao' => $request->id_localizacao,
            'id_servico' => $request->id_servico,



        ]);
        return redirect()->route('listarcliente');
    }

    public function show($id)
    {
        $clientes = new ClienteModel();
        $clientes = ClienteModel::findOrFail($id);
        return response()->json($clientes);
    }

    public function formEditarCliente($id)
    {
        $clientes = ClienteModel::findOrFail($id);
        return view('painel.cliente.editar', ['cliente' => $clientes]);
    }

    public function update(Request $request, $id)
    {
        $clientes = ClienteModel::findOrFail($id);
        $clientes->update($request->all());
        return redirect()->route('listarcliente');
    }

    public function delete($id)
    {
        $clientes = ClienteModel::findOrFail($id);
        if ($clientes->delete()) {
            return redirect()->route('listarcliente');
        }
    }
}
