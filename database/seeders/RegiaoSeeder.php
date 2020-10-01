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
        Regioes::insert(['regiao'=>'Grande Curitiba']);

    }
}
