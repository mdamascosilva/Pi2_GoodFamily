<?php

namespace Database\Seeders;

use App\Models\Bairro;
use Illuminate\Database\Seeder;

class BairroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bairro::insert(['bairro'=>'Centro']);
        Bairro::insert(['bairro'=>'Jardim Eldorado']);
        Bairro::insert(['bairro'=>'Frei Damião']);
        Bairro::insert(['bairro'=>'Bela Vista']);
        Bairro::insert(['bairro'=>'Ponte do Imaruim']);
        Bairro::insert(['bairro'=>'Passa Vinte']);
        Bairro::insert(['bairro'=>'Caminho Novo']);
        Bairro::insert(['bairro'=>'Forquilhinhas']);
        Bairro::insert(['bairro'=>'Roçado']);
        Bairro::insert(['bairro'=>'Estreito']);
        Bairro::insert(['bairro'=>'Coqueiros']);
        Bairro::insert(['bairro'=>'Barreiros']);
        Bairro::insert(['bairro'=>'Campinas']);
        Bairro::insert(['bairro'=>'Kobrassol']);
        Bairro::insert(['bairro'=>'Itacorubi']);
        Bairro::insert(['bairro'=>'Ingleses']);
        Bairro::insert(['bairro'=>'Lagoa da Conceição']);
        Bairro::insert(['bairro'=>'Merces']);
        Bairro::insert(['bairro'=>'Boqueirão']);
        Bairro::insert(['bairro'=>'Água Verde']);
        Bairro::insert(['bairro'=>'Xaxim']);
        Bairro::insert(['bairro'=>'Pinheirinho']);
        Bairro::insert(['bairro'=>'Juveve']);
        Bairro::insert(['bairro'=>'Vila Esplanada']);
        
    }
}
