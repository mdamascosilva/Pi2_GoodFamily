<?php

namespace App\Services;

use App\Models\Atendimento;
use App\Models\Necessidade;
use DateTime;
use Illuminate\Support\Facades\DB;

class AtendimentoService
{

    public function atender(int $idNecessidade, int $idApoiador): Atendimento {
        $atendimento = new Atendimento();
        $necessidade = Necessidade::findOrFail($idNecessidade);

        $atendimento->necessidade_id = $idNecessidade;
        $atendimento->apoiador_id = $idApoiador;
        $necessidade->status_necessidade = 'pendente';

        $atendimento->saveOrFail();

        $necessidade->atendimento_id = $atendimento->id;
        $necessidade->saveOrFail();

        return $atendimento;
    }

    public function listar($idApoiador){

        return DB::table('atendimentos')
            ->where('apoiador_id', $idApoiador)
            ->where('necessidades.status_necessidade', 'pendente')
            ->join('necessidades', 'atendimentos.necessidade_id', '=', 'necessidades.id')
            ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
            ->join('beneficiarios', 'necessidades.beneficiario_id', '=', 'beneficiarios.id')
            ->select(
                'atendimentos.id as id',
                'atendimentos.created_at as inicio_atendimento',
                'necessidades.descricao as descricao',
                'categoria_necessidades.categoria as categoria',
                'beneficiarios.cidade as cidade',
                'beneficiarios.bairro as bairro',
                'beneficiarios.rua as rua',
                'beneficiarios.complemento_endereco as complemento_endereco'
            )
            ->get();

    }

    public function consultar($id){
        return DB::table('atendimentos')
        ->where('atendimentos.id', $id)
        ->join('necessidades', 'atendimentos.necessidade_id', '=', 'necessidades.id')
        ->join('beneficiarios', 'necessidades.beneficiario_id', '=', 'beneficiarios.id')
        ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
        ->select(
            'atendimentos.id as id',
            'atendimentos.created_at as inicio_atendimento',
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

    public function finalizar(int $id, string $descricao) : Atendimento{
        $atendimento = Atendimento::findOrFail($id);
        $necessidade = Necessidade::findOrFail($atendimento->necessidade_id);

        $atendimento->descricao = $descricao;
        $atendimento->fim_atendimento = new DateTime('now');
        $necessidade->status_necessidade = 'encerrado';

        $atendimento->saveOrFail();
        $necessidade->saveOrFail();

        return $atendimento;
    }

    public function cancelar(int $id){
        $atendimento = Atendimento::findOrFail($id);
        $necessidade = Necessidade::findOrFail($atendimento->necessidade_id);
        $necessidade->status_necessidade = 'aberto';
        $necessidade->atendimento_id = null;
        
        $atendimento->delete();
        $necessidade->saveOrFail();
    }
}
