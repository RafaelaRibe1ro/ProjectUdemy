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

// Route::get('/', function () {
//     return 'Welcome';
// });

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class, 'sobreNos']);
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato']);
Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', function(
    $nome = 'Nome não informado', 
    $categoria = 'Categoria não informada', 
    $assunto = 'Assunto não informado', 
    $mensagem = 'Mensagem não informada' 
){
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});