<?php

namespace App\Services;

use App\Http\Requests\NecessidadeRequest;
use App\Models\Apoiador;
use App\Models\Necessidade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NecessidadeService
{

    public function salvar(NecessidadeRequest $request): Necessidade
    {
        $necessidade = new Necessidade();
        $necessidade = $this->getNecessidade($necessidade, $request);
        $necessidade->saveOrFail();

        return $necessidade;
    }

    public function atualizar(int $id, NecessidadeRequest $request): Necessidade
    {
        $necessidade = Necessidade::find($id);
        $necessidade = $this->getNecessidade($necessidade, $request);
        $necessidade->saveOrFail();

        return $necessidade;
    }

    function getNecessidade(Necessidade $necessidade, NecessidadeRequest $request): Necessidade
    {
        $necessidade->categoria_id = $request->get('categoria_id');
        $necessidade->beneficiario_id = Auth::id();
        $necessidade->descricao = $request->get('descricao');
        $necessidade->status_necessidade = 'aberto';

        return $necessidade;
    }

    public function listarNecessidadesDoBeneficiario()
    {
        return DB::table('necessidades')
            ->where('beneficiario_id', Auth::id())
            ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
            ->select(
                'necessidades.id as id',
                'necessidades.descricao as descricao',
                'categoria_necessidades.categoria as categoria',
                'categoria_necessidades.id as categoria_id'
            )
            ->get();
    }

    public function buscarNecessidadesProximoAoApoiador(Apoiador $apoiador)
    {
        return DB::table('necessidades')
        ->where('beneficiarios.ddd', 'like', $apoiador->ddd)
        ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
        ->join('beneficiarios', 'necessidades.beneficiario_id', '=', 'beneficiarios.id')
        ->select(
            'necessidades.id as id',
            'necessidades.descricao as descricao',
            'categoria_necessidades.categoria as categoria',
            'beneficiarios.cidade as cidade',
            'beneficiarios.bairro as bairro',
        )
        ->limit(10)
        ->get();
    }

    public function pesquisarNecessidades($categoria, $cidade, $bairro)
    {
        return DB::table('necessidades')
            ->where('categoria_necessidades.id', 'like' , $categoria)
            ->where('beneficiarios.cidade', 'like' , $cidade . '%' )
            ->where('beneficiarios.bairro', 'like' , $bairro . '%' )
            ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
            ->join('beneficiarios', 'necessidades.beneficiario_id', '=', 'beneficiarios.id')
            ->select(
                'necessidades.id as id',
                'necessidades.descricao as descricao',
                'categoria_necessidades.categoria as categoria',
                'beneficiarios.cidade as cidade',
                'beneficiarios.bairro as bairro',
            )
            ->limit(10)
            ->get();
    }

    function detalhesNecessidade(int $id){
        return DB::table('necessidades')
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
    }

    function buscarNumerosParaGrafico(){
        $numBeneficiario = DB::table('beneficiarios')
            ->count();
        $numApoiadores = DB::table('apoiadors')
            ->count();
        $necessidadesAbertas = DB::table('necessidades')
            ->where('status_necessidade', 'aberto')
            ->count();
        
        return array(
            'beneficiarios' => $numBeneficiario,
            'apoiadores' => $numApoiadores,
            'necessidadesAbertas' => $necessidadesAbertas
        );
    }

    function buscarNecessidadesAleatorias(){
        return DB::table('necessidades')
        ->where('status_necessidade', 'aberto')
        ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
        ->join('beneficiarios', 'necessidades.beneficiario_id', '=', 'beneficiarios.id')
        ->select(
            'necessidades.id as id',
            'necessidades.descricao as descricao',
            'categoria_necessidades.categoria as categoria',
            'beneficiarios.cidade as cidade',
            'beneficiarios.bairro as bairro',
        )
        ->inRandomOrder()
        ->limit(5)
        ->get();
    }
}
