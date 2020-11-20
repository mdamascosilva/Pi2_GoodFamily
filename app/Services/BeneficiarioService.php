<?php

namespace App\Services;

use App\Http\Requests\BeneficiarioRequest;
use App\Models\Beneficiario;

class BeneficiarioService
{

    public function salvar(int $id, BeneficiarioRequest $request): Beneficiario
    {
        $beneficiario = new Beneficiario();

        $beneficiario->id = $id;
        $beneficiario->nome = $request->get('nome');
        $beneficiario->documento = $request->get('documento');
        $beneficiario->pais_origem = $request->get('pais_origem');
        $beneficiario->telefone = $request->get('telefone');
        $beneficiario->cep = $request->get('cep');
        $beneficiario->uf = $request->get('uf');
        $beneficiario->ddd = $request->get('ddd');
        $beneficiario->cidade = $request->get('cidade');
        $beneficiario->bairro = $request->get('bairro');
        $beneficiario->rua = $request->get('rua');
        $beneficiario->complemento_endereco = $request->get('complemento_endereco');
        $beneficiario->historia = $request->get('historia');

        $beneficiario->saveOrFail();
        return $beneficiario;
    }
}
