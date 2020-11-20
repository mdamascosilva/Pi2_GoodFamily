<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Apoiadores;
use App\Models\Beneficiario;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */

    public function login(){
        return view('/Auth/login');
    }

    public function autenticar(LoginRequest $request){

        $credentials = $request->only('email', 'password');
        $remember = $request->get('remember');

        if (Auth::attempt($credentials, $remember)){
            $user = Auth::user();

            if (Beneficiario::find($user->id) || Apoiadores::find($user->id)){
                return redirect('/');
            } else {
                return view('/Auth/cadastro_incompleto', ['user' => $user]);
            }

        } else {
            return view('/Auth/login', ['mensagem' => 'Erro ao efetuar o login, favor tentar novamente']);
        }
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