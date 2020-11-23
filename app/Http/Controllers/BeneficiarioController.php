<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeneficiarioRequest;
use App\Models\Beneficiario;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Services\BeneficiarioService;
use Illuminate\Http\Request;

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
            'Cadastro do beneficiário ' . $beneficiario->nome . ' foi feita com sucesso!'
        );
        return redirect('/beneficiario/historia');
    }

    public function alterar(){
        $beneficiario = Beneficiario::findOrFail(Auth::id());
        return view('/Beneficiarios/alterar', compact('beneficiario'));
    }

    public function atualizar( BeneficiarioRequest $request , BeneficiarioService $beneficiarioService){
        
        echo $request;
        $beneficiarioService->atualizar( Auth::id() , $request );
        $request->session()->flash(
            'mensagem',
            'Dados atualizados com sucesso!'
        );
        return redirect()->route('index');
    }


    public function alterarHistoria(){
        $beneficiario = Beneficiario::find(Auth::id());
        return view("Beneficiarios.historia", ['historia' => $beneficiario->historia]);
    }

    public function gravarHistoria(Request $request){
        $beneficiario = Beneficiario::find(Auth::id());
        $beneficiario->historia = $request->get('historia');
        $beneficiario->save();
        $request->session()->flash(
            'mensagem',
            'História salva com sucesso!'
        );
        return redirect()->route('index');
    }


    public function excluir(Request $request, Beneficiario $beneficiario){
        $id = Auth::id();

        $beneficiario = Beneficiario::find($id);
        $user = User::find($id);
        
        $beneficiario->delete();
        $user->delete();

        Auth::logout();
        $request->session()->flash(
            'mensagem',
            'Conta de beneficiário excluída'
        );
        return redirect()->route('index');
    }

    public function listar(){
        return view('/Beneficiarios/listar', array('beneficiarios' => Beneficiario::all()));
    }

    public function consultar(){
        $id = Auth::id();

        return view('/Beneficiarios/consultar', ['beneficiario' => Beneficiario::findOrFail($id)]);
    }
}
