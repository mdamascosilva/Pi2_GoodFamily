<?php

namespace App\Services;

use App\Http\Requests\NecessidadeRequest;
use App\Models\Necessidade;
use Illuminate\Support\Facades\Auth;

class NecessidadeService
{

    public function salvar(NecessidadeRequest $request): Necessidade {
        $necessidade = new Necessidade();
        $necessidade = $this->getApoiador( $necessidade, $request);
        $necessidade->saveOrFail();

        return $necessidade;
    }

    public function atualizar(int $id, NecessidadeRequest $request): Necessidade {
        $necessidade = Necessidade::find($id);
        $necessidade = $this->getApoiador( $necessidade, $request);
        $necessidade->saveOrFail();

        return $necessidade;
    }

    function getApoiador( Necessidade $necessidade, NecessidadeRequest $request) : Necessidade {

        $necessidade->categoria_id = $request->get('categoria_id');
        $necessidade->beneficiario_id = Auth::id();
        $necessidade->descricao = $request->get('descricao');
        $necessidade->status_necessidade = 'aberto';

        return $necessidade;
    }
}
