<?php

namespace App\Http\Controllers;

use App\Http\Requests\CriarBeneficiarioRequest;
use App\Models\Beneficiario;

class BeneficiarioController extends Controller
{
    public function cadastro(){
        return view('/Beneficiarios/cadastrar');
    }

    public function gravar(CriarBeneficiarioRequest $request, Beneficiario $beneficiario){
        
        $beneficiario->nome = $request->get('nome');
        $beneficiario->cpf = $request->get('cpf');
        $beneficiario->telefone = $request->get('telefone');
        $beneficiario->endereco = $request->get('endereco');
        $beneficiario->cidade = $request->get('cidade');
        $beneficiario->estado = $request->get('estado');
        $beneficiario->cep = $request->get('cep');
    
        $beneficiario->save();
        
        echo "Sua mensagem foi armazenada com sucesso! Código: " . $beneficiario->id;
    }

    public function alterar($id){
        return view('/Beneficiarios/alterar', ['beneficiario' => Beneficiario::findOrFail($id)]);
    }

    public function atualizar($id, CriarBeneficiarioRequest $request, Beneficiario $beneficiario){

        $beneficiario = Beneficiario::find($id);

        $beneficiario->nome = $request->get('nome');
        $beneficiario->cpf = $request->get('cpf');
        $beneficiario->telefone = $request->get('telefone');
        $beneficiario->endereco = $request->get('endereco');
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

    public function consultar($id){
        return view('/Beneficiarios/consultar', ['beneficiario' => Beneficiario::findOrFail($id)]);
    }
}
