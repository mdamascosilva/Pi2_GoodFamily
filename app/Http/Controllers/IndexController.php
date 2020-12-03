<?php

namespace App\Http\Controllers;

use App\Models\Apoiador;
use App\Services\NecessidadeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    public function index(Request $request)
    {
        if (Auth::check()) 
            return call_user_func([$this, Auth::user()->user_type . '_index'], $request);
    
        $necessidadeService = new NecessidadeService();

        $numeros = $necessidadeService->buscarNumerosParaGrafico();
        $necessidades =$necessidadeService->buscarNecessidadesAleatorias();
        $mensagem = $request->session()->get('mensagem');
        return view('index', compact('numeros', 'necessidades', 'mensagem')); 
    }

    public function apoiador_index(Request $request)
    {
        $apoiador = Apoiador::findOrFail(Auth::id());
        $necessidadeService = new NecessidadeService();
        $necessidades = $necessidadeService->buscarNecessidadesProximoAoApoiador($apoiador);
        $mensagem = $request->session()->get('mensagem');
        return view('Apoiadores.index', compact('mensagem', 'necessidades'));
    }

    public function beneficiario_index(Request $request)
    {
        $necessidadeService = new NecessidadeService();
        $necessidades = $necessidadeService->listarNecessidadesDoBeneficiario();
        $mensagem = $request->session()->get('mensagem');
        return view('Beneficiarios.index', compact('mensagem', 'necessidades'));
    }

    public function noticias()
    {
        return view('noticias.noticia');
    }

    public function contato()
    {
        return view('outros.contato');
    }

    public function quemSomos()
    {
        return view('outros.quem_somos');
    }
}
