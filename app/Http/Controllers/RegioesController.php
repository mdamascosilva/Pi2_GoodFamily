<?php

namespace App\Http\Controllers;

use App\Models\Bairro;
use App\Models\Cidade;
use App\Models\Regioes;
use Illuminate\Support\Facades\DB;

class RegioesController extends Controller
{
    
    public function getRegiao($uf){
        return [array('regioes' => Regioes::all())];
    }

    public function getCidadePorRegiao($regiao){
        return [array('cidades' => Cidade::all())];
    }

    public function getCidade($uf){
        $cidades = DB::table('localidades')
                    ->join('cidades', function ($join){
                        $join->on('localidades.cidade_id', '=', 'cidades.id');
                    })
                    ->select('localidades.cidade_id as id', 'cidades.cidade as cidade')
                    ->where('localidades.uf', '=', $uf)
                    ->groupBy('localidades.cidade_id')
                    ->get();
       

        return [array('cidades' => $cidades)];
    }

    public function getBairro($cidade){
        $bairros = DB::table('localidades')
                    ->join('bairros', function ($join){
                        $join->on('localidades.bairro_id', '=', 'bairros.id');
                    })
                    ->select('localidades.bairro_id as id', 'bairros.bairro as bairro')
                    ->where('localidades.cidade_id', '=', $cidade)
                    ->groupBy('localidades.bairro_id')
                    ->get();

        return [array('bairros' => $bairros)];
    }

    public static function cidades($uf){

        $cidades = DB::table('localidades')
                    ->join('cidades', function ($join){
                        $join->on('localidades.cidade_id', '=', 'cidades.id');
                    })
                    ->select('localidades.cidade_id as id', 'cidades.cidade as cidade')
                    ->where('localidades.uf', '=', $uf)
                    ->groupBy('localidades.cidade_id')
                    ->get();

        return $cidades;
    }

    public static function bairros($cidade){
        $bairros = DB::table('localidades')
                    ->join('bairros', function ($join){
                        $join->on('localidades.bairro_id', '=', 'bairros.id');
                    })
                    ->select('localidades.bairro_id as id', 'bairros.bairro as bairro')
                    ->where('localidades.cidade_id', '=', $cidade)
                    ->groupBy('localidades.bairro_id')
                    ->get();

        return $bairros;
    }
}
