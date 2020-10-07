<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApoiadoresRequest;
use App\Models\Apoiadores;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApoiadoresController extends Controller
{
    public function cadastro($id){
        $user = User::findOrFail($id);
        return view('/Apoiadores/cadastrar', ['user' => $user] );
    }

    public function gravar($id, ApoiadoresRequest $request, Apoiadores $apoiador){
        $user = User::findOrFail($id);
        $apoiador->id = $user->id;
        $apoiador->nome = $request->get('nome');
        $apoiador->cpf = $request->get('cpf');
        $apoiador->telefone = $request->get('telefone');
        $apoiador->endereco = $request->get('endereco');
        $apoiador->bairro = $request->get('bairro');
        $apoiador->cidade = $request->get('cidade');
        $apoiador->estado = $request->get('estado');
        $apoiador->cep = $request->get('cep');
        $apoiador->save();

        return view('index', ['mensagem' => 'Apoiador criado com sucesso! ' . $apoiador->id . 'Usuario ' . $user->id]);
    }

    public function alterar(RegioesController $regioesController){
        $id = Auth::id();
        $apoiador = Apoiadores::findOrFail($id);
        $uf = $apoiador->estado;
        $cidade = $apoiador->cidade;
        return view('/Apoiadores/alterar', [ 'apoiador' => $apoiador, 
                                                'cidades' => $regioesController->cidades($uf), 
                                                'bairros' => $regioesController->bairros($cidade) ]);
    }

    public function atualizar( ApoiadoresRequest $request, Apoiadores $apoiador){

        $id = Auth::id();
        $apoiador = Apoiadores::find($id);

        $apoiador->nome = $request->get('nome');
        $apoiador->cpf = $request->get('cpf');
        $apoiador->telefone = $request->get('telefone');
        $apoiador->endereco = $request->get('endereco');
        $apoiador->bairro = $request->get('bairro');
        $apoiador->cidade = $request->get('cidade');
        $apoiador->estado = $request->get('estado');
        $apoiador->cep = $request->get('cep');
        $apoiador->update();

        return view("index", ['mensagem' => 'Apoiador alterado com sucesso!']);
    }

    public function excluir($id, Apoiadores $apoiador){
        $apoiador = Apoiadores::find($id);
        $apoiador->delete();

        return view('index', ['mensagem' => 'Apoiador excluído com sucesso!']);
    }

    public function listar(){
        return view('/Apoiadores/listar', array('apoiadores' => Apoiadores::all()));
    }

    public function consultar(){
        $id = Auth::id();

        return view('/Apoiadores/consultar', ['apoiador' => Apoiadores::findOrFail($id)]);
    }
}