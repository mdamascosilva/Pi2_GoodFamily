<?php

namespace Database\Seeders;

use App\Models\CategoriaNecessidade;
use Illuminate\Database\Seeder;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaNecessidade::insert(['categoria'=>'Emprego']);
        CategoriaNecessidade::insert(['categoria'=>'Comida']);
        CategoriaNecessidade::insert(['categoria'=>'Remedio']);
        CategoriaNecessidade::insert(['categoria'=>'Moradia']);
        CategoriaNecessidade::insert(['categoria'=>'Moveis']);
        CategoriaNecessidade::insert(['categoria'=>'Utensilios']);
    }
}
