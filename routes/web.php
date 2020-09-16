<?php

use App\Http\Controllers\BeneficiarioController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/beneficiario/cadastrar', [BeneficiarioController::class, 'cadastro']);

Route::post('/beneficiario/cadastrar', [BeneficiarioController::class, 'gravar']);

Route::get('/beneficiario/alterar/{id}', [BeneficiarioController::class, 'alterar']);

Route::post('/beneficiario/alterar/{id}', [BeneficiarioController::class, 'atualizar']);

Route::post('/beneficiario/excluir/{id}', [BeneficiarioController::class, 'excluir']);

Route::get('/beneficiario/consultar/{id}', [BeneficiarioController::class, 'consultar']);

Route::get('/beneficiario/listar', [BeneficiarioController::class, 'listar']);