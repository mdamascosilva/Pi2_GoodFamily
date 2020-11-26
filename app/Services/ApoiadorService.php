<?php

namespace App\Services;

use App\Http\Requests\ApoiadorRequest;
use App\Models\Apoiador;

class ApoiadorService
{

    public function salvar(int $id, ApoiadorRequest $request): Apoiador {
        $apoiador = new Apoiador();
        $apoiador->id = $id;
        $apoiador = $this->getApoiador( $apoiador, $request);
        $apoiador->saveOrFail();

        return $apoiador;
    }

    public function atualizar(int $id, ApoiadorRequest $request): Apoiador {
        $apoiador = Apoiador::find( $id);
        $apoiador = $this->getApoiador( $apoiador, $request);
        $apoiador->saveOrFail();

        return $apoiador;
    }

    function getApoiador( Apoiador $apoiador, ApoiadorRequest $request) : Apoiador {

        $apoiador->nome = $request->get('nome');
        $apoiador->cpf = $request->get('cpf');
        $apoiador->telefone = $request->get('telefone');
        $apoiador->cep = $request->get('cep');
        $apoiador->uf = $request->get('uf');
        $apoiador->ddd = $request->get('ddd');
        $apoiador->cidade = $request->get('cidade');
        $apoiador->bairro = $request->get('bairro');
        $apoiador->rua = $request->get('rua');
        $apoiador->complemento_endereco = $request->get('complemento_endereco');

        return $apoiador;
    }
}
