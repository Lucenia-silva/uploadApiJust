<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Localizacao\LocalizacaoController;
use App\Http\Controllers\Pedido\PedidoController;
use App\Http\Controllers\Servico\ServicoController;
use App\Http\Controllers\Cliente\ClienteController;
use App\Http\Controllers\TipoPedido\TipoPedidoController;
use App\Http\Controllers\Relation\RelacaoController;
use App\Http\Controllers\Pagamento\PagamentoController;

use Illuminate\Routing\Route as RoutingRoute;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Dashboard\DashboardController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/servico/listar', [ServicoController::class, 'index'])->name('listarservico');

Route::get('/servico/novo', [ServicoController::class, 'novoservico'])->name('novo');

Route::post('/servico/store', [ServicoController::class, 'store'])->name('store_servico');

Route::get('/editar/{id}', [ServicoController::class, 'formEditarServico'])->name('editarservico');

Route::post('/servico/show/{id}', [ServicoController::class, 'show']);


Route::put('/editar/{id}', [ServicoController::class, 'update']);


Route::delete('/servico/delete/{id}', [ServicoController::class, 'delete'])->name('deleteservico');


/*ROTAS DOS CLIENTES
* Main: Cliente
*
*
*/

Route::get('/cliente/listar',[ClienteController::class,'index'])->name('listarcliente');

Route::get('/cliente/novo', [ClienteController::class, 'novocliente'])->name('novocliente');

Route::post('/cliente/store',[ClienteController::class,'store'])->name('store_cliente');

Route::get('/editarcliente/{id}', [ClienteController::class, 'formEditarCliente'])->name('editarcliente');


Route::post('cliente/show/{id}',[ClienteController::class,'show']);

Route::put('/clientupdate/{id}',[ClienteController::class,'update']);

Route::delete('/cliente/delete/{id}',[ClienteController::class,'delete'])->name('deletecliente');


//ROTAS DE LOCALIZACAO//


Route::get('/localizacao/listar', [LocalizacaoController::class,'index'])->name('listarlocal');

Route::get('/localizacao/novo', [LocalizacaoController::class,'novolocal'])->name('novolocal');


Route::post('/localizacao/store', [LocalizacaoController::class,'store'])->name('store_local');

Route::get('/editarlocal/{id}', [LocalizacaoController::class, 'formEditarLocal'])->name('editarlocal');


Route::post('/localizacao/show/{id}', [LocalizacaoController::class,'show']);

Route::put('/localizacao/update/{id}', [LocalizacaoController::class,'update']);

Route::delete('/localizacao/delete/{id}', [LocalizacaoController::class,'delete'])->name('deletelocal');

//ROTAS DOS TIPOS DE PEDIDO

Route::get('/tipo/listar',[TipoPedidoController::class,'index'])->name('listartipo');

Route::get('/tipo/novo', [TipoPedidoController::class,'novotipo'])->name('novotipo');

Route::post('/tipo/store',[TipoPedidoController::class,'store'])->name('store_tipo');

Route::get('/editartipo/{id}', [TipoPedidoController::class, 'formEditarTipo'])->name('editartipo');


Route::post('/tipo/show/{id}',[TipoPedidoController::class,'show']);

Route::post('/tipo/update{id}',[TipoPedidoController::class,'update']);

Route::delete('/tipo/delete/{id}',[TipoPedidoController::class,'delete'])->name('deletetipo');

//ROTAS DOS PEDIDOS
Route::get('/pedido/listar',[PedidoController::class,'index'])->name('listarpedido');

Route::get('/pedido/novo', [PedidoController::class,'novopedido'])->name('novopedido');


Route::post('/pedido/store',[PedidoController::class,'store'])->name('store_pedido');

Route::get('/editarpedido/{id}', [PedidoController::class, 'formEditarPedido'])->name('editarpedido');


Route::post('pedido/show/{id}',[PedidoController::class,'show']);

Route::put('/pedido/update/{id}',[PedidoController::class,'update']);

Route::delete('/pedido/delete/{id}',[PedidoController::class,'delete'])->name('deletepedido');


//RELACAO

Route::get('relation/index/{id}',[RelacaoController::class,'index']);

Route::get('relation/clie/{id}',[RelacaoController::class,'clientes']);

Route::get('relation/serv/{id}',[RelacaoController::class,'servicos']);

Route::get('relation/todos/{id}',[RelacaoController::class,'umpormuito']);

Route::get('relation/local/{id}',[RelacaoController::class,'locals']);


Route::get('teste', function() {
return view('dashboard.index');
});




//ROTAS DE PAGAMENTO
Route::get('/listar', [PagamentoController::class, 'index'])->name('listar');

Route::get('/pagamento/novo', [PagamentoController::class, 'novopagamento'])->name('novopagamento');

Route::post('/pagamento', [PagamentoController::class, 'store'])->name('store_pagar');

Route::get('/editarpagar/{id}', [PagamentoController::class, 'formEditarPagar'])->name('editarpagar');

Route::put('/pagamento/update{id}',[PagamentoController::class,'update']);

Route::post('/pagamento/show/{id}', [PagamentoController::class, 'show']);


Route::delete('/deletepagar/{id}',[PagamentoController::class,'delete'])->name('deletepagar');
