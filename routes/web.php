<?php

use App\Http\Controllers\ApoiadorController;
use App\Http\Controllers\AtendimentoController;
use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NecessidadeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('/noticias', [IndexController::class, 'noticias']);

Route::get('/contato', [IndexController::class, 'contato']);

Route::get('/quem-somos', [IndexController::class, 'quemSomos']);



Route::get('/registrar/{opcao}', [UserController::class, 'registro']);

Route::post('/registrar/{opcao}', [UserController::class, 'registrar']);



Route::get('/login', [LoginController::class, 'login']);

Route::post('/login', [LoginController::class, 'autenticar']);

Route::get('/logout', [LoginController::class, 'logout']);



Route::get('/senha', [UserController::class, 'alterarSenha']);

Route::post('/senha', [UserController::class, 'gravarNovaSenha']);



Route::get('/beneficiario/cadastrar', [BeneficiarioController::class, 'cadastro']);

Route::post('/beneficiario/cadastrar', [BeneficiarioController::class, 'gravar']);

Route::get('/beneficiario/alterar', [BeneficiarioController::class, 'alterar']);

Route::post('/beneficiario/alterar', [BeneficiarioController::class, 'atualizar']);

Route::get('/beneficiario/historia', [BeneficiarioController::class, 'alterarHistoria']);

Route::post('/beneficiario/historia', [BeneficiarioController::class, 'gravarHistoria']);

Route::delete('/beneficiario/excluir', [BeneficiarioController::class, 'excluir']);

Route::get('/beneficiario/consultar', [BeneficiarioController::class, 'consultar']);

//Route::get('/beneficiario/listar', [BeneficiarioController::class, 'listar']);



Route::get('/apoiador/cadastrar', [ApoiadorController::class, 'cadastro']);

Route::post('/apoiador/cadastrar', [ApoiadorController::class, 'gravar']);

Route::get('/apoiador/alterar', [ApoiadorController::class, 'alterar']);

Route::post('/apoiador/alterar', [ApoiadorController::class, 'atualizar']);

Route::delete('/apoiador/excluir', [ApoiadorController::class, 'excluir']);

Route::get('/apoiador/consultar', [ApoiadorController::class, 'consultar']);

//Route::get('/apoiador/listar', [ApoiadorController::class, 'listar']);



Route::get('/necessidades/cadastrar', [NecessidadeController::class, 'cadastro']);

Route::post('/necessidades/cadastrar', [NecessidadeController::class, 'gravar']);

Route::get('/necessidades/alterar/{id}', [NecessidadeController::class, 'alterar']);

Route::post('/necessidades/alterar/{id}', [NecessidadeController::class, 'atualizar']);

Route::delete('/necessidades/excluir/{id}', [NecessidadeController::class, 'excluir']);

Route::get('/necessidades/listar', [NecessidadeController::class, 'listarNecessidadesDoBeneficiario']);

Route::get('/necessidades/consultar', [NecessidadeController::class, 'consultar']);

Route::get('/necessidades/pesquisar-necessidades', [NecessidadeController::class, 'pesquisarNecessidades']);

Route::get('/necessidades/consultar/{id}', [NecessidadeController::class, 'detalhes']);



Route::post('/atendimentos/iniciar/{idNecessidade}', [AtendimentoController::class, 'atender']);

Route::get('/atendimentos/listar', [AtendimentoController::class, 'listar']);

Route::get('/atendimentos/consultar/{id}', [AtendimentoController::class, 'consultar']);

Route::get('/atendimentos/finalizar/{id}', [AtendimentoController::class, 'descreverFinalizacao']);

Route::post('/atendimentos/finalizar/{id}', [AtendimentoController::class, 'finalizar']);

Route::delete('/atendimentos/cancelar/{id}', [ AtendimentoController::class, 'cancelar']);