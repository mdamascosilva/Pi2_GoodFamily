<?php

namespace App\Http\Controllers;

use App\Http\Requests\NecessidadeRequest;
use App\Models\Apoiador;
use App\Models\CategoriaNecessidade;
use App\Models\Necessidade;
use App\Models\User;
use App\Services\NecessidadeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NecessidadeController extends Controller
{
    #get(envio do formulario)
    public function cadastro()
    {
        $categorias = CategoriaNecessidade::all();
        return view('Necessidades.cadastrar', compact('categorias'));
    }

    #post(formulario preenchido)
    public function gravar(NecessidadeRequest $request, NecessidadeService $necessidadeService)
    {

        $necessidadeService->salvar($request);

        $request->session()->flash(
            'mensagem',
            'Necessidade criada com sucesso!'
        );
        return redirect()->route('index');
    }

    #get(envio do alteração formulario)
    public function alterar($id)
    {
        $necessidade = Necessidade::findOrFail($id);
        $categorias = CategoriaNecessidade::all();
        return view('Necessidades.alterar', compact(['necessidade', 'categorias']));
    }

    #post(gravar alteração formulario)
    public function atualizar($id, NecessidadeRequest $request, NecessidadeService $necessidadeService)
    {

        $necessidadeService->atualizar($id, $request);
        $request->session()->flash(
            'mensagem',
            'Dados atualizados com sucesso!'
        );
        return redirect()->route('index');
    }

    public function excluir(int $id, Request $request)
    {

        $necessidade = Necessidade::find($id);
        $necessidade->delete();

        $request->session()->flash(
            'mensagem',
            'Necessidade excluída com sucesso'
        );
        return redirect()->route('index');
    }

    #lista todos os casos
    public function listarNecessidadesDoBeneficiario(NecessidadeService $necessidadeService)
    {
        $necessidades = $necessidadeService->listarNecessidadesDoBeneficiario();
        return view('Necessidades.listar', compact('necessidades'));
    }

    #consulta especifica
    public function consultar()
    {
        $categorias = CategoriaNecessidade::all();
        return view('Necessidades.consultar', compact('categorias'));
    }

    public function pesquisarNecessidades(Request $request, NecessidadeService $necessidadeService)
    {
        return $necessidadeService->pesquisarNecessidades(
            $request->get('categoria'),
            $request->get('cidade'),
            $request->get('bairro')
        );
    }

    public function detalhes(int $id, NecessidadeService $necessidadeService)
    {
        $necessidades = $necessidadeService->detalhesNecessidade($id);
        return view('Necessidades.detalhes', compact('necessidades'));
    }
}
