<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use App\Services\AtendimentoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AtendimentoController extends Controller
{
    
    public function atender(int $idNecessidade, Request $request, AtendimentoService $atendimentoService){
        $atendimentoService->atender($idNecessidade, Auth::id());
        $request->session()->flash(
            'mensagem',
            'Obrigado pelo atendimento da necessidade! Consulte seus atendimento no menu Meus Atendimentos'
        );
        return redirect()->route('index');
    }

    public function listar(AtendimentoService $atendimentoService){
        $atendimentos = $atendimentoService->listar(Auth::id());
        return view('Atendimento.listar', compact('atendimentos'));
    }

    public function consultar(int $id, AtendimentoService $atendimentoService){
        $atendimentos = $atendimentoService->consultar($id);
        return view('Atendimento.consultar', compact('atendimentos'));
    }

    public function descreverFinalizacao(int $id, AtendimentoService $atendimentoService){
        return view('Atendimento.finalizar', compact('id'));
    }

    public function finalizar(int $id, Request $request, AtendimentoService $atendimentoService){
        if (Auth::id() == Atendimento::findOrFail($id)->apoiador_id){

            $atendimentoService->finalizar($id, $request->get('descricao'));
            $request->session()->flash(
                'mensagem',
                'Atendimento finalizado com sucesso!'
            );

        } else {
            $request->session()->flash(
                'mensagem',
                'Apoiador inválido para o atendimento'
            );
        }

        return redirect()->route('index');
    }

    public function cancelar(int $id, Request $request, AtendimentoService $atendimentoService){

        if (Auth::id() == Atendimento::findOrFail($id)->apoiador_id){

            $atendimentoService->cancelar($id);
            $request->session()->flash(
                'mensagem',
                'Atendimento cancelado'
            );

        } else {
            $request->session()->flash(
                'mensagem',
                'Apoiador inválido para o atendimento'
            );
        }

        return redirect()->route('index');
    }

}
