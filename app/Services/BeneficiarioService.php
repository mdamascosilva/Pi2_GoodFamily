<?php

namespace App\Services;

use App\Http\Requests\BeneficiarioRequest;
use App\Models\Beneficiario;

class BeneficiarioService
{

    public function salvar(int $id, string $nome, BeneficiarioRequest $request): Beneficiario {
        $beneficiario = new Beneficiario();
        $beneficiario->id = $id;
        $beneficiario->nome = $nome;
        $beneficiario = $this->getBeneficiario($beneficiario, $request);
        $beneficiario->saveOrFail();

        return $beneficiario;
    }

    public function atualizar(int $id, BeneficiarioRequest $request): Beneficiario {
        $beneficiario = Beneficiario::find($id);
        $beneficiario = $this->getBeneficiario($beneficiario, $request);
        $beneficiario->saveOrFail();

        return $beneficiario;
    }

    function getBeneficiario( Beneficiario $beneficiario, BeneficiarioRequest $request) : Beneficiario {

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

        return $beneficiario;
    }
}
