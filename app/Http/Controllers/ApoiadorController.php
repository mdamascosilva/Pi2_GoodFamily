<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApoiadorRequest;
use App\Models\Apoiador;
use App\Models\User;
use App\Services\ApoiadorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApoiadorController extends Controller
{
    public function cadastro(){
        $user = User::findOrFail(Auth::id());
        return view('Apoiadores.cadastrar', compact('user') );
    }

    public function gravar(ApoiadorRequest $request, ApoiadorService $apoiadorService){
        $user = User::findOrFail(Auth::id());
        $apoiador = $apoiadorService->salvar( $user->id, $user->nome, $request );
        $request->session()->flash(
            'mensagem',
            'Cadastro do apoiador ' . $apoiador->nome . ' foi feita com sucesso!'
        );
        return redirect()->route('index');
    }

    public function alterar(){
        $apoiador = Apoiador::findOrFail(Auth::id());
        return view('Apoiadores.alterar', compact('apoiador'));
    }

    public function atualizar( ApoiadorRequest $request, ApoiadorService $apoiadorService){
        $apoiadorService->atualizar( Auth::id() , $request );
        $request->session()->flash(
            'mensagem',
            'Dados atualizados com sucesso!'
        );
        return redirect()->route('index');
    }

    public function excluir(Request $request){
        $id = Auth::id();

        $beneficiario = Apoiador::find($id);
        $user = User::find($id);
        
        $beneficiario->delete();
        $user->delete();

        Auth::logout();
        $request->session()->flash(
            'mensagem',
            'Conta de apoiador excluída'
        );
        return redirect()->route('index');
    }

    public function listar(){
        return view('/Apoiadores/listar', array('apoiadores' => Apoiador::all()));
    }

    public function consultar(){
        $id = Auth::id();

        return view('/Apoiadores/consultar', ['apoiador' => Apoiador::findOrFail($id)]);
    }
}