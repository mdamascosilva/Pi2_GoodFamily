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

        return view('/Auth/registrar', ['opcao' => $opcao]);
    }

    public function registrar(RegistroRequest $request, string $opcao){
        $user = User::create([
            'name' => $request->get('nome'),
            'email' => $request->get('email'),
            'user_type' => $opcao,
            'password' => Hash::make($request->get('password')),
        ]);

        if ($opcao == "beneficiario"){
            return redirect('/beneficiario/cadastrar/' .$user->id );
           
        } else if ($opcao == "apoiador"){
            return redirect('/apoiador/cadastrar/'.$user->id );
        }
    }

    public function alterarSenha(){

        return view('/Auth/senha', ['user' => Auth::user()]);
    }

    public function gravarNovaSenha(SenhaRequest $request){

        $user = User::findOrFail(Auth::id());

        $credentials = $request->only('email', 'password');


        if ((Auth::attempt($credentials)) && 
        $request->get('new_password') == $request->get('confirm_password')){

            $user->password = Hash::make($request->get('new_password'));
            $user->update();
            return view('/index', ['mensagem' => 'Senha alterada com sucesso']);
            
        } else {
            return view('/Auth/senha', ['user' => Auth::user(), 'mensagem' => 'Erro ao gravar senha, favor tentar novamente']);
        }
    }
}