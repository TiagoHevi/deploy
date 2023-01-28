<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return 'ola mundo';
});
*/
//se a rota receber uma função de calback assim que essa rota for 
//chamada vai essecultar essa função
//********** */
//mas se nos colocar uma estring ele vai entender que nos estamos passando um controlador
//e uma ação que deve ser execultada
Route::get('/', 'PrincipalControler@principal')->name('site.index');
//os metodo nao vão chamar apenas um controlador 
//mas um metodo dentro dentro do controlador
//rotas que eu criei
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
//execultando a class contato controller masi especificamente o metodo salvar
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('/teste.portifoilo', 'testeCodigos@teste');
Route::get('/login', function() {return 'login';});


Route::prefix('/app')->group(function(){
    Route::get('/cliente', function() {return 'cliente';})->name('app.cliente');
    Route::get('/fornecedores', function() {return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function() {return 'produtos';})->name('app.produtos');
    
});










/*       aula 1
<?php

use Illuminate\Support\Facades\Route;


//raiz
Route::get('/', function () {
    return 'ola mundo';
});
//rotas que eu criei
Route::get('/sobre-nos', function () {
    return 'sobre nos';
});
//posso esta errado mas perceba que estamos usando o metodo get 
//ou seja os parametros informados aqui sao passados na url
Route::get('/contato', function () {
    return 'contato 1';
});

//pela esplicação da aula quando quando chamamoss o mtodo get que nos estmos pesanso 
//que e como se fosse o metodo get do formulario
//ou seja como chamamos esse metodo? ascessando a rota e aumaticamente quando fazemos isso vai chamar uma função de callback

//nao entendi muito bem sobre isso em tao eu vou definir 
//como uma função ou seja 
//aqui temos um objeto(que eu vou chamar de função por em quanto)
//e o metodo get que vai chamar
//essa função de callback quando a rota for ascessada
//Route::get($uri, $callback)

/* verbos http

get
post
put
patch
delete
options

fim aula 1*/