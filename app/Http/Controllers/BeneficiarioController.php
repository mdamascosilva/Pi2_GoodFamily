<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeneficiarioRequest;
use App\Models\Beneficiario;
use App\Models\Cidade;
use App\Models\Bairro;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class BeneficiarioController extends Controller
{
    public function cadastro($id){
        $user = User::findOrFail($id);
        return view('/Beneficiarios/cadastrar', ['user' => $user] );
    }

    public function gravar($id, BeneficiarioRequest $request, Beneficiario $beneficiario){
        $user = User::findOrFail($id);
        $beneficiario->id = $user->id;
        $beneficiario->nome = $request->get('nome');
        $beneficiario->cpf = $request->get('cpf');
        $beneficiario->telefone = $request->get('telefone');
        $beneficiario->endereco = $request->get('endereco');
        $beneficiario->bairro = $request->get('bairro');
        $beneficiario->cidade = $request->get('cidade');
        $beneficiario->estado = $request->get('estado');
        $beneficiario->cep = $request->get('cep');
        $beneficiario->save();

        return view('index', ['mensagem' => 'Beneficiário criado com sucesso! ' . $beneficiario->id . 'Usuario ' . $user->id]);
    }

    public function alterar(RegioesController $regioesController){
        $id = Auth::id();
        $beneficiario = Beneficiario::findOrFail($id);
        $uf = $beneficiario->estado;
        $cidade = $beneficiario->cidade;
        return view('/Beneficiarios/alterar', [ 'beneficiario' => $beneficiario, 
                                                'cidades' => $regioesController->cidades($uf), 
                                                'bairros' => $regioesController->bairros($cidade) ]);
    }

    public function atualizar( BeneficiarioRequest $request, Beneficiario $beneficiario){

        $id = Auth::id();
        $beneficiario = Beneficiario::find($id);

        $beneficiario->nome = $request->get('nome');
        $beneficiario->cpf = $request->get('cpf');
        $beneficiario->telefone = $request->get('telefone');
        $beneficiario->endereco = $request->get('endereco');
        $beneficiario->bairro = $request->get('bairro');
        $beneficiario->cidade = $request->get('cidade');
        $beneficiario->estado = $request->get('estado');
        $beneficiario->cep = $request->get('cep');
        $beneficiario->update();

        return view("index", ['mensagem' => 'Beneficiário alterado com sucesso!']);
    }

    public function excluir($id, Beneficiario $beneficiario){
        $beneficiario = Beneficiario::find($id);
        $beneficiario->delete();

        return view('index', ['mensagem' => 'Beneficiário excluído com sucesso!']);
    }

    public function listar(){
        return view('/Beneficiarios/listar', array('beneficiarios' => Beneficiario::all()));
    }

    public function consultar(){
        $id = Auth::id();

        return view('/Beneficiarios/consultar', ['beneficiario' => Beneficiario::findOrFail($id)]);
    }
}
