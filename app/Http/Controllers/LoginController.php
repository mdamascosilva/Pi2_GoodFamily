<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
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

    public function login(){
        return view('/Auth/login');
    }

    public function autenticar(LoginRequest $request){

        $credentials = $request->only('email', 'password');
        $remember = $request->get('remember');

        if (Auth::attempt($credentials, $remember)){
            return redirect('/');
        } else {
            echo "Erro no login";
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
}