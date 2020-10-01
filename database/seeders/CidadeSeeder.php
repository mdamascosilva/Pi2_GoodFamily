<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidade::insert(['cidade'=>'Palhoça']);
        Cidade::insert(['cidade'=>'São José']);
        Cidade::insert(['cidade'=>'Florianópolis']);
        Cidade::insert(['cidade'=>'Biguaçu']);
        Cidade::insert(['cidade'=>'Santo Amaro do Imperatriz']);
        Cidade::insert(['cidade'=>'São Pedro de Alcântara']);
        Cidade::insert(['cidade'=>'Curitiba']);
        Cidade::insert(['cidade'=>'Pinhais']);
        
    }
}
