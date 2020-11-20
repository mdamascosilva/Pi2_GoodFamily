<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeneficiarioRequest;
use App\Models\Beneficiario;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Services\BeneficiarioService;

class BeneficiarioController extends Controller
{
    public function cadastro(){
        $user = User::findOrFail(Auth::id());
        return view('Beneficiarios.cadastrar', compact('user'));
    }

    public function gravar(BeneficiarioRequest $request, BeneficiarioService $beneficiarioService){
        $user = User::findOrFail(Auth::id());
        $beneficiario = $beneficiarioService->salvar( $user->id, $request );
        $request->session()->flash(
            'mensagem',
            'Cadastro do beneficiário ' . $beneficiario->nome . ' foi criado com sucesso!'
        );
        return redirect('/beneficiario/historia');
    }

    public function alterar(){
        $id = Auth::id();
        $beneficiario = Beneficiario::findOrFail($id);
        return view('/Beneficiarios/alterar', [ 'beneficiario' => $beneficiario ]);
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


    public function alterarHistoria(){
        return view("Beneficiarios.historia");
    }

    public function gravarHistoria(){

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
