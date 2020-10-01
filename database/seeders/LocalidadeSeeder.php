<?php

namespace Database\Seeders;

use App\Models\Localidade;
use Illuminate\Database\Seeder;

class LocalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'1','bairro_id'=>'1']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'1','bairro_id'=>'2']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'1','bairro_id'=>'3']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'1','bairro_id'=>'4']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'1','bairro_id'=>'5']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'1','bairro_id'=>'6']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'1','bairro_id'=>'7']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'2','bairro_id'=>'8']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'2','bairro_id'=>'9']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'3','bairro_id'=>'10']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'3','bairro_id'=>'11']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'2','bairro_id'=>'12']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'2','bairro_id'=>'13']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'2','bairro_id'=>'14']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'3','bairro_id'=>'15']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'3','bairro_id'=>'16']);
        Localidade::insert(['uf'=>'SC','regiao_id'=>'1','cidade_id'=>'3','bairro_id'=>'17']);
        Localidade::insert(['uf'=>'PR','regiao_id'=>'2','cidade_id'=>'7','bairro_id'=>'18']);
        Localidade::insert(['uf'=>'PR','regiao_id'=>'2','cidade_id'=>'7','bairro_id'=>'19']);
        Localidade::insert(['uf'=>'PR','regiao_id'=>'2','cidade_id'=>'7','bairro_id'=>'20']);
        Localidade::insert(['uf'=>'PR','regiao_id'=>'2','cidade_id'=>'7','bairro_id'=>'21']);
        Localidade::insert(['uf'=>'PR','regiao_id'=>'2','cidade_id'=>'7','bairro_id'=>'22']);
        Localidade::insert(['uf'=>'PR','regiao_id'=>'2','cidade_id'=>'7','bairro_id'=>'23']);
        Localidade::insert(['uf'=>'PR','regiao_id'=>'2','cidade_id'=>'8','bairro_id'=>'24']);
        
        
        
    }
}
