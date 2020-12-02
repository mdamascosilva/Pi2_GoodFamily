<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Http\Requests\SenhaRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */

    public function registro(string $opcao){
        if (Auth::check()){
            return redirect()->route('index');
        } else {
            return view('Auth.registrar', ['opcao' => $opcao]);
        }
    }

    public function registrar(RegistroRequest $request, string $opcao){
        $user = User::create([
            'nome' => $request->get('nome'),
            'email' => $request->get('email'),
            'user_type' => $opcao,
            'password' => Hash::make($request->get('password')),
        ]);
        
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);

        return redirect('/'. $user->user_type .'/cadastrar');
    }

    public function alterarSenha(Request $request){
        $mensagem = $request->session()->get('mensagem');
        return view('Auth.senha', compact('mensagem'));
    }

    public function gravarNovaSenha(SenhaRequest $request){

        $user = User::findOrFail(Auth::id());

        $credentials = [
            'email' => $user->email,
            'password' => $request->get('password')
        ];

        if ((Auth::attempt($credentials)) && 
        $request->get('new_password') == $request->get('confirm')){

            $user->password = Hash::make($request->get('new_password'));
            $user->update();

            $request->session()->flash(
                'mensagem',
                'Senha alterada com sucesso!'
            );
            return redirect()->route('index');
            
        } else {

            $request->session()->flash(
                'mensagem',
                'Erro ao gravar nova senha, favor tentar novamente'
            );
            return redirect("/senha");
        }
    }
}