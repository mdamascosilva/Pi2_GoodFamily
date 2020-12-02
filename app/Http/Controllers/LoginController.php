<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Apoiador;
use App\Models\Beneficiario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */

    public function login(string $opcao, Request $request){
        $mensagem = $request->session()->get('mensagem');
        return view('Auth.login', compact('opcao', 'mensagem'));
    }

    public function autenticar( string $opcao, LoginRequest $request){

        $credentials = $request->only('email', 'password');
        $remember = $request->get('remember');

        if (Auth::attempt($credentials, $remember)){
            $user = Auth::user();

            if (Beneficiario::find($user->id) || Apoiador::find($user->id)){
                return redirect('/');
            } else {
                return view('Auth.cadastro_incompleto', ['user' => $user]);
            }

        } 

        $request->session()->flash(
            'mensagem',
            'Erro ao efetuar o login, favor tentar novamente'
        );
        return redirect("/login/$opcao");
    }

    public function remember(){
        if (Auth::viaRemember()) {
            //
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function finalizarCadastro(){
        $user = Auth::user();
        return redirect('/'. $user->user_type .'/cadastrar' );
    }
}