<?php

namespace App\Http\Controllers\Localizacao;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Localizacao\LocalizacaoModel;
use Illuminate\Http\Request;

class LocalizacaoController extends Controller
{


    public function index()
    {
        $locais = DB::table('localizacao')->get();

        return view('painel.local.listar', ['locais' => $locais]);
    }

    public function novolocal()
    {
        return view('painel.local.novo');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'pais' => 'required',
            'provincia' => 'required',
            'municipio' => 'required',
            'bairro' => 'required',


        ]);

        LocalizacaoModel::create([
            'pais' => $request->pais,
            'provincia' => $request->provincia,
            'municipio' => $request->municipio,
            'bairro' => $request->bairro,

        ]);
        return redirect()->route('listarlocal');
    }

    public function show($id)
    {
        $locais = new LocalizacaoModel();
        $locais = LocalizacaoModel::findOrFail($id);
        return response()->json($locais);
    }

    public function formEditarLocal($id)
    {
        $locais = LocalizacaoModel::findOrFail($id);
        return view('painel.local.editar', ['locais' => $locais]);
    }

    public function update(Request $request, $id)
    {
        $locais = LocalizacaoModel::findOrFail($id);
        $locais->update($request->all());
        return redirect()->route('listarlocal');
    }

    public function delete($id)
    {
        $locais = LocalizacaoModel::findOrFail($id);
        if ($locais->delete()) {
            return redirect()->route('listarlocal');
        }
    }

}








