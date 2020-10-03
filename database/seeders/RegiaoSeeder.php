<?php

namespace Database\Seeders;

use App\Models\Regioes;
use Illuminate\Database\Seeder;

class RegiaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Regioes::insert(['regiao'=>'Grande Florianópolis']);
        Regioes::insert(['regiao'=>'Norte Catarinense']);
        Regioes::insert(['regiao'=>'Serrana']);
        Regioes::insert(['regiao'=>'Vale do Itajaí']);
        Regioes::insert(['regiao'=>'Oeste Catarinense']);
        Regioes::insert(['regiao'=>'Sul Catarinense']);
        Regioes::insert(['regiao'=>'Noroeste Paranaense']);
        Regioes::insert(['regiao'=>'Centro Ocidental Paranaense']);
        Regioes::insert(['regiao'=>'Norte Central Paranaense']);
        Regioes::insert(['regiao'=>'Norte Pioneiro Paranaense']);
        Regioes::insert(['regiao'=>'Centro Oriental Paranaense']);
        Regioes::insert(['regiao'=>'Oeste Paranaense']);
        Regioes::insert(['regiao'=>'Sudoeste Paranaense']);
        Regioes::insert(['regiao'=>'Centro-Sul Paranaense']);
        Regioes::insert(['regiao'=>'Sudeste Paranaense']);
        Regioes::insert(['regiao'=>'Metropolitana de Curitiba']);
        Regioes::insert(['regiao'=>'Noroeste Rio-Grandense']);
        Regioes::insert(['regiao'=>'Nordeste Rio-Grandense']);
        Regioes::insert(['regiao'=>'Centro Ocidental Rio-Grandense']);
        Regioes::insert(['regiao'=>'Centro Oriental Rio-Grandense']);
        Regioes::insert(['regiao'=>'Metropolitana de Porto Alegre']);
        Regioes::insert(['regiao'=>'Sudoeste Rio-Grandense']);
        Regioes::insert(['regiao'=>'Sudeste Rio-Grandense']);
    }
}
