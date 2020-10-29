<?php

namespace App\Http\Controllers;

use App\Http\Requests\NecessidadeRequest;
use App\Models\CategoriaNecessidade;
use App\Models\Necessidade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NecessidadeController extends Controller
{
    #get(envio do formulario)
    public function cadastro(){
        
        $categoria = new CategoriaNecessidade();
        return view('/Necessidades/cadastrar', ['categoria' => $categoria::all()]);
    }

    #post(formulario preenchido)
    public function gravar(Request $request, Necessidade $necessidade){

        $id = Auth::id();
        $necessidade->beneficiario_id = $id;
        $necessidade->categoria_id = $request->get('categoria_id');
        $necessidade->descricao = $request->get('descricao');
        $necessidade->status_necessidade = "Aberto";
        $necessidade->save();

        return view('index', ['mensagem' => 'Necessidade criada com sucesso! ']);
    
    }

    #get(envio do alteração formulario)
    public function alterar(){

    }

    #post(gravar alteração formulario)
    public function atualizar( Request $request, Necessidade $necessidade){

    }

    public function excluir($id, Necessidade $necessidade){

    }

    #lista todos os casos
    public function listar(){

    }

    #consulta especifica
    public function consultar(){

    }


    




}
