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
        Necessidade::findOrFail($idNecessidade);

        $atendimento->necessidade_id = $idNecessidade;
        $atendimento->apoiador_id = $idApoiador;

        $atendimento->saveOrFail();

        return $atendimento;
    }

    public function listar($idApoiador){

        return DB::table('atendimentos')
            ->where('apoiador_id', $idApoiador)
            ->join('necessidades', 'atendimentos.necessidade_id', '=', 'necessidades.id')
            ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
            ->join('beneficiarios', 'necessidades.beneficiario_id', '=', 'beneficiarios.id')
            ->select(
                'atendimentos.id as id',
                'atendimentos.created_at as inicio_atendimento',
                'atendimentos.confirmacao as confirmacao',
                'necessidades.descricao as descricao',
                'categoria_necessidades.categoria as categoria',
                'beneficiarios.cidade as cidade',
                'beneficiarios.bairro as bairro',
                'beneficiarios.rua as rua',
                'beneficiarios.complemento_endereco as complemento_endereco'
            )
            ->orderBy('confirmacao')
            ->get();
    }

    public function listarDoBeneficiario(int $idBeneficiario){
        return DB::table('atendimentos')
            ->where('beneficiario_id', $idBeneficiario)
            ->where('atendimentos.confirmacao', null)
            ->join('apoiadors', 'apoiadors.id', '=', 'atendimentos.apoiador_id')
            ->join('necessidades', 'atendimentos.necessidade_id', '=', 'necessidades.id')
            ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
            ->select(
                'atendimentos.id as id',
                'necessidades.descricao as descricao',
                'atendimentos.created_at as inicio_atendimento',
                'necessidades.beneficiario_id as beneficiario_id',
                'categoria_necessidades.categoria as categoria',
                'apoiadors.nome as nome'
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
            'atendimentos.confirmacao as confirmacao',
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

    public function consultarDoBeneficiario(int $id){
        return DB::table('atendimentos')
        ->where('atendimentos.id', $id)
        ->join('necessidades', 'atendimentos.necessidade_id', '=', 'necessidades.id')
        ->join('categoria_necessidades', 'necessidades.categoria_id', '=', 'categoria_necessidades.id')
        ->join('apoiadors', 'apoiadors.id', '=', 'atendimentos.apoiador_id')
        ->select(
            'atendimentos.id as id',
            'atendimentos.created_at as inicio_atendimento',
            'necessidades.descricao as descricao',
            'categoria_necessidades.categoria as categoria',
            'apoiadors.nome as nome',
            'apoiadors.telefone as telefone',
            'apoiadors.cidade as cidade',
            'apoiadors.bairro as bairro',
            'apoiadors.rua as rua',
            'apoiadors.complemento_endereco as complemento_endereco'
        )
        ->get();
    }

    public function finalizar(int $id) : Atendimento{
        $atendimento = Atendimento::findOrFail($id);
        $atendimento->confirmacao = new DateTime('now');
        $atendimento->saveOrFail();
        return $atendimento;
    }

    public function cancelar(int $id){
        $atendimento = Atendimento::findOrFail($id);
        Necessidade::findOrFail($atendimento->necessidade_id);
        $atendimento->delete();
    }
}
