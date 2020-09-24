<?php

use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/beneficiario/cadastrar/{id}', [BeneficiarioController::class, 'cadastro']);

Route::post('/beneficiario/cadastrar/{id}', [BeneficiarioController::class, 'gravar']);

Route::get('/beneficiario/alterar', [BeneficiarioController::class, 'alterar']);

Route::post('/beneficiario/alterar', [BeneficiarioController::class, 'atualizar']);

Route::post('/beneficiario/excluir', [BeneficiarioController::class, 'excluir']);

Route::get('/beneficiario/consultar', [BeneficiarioController::class, 'consultar']);

Route::get('/beneficiario/listar', [BeneficiarioController::class, 'listar']);

Route::get('/apoiador/cadastrar/{id}', function () {
    return view('/Apoiadores/cadastrar');
});

Route::get('/login', [LoginController::class, 'login']);

Route::post('/login', [LoginController::class, 'autenticar']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/senha', [UserController::class, 'alterarSenha']);

Route::post('/senha', [UserController::class, 'gravarNovaSenha']);

Route::get('/registrar/{opcao}', [UserController::class, 'registro']);

Route::post('/registrar/{opcao}', [UserController::class, 'registrar']);