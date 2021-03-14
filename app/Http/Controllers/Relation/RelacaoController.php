<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servico\ServicoModel;
use App\Models\Cliente\ClienteModel;
use App\Models\Localizacao\LocalizacaoModel;
use App\Models\Pedido\PedidoModel;
use App\Models\TipoPedido\TipoPedidoModel;

class RelacaoController extends Controller
{

//RELACAO PEDIDOS PEDIDO/1POR MUITOS
        public function index($id){
        /* $cliente=ClienteModel::find(1);



        return response()->json($cliente);

        $servico=ServicoModel::find(1);
        echo $cliente->cliente.'<br>';*/



        $pedidos = PedidoModel::find($id);
        dd($pedidos);

    }


    /*public function umpormuito($id)
    {
        $vpedido = PedidoModel::find(4);
        return response()->json($vpedido);
    }*/

    //RELACAO SERVICO CLIENTE

    public function clientes($id)
    {
        $cliente = ClienteModel::find($id);
        $servicos = $cliente->servicos;


        return response()->json($servicos);
        /*return
        echo'<h3>'.$cliente->nome_empresa.'</h3>';

        echo '<ul>';

        foreach ($servicos as $s) {

            echo'<li>'.$s->nome.'</li>';
        }

        echo'</ul>';*/
    }

    public function servicos($id)
    {
        $servicos = ServicoModel::find($id);
        $clientes = $servicos->clientes;

        $servicos->save();

        return response()->json($clientes);
    }


    //RELACAO CLIENTE LOCALIZACAO


    public function locals($id)
        {

            $local=LocalizacaoModel::find($id);
            dd($local);
        }

}
