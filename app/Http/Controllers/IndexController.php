<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
 
            $mensagem = $request->session()->get('mensagem');
            return view('index', compact('user', 'mensagem'));
        
    }

    public function apoiadorIndex(Request $request){
        $user = Auth::user();
        $mensagem = $request->session()->get('mensagem');
        return view('index', compact('user', 'mensagem'));
    }

    public function noticias(){
        return view('noticias.noticia');
    }

    public function contato(){
        return view('outros.contato');
    }

    public function quemSomos(){
        return view('outros.quem_somos');
    }
}
