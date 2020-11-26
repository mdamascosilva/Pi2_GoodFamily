<?php

namespace App\Http\Controllers;

use App\Http\Requests\NecessidadeRequest;
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
    public function listar()
    {

        $necessidades = DB::table('necessidades')
            ->where('beneficiario_id', Auth::id())
            ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
            ->select(
                'necessidades.id as id',
                'necessidades.descricao as descricao',
                'categoria_necessidades.categoria as categoria',
                'categoria_necessidades.id as categoria_id'
            )
            ->get();
        return view('Necessidades.listar', compact('necessidades'));
    }

    #consulta especifica
    public function consultar()
    {
        $categorias = CategoriaNecessidade::all();
        return view('Necessidades.consultar', compact('categorias'));
    }

    public function buscarNecessidades()
    {
        return DB::table('necessidades')
        //->where('beneficiario_id', Auth::id())
        ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
        ->join('beneficiarios', 'necessidades.beneficiario_id', '=', 'beneficiarios.id')
        ->select(
            'necessidades.id as id',
            'necessidades.descricao as descricao',
            'categoria_necessidades.categoria as categoria',
            'beneficiarios.cidade as cidade',
            'beneficiarios.bairro as bairro',
        )
        ->get();
    }

    public function detalhes(int $id)
    {
        $necessidades = DB::table('necessidades')
            ->where('necessidades.id', $id)
            ->join('beneficiarios', 'necessidades.beneficiario_id', '=', 'beneficiarios.id')
            ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
            ->select(
                'necessidades.id as id',
                'categoria_necessidades.categoria as categoria',
                'necessidades.descricao as descricao',
                'beneficiarios.nome as nome',
                'beneficiarios.telefone as telefone',
                'beneficiarios.cidade as cidade',
                'beneficiarios.bairro as bairro',
                'beneficiarios.rua as rua',
                'beneficiarios.complemento_endereco as complemento_endereco',
                'beneficiarios.historia as historia'
            )
            ->get();

        return view('Necessidades.detalhes', compact('necessidades'));
    }
}
