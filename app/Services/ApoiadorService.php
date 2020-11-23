<?php

namespace App\Services;

use App\Http\Requests\ApoiadorRequest;
use App\Models\Apoiador;

class ApoiadorService
{

    public function salvar(int $id, ApoiadorRequest $request): Apoiador
    {
        $Apoiador = $this->getApoiador($id, $request);
        $Apoiador->saveOrFail();
        return $Apoiador;
    }

    public function atualizar(int $id, ApoiadorRequest $request): Apoiador{
        $Apoiador = $this->getApoiador($id, $request);
        $Apoiador->update();
        return $Apoiador;
    }

    function getApoiador(int $id, ApoiadorRequest $request) : Apoiador{

        $Apoiador = new Apoiador();

        $Apoiador->id = $id;
        $Apoiador->nome = $request->get('nome');
        $Apoiador->cpf = $request->get('cpf');
        $Apoiador->telefone = $request->get('telefone');
        $Apoiador->cep = $request->get('cep');
        $Apoiador->uf = $request->get('uf');
        $Apoiador->ddd = $request->get('ddd');
        $Apoiador->cidade = $request->get('cidade');
        $Apoiador->bairro = $request->get('bairro');
        $Apoiador->rua = $request->get('rua');
        $Apoiador->complemento_endereco = $request->get('complemento_endereco');

        return $Apoiador;
    }
}
